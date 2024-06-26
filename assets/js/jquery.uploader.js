 

if(typeof jQuery !== undefined){
    (function($){
 
        var ImageUploader = function (params) {
            this.currentThumbnail = null;
            this.options = [];
            this.init(params);
            this.main();
        }
 
        ImageUploader.defaults = {
            fileField: null,
            urlField: null,
            urlFieldSubmit: null,

            hideFileField: true,
            hideUrlField: true,

            url: null,

            thumbnails: {
                div: null,
                width: null,
                height: null
            },

            maxFileSize: 0,
            allowDuplicate: false,

            thumbnailReady: $.noop,

            onFileAdded: function(file) { return false; },
            onFilesSelected: function() { return false; },
            onUrlSelected: function() { return false; },
            onDragStart: function(event) { return false; },
            onDragEnd: function(event) { return false; },
            onDragEnter: function(event) { return false; },
            onDragLeave: function(event) { return false; },
            onDragOver: function(event) { return false; },
            onDrop: function(event) { return false; },
            onUploadProgress: function(event) { return false; },
            beforeUpload: function() { return true; },
            afterUpload: function() { return false; },
            error: function(msg) { alert(msg); }
        }

        ImageUploader.prototype = {
 
            init: function (params) {
                this.options = $.extend({}, ImageUploader.defaults, params);

                this.canUpload = true;
                this.uploadFileList = new Array();
                this.allUploadedFileList = new Array();
                this.currentThumbnail = null;
            },

             
            fileApiSupported: function() {
                return (window.File && window.FileReader && window.FileList && window.FormData);
            },

             
            onDragLeave: function(event) {
                if ($(event.target)[0] === event.data.instance.options.dropZone[0]) {
 
                    return event.data.instance.options.onDragLeave(event);
                }
            },

             
            onDragEnter: function (event) {
                if ($(event.target)[0] === event.data.instance.options.dropZone[0]) {
 
                    return event.data.instance.options.onDragEnter(event);
                }
            },

             
            onDragStart: function (event) {
                event.preventDefault();
                event.stopPropagation();
                return event.data.instance.options.onDragStart(event);
            },

             
            onDragEnd: function (event) {
                event.preventDefault();
                event.stopPropagation();
                return event.data.instance.options.onDragEnd(event);
            },

             
            onDragOver: function (event) {
                event.preventDefault();
                event.stopPropagation();

                return event.data.instance.options.onDragOver(event);
            },

             
            onDrop: function (event) {
                event.preventDefault();
                event.stopPropagation();
                event.data.instance.addFiles(event.originalEvent.dataTransfer.files);

                return event.data.instance.options.onDrop(event);
            },


            uploadStarted: function (event) {
                if (this.options.thumbnails) {
                    this.currentThumbnail = this.options.thumbnails.div.find('[data-upload-status="waiting"]:first');
                    this.currentThumbnail.attr('data-upload-status', 'uploading');
                    this.currentThumbnail.append($('<div class="progress" />').append($('<div />')));
                }
            },

             
            onUploadProgress: function (event) {
                if (event.lengthComputable) {
                    if (!this.currentThumbnail || this.currentThumbnail.length == 0) {
                        this.uploadStarted();
                    }

                    if (this.currentThumbnail) {
                        this.currentThumbnail.find('.progress > div').width(event.loaded * 100 / event.total + '%');
                    }
                }

                return this.options.onUploadProgress(event);
            },

             
            uploadComplete: function (event) {
                xhr = event.currentTarget;
                this.canUpload = true;

                if (xhr.status == 200) {
                    var thumbnailToReturn = null;
                    if (this.currentThumbnail) {
                        this.currentThumbnail.find('.progress > div').width('100%');
                        thumbnailToReturn = this.currentThumbnail;
                        this.currentThumbnail = null;
                    }
                    this.options.afterUpload(event.target.response, thumbnailToReturn);
                    this.uploadNextFile();
                } else {
                    this.uploadFailed();
                }
            },

             
            uploadFailed: function () {
                this.canUpload = true;
                if (this.currentThumbnail) {
                    this.currentThumbnail.remove();
                }
                this.currentThumbnail = null;
                this.options.error('upload failed');
                this.uploadNextFile();
            },

             
            uploadCanceled: function () {
                this.canUpload = true;
                this.currentThumbnail = null;
                this.options.error('upload canceled');
                this.uploadNextFile();
            },

             
            addUploadFile: function (file) {
                this.allUploadedFileList.push(file);
                this.uploadFileList.push(file);
                this.uploadNextFile();
            },

             
            fileAlreadyUploaded: function (file) {
                for (i in this.allUploadedFileList) {
                    f = this.allUploadedFileList[i];
                    if (file.name == f.name && file.size == f.size && file.type == f.type) {
                        return true;
                    }
                }
                return false;
            },

             
            uploadNextFile: function () {
                if (this.canUpload && this.uploadFileList.length > 0) {
                    file = this.uploadFileList.shift();
                    this.canUpload = false;
                    this.uploadFile(file);
                }
            },

             
            uploadFile: function (file) {
                xhr = new XMLHttpRequest();
                if (xhr.upload && this.options.beforeUpload()) {
                    xhr.open("POST", this.options.url);

                    if (file instanceof File) {
                        var fd = new FormData();
                        fd.append('file', file);
                    } else {
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        var fd = 'url=' + encodeURIComponent(file.name);
                    }


                     
                    xhr.upload.addEventListener('progress',  this.onUploadProgress.bind(this), false);
                    xhr.addEventListener("loadstart", this.uploadStarted.bind(this), false);
                    xhr.addEventListener("load", this.uploadComplete.bind(this), false);
                    xhr.addEventListener("error", this.uploadFailed.bind(this), false);
                    xhr.addEventListener("abort", this.uploadCanceled.bind(this), false);

                    xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");

                    xhr.send(fd);
                }
            },

             
            onFilesSelected: function (event) {
                event.preventDefault();
                event.stopPropagation();
                event.data.instance.addFiles(event.target.files);
                $(this).val('');

                return event.data.instance.options.onFilesSelected();
            },

             
            onUrlSelected: function (event) {
                var instance = event.data.instance;
                var url = instance.options.urlField.val();
                if (url) {
                    instance.addFileByUrl(url);
                }

                return instance.options.onUrlSelected();
            },

             
            addFileByUrl: function (url) {
                return this.addFile({ name: url });
            },

             
            addFile: function (file) {
                return this.addFiles([file]);
            },

             
            addFiles: function (files) {
                if (this.fileApiSupported()) {
                    var reader = null;

                    for (var i=0; i < files.length; i++) {
                        if (this.options.maxFileSize > 0 && file.size > this.options.maxFileSize) {
                            return this.options.error('the file you are trying to upload is too big');
                        } else if (!this.options.allowDuplicate && this.fileAlreadyUploaded(files[i])) {
                            return this.options.error('the file you are trying to upload has already been sent');
                        } else {
                            this.options.onFileAdded(files[i]);

                            if (this.options.thumbnails || this.options.thumbnailReady != $.noop) {
                                if (files[i] instanceof File) {
                                    this.options.thumbnails.div.file = files[i];
                                    reader = new FileReader();
                                    var _this = this;
                                    reader.onload = function (evt) {
                                        _this.displayImage(evt.target.result);
                                     };
                                    reader.readAsDataURL(files[i]);
                                } else {
                                    this.displayImage(files[i].name);
                                }
                            }

                            try {
                                this.addUploadFile(files[i]);
                            } catch (e) {
                                this.uploadFailed();
                            }
                        }
                    }
               } else {
                   alert('files api not supported');
               }
            },

            displayImage: function (src) {
                var thumb = new Image();
                thumb.src = src;
                $(thumb).hide();
                var thumbContainer = $('<div />')
                    .attr('data-upload-status', 'waiting')
                    .css({'overflow': 'hidden', 'position': 'relative'})
                    .append(thumb);

                var _this = this;
                thumb.onload = function() {
                    var otw = _this.options.thumbnails.width;
                    var oth = _this.options.thumbnails.height;
                    var ratio = thumb.width / thumb.height;

                    if (_this.options.thumbnails.crop && otw > 0 && oth > 0) {
                        thumbContainer.width(otw);
                        thumbContainer.height(oth);
                        $(thumb).css('position', 'absolute');
                        var wantedRatio = otw / oth;

                        if (wantedRatio > ratio) {
 
                            if (_this.options.thumbnails.crop == 'zoom') {
                                thumb.width = otw;
                                thumb.height = otw / ratio;
                                $(thumb).css('top', '-' + parseInt((thumb.height - oth) / 2) + 'px');
                            } else {
                                thumb.width = oth * ratio;
                                thumb.height = oth;
                                $(thumb).css('left', parseInt((otw - thumb.width) / 2) + 'px');
                            }
                        } else {
                            if (_this.options.thumbnails.crop == 'zoom') {
                                thumb.height = oth;
                                thumb.width = oth * ratio;
                                $(thumb).css('left', '-' + parseInt((thumb.width - otw) / 2) + 'px');
                            } else {
                                thumb.width = otw;
                                thumb.height = oth / ratio;
                                $(thumb).css('top', parseInt((oth - thumb.height) / 2) + 'px');
                            }
                        }
                    } else {
                        if (otw > 0) {
                            thumb.width = otw;
                        } else if (oth > 0) {
                            thumb.width = oth * ratio;
                        }

                        if (oth > 0) {
                            thumb.height = oth;
                        } else if (otw > 0) {
                            thumb.height = otw / ratio;
                        }
                    }
                    $(thumb).css({ width: thumb.width, height : thumb.height });

                    $(thumb).show('slow');
                }

                if (this.options.thumbnailReady != $.noop) {
                    this.options.thumbnailReady(thumbContainer);
                } else {
                    this.options.thumbnails.div.append(thumbContainer);
                }
            },

             
            prepareThumbnails: function () {
                if (this.options.thumbnails) {
                    if (typeof this.options.thumbnails != 'object') {
                        var tmpDiv = null;
                        if (typeof this.options.thumbnails == 'string') {
                            tmpDiv = $(this.options.thumbnails);
                        }
                        this.options.thumbnails = { div: tmpDiv, width: null, height: null };
                    }

                    if (typeof this.options.thumbnails.div == 'string') {
                        this.options.thumbnails.div = $(this.options.thumbnails.div);
                    }

                    if (typeof this.options.thumbnails == 'object' && this.options.thumbnails.div == undefined) {
                        this.options.thumbnails.div = null;
                    }

                    if (this.options.thumbnails.div == null) {
                        this.options.thumbnails.div = $('<div class="fileUploadThumbnails" />');
                        this.options.dropZone.after(this.options.thumbnails.div);
                    }
                }
            },

            main: function() {
 
 
 
                var _this = this;
 
                if (this.options.dropZone != null) {
                    this.options.dropZone.on('dragstart', { instance: this }, this.onDragStart);
                    this.options.dropZone.on('dragend',   { instance: this }, this.onDragEnd);
                    this.options.dropZone.on('dragleave', { instance: this }, this.onDragLeave);
                    this.options.dropZone.on('dragenter', { instance: this }, this.onDragEnter);
                    this.options.dropZone.on('dragover',  { instance: this }, this.onDragOver);
                    this.options.dropZone.on('drop',      { instance: this }, this.onDrop);
                }

                if (this.options.fileField != null) {
 
                    if (typeof this.options.fileField == 'string') {
                        this.options.fileField = $(this.options.fileField);
                    }
                    this.options.dropZone.on('click', function() {
                        _this.options.fileField.trigger('click');
                    });

                    this.options.fileField.on('change', {instance: this}, this.onFilesSelected);
                    if (this.options.hideFileField == true) {
                        this.hide(this.options.fileField);
                    }
                }

                if (this.options.urlField != null) {
                    if (typeof this.options.urlField == 'string') {
                        this.options.urlField = $(this.options.urlField);
                    }

                    if (this.options.urlFieldSubmit !== null) {
                        if (typeof this.options.urlFieldSubmit == 'string') {
                            this.options.urlFieldSubmit = $(this.options.urlFieldSubmit);
                        }
                        this.options.urlFieldSubmit.on('click', {instance: this}, this.onUrlSelected);
                    } else {
                        this.options.urlField.on('change', {instance: this}, this.onUrlSelected);
                    }

                    if (this.options.hideUrlField == true) {
                        this.hide(this.options.urlField);
                    }
                }
 
                this.prepareThumbnails();

                return this;
            },

             
            hide: function($element) {
                $element.css({
                    'width': '0px',
                    'height': '0px',
                    'padding': '0px',
                    'margin': '0px',
                    'border': 'none'
                });
            }
        };

        $.fn.imageUploader = function(params) {
            params = $.extend({ dropZone: $(this) }, params);
            var instance = new ImageUploader(params);

            $(this).data('imageUploader', instance);

            return this;
        };

    })(jQuery);
}
