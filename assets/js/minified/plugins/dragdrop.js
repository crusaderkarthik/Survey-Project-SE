 

!function(n){"use strict";var v="data:image/gif;base64,R0lGODlhlgBkAPABAH19ffb29iH5BAAKAAAAIf4aQ3JlYXRlZCB3aXRoIGFqYXhsb2FkLmluZm8AIf8LTkVUU0NBUEUyLjADAQAAACwAAAAAlgBkAAAC1YyPqcvtD6OctNqLs968+w+G4kiW5omm6sq27gvH8kzX9o3n+s73/g8MCofEovGITCqXzKbzCY1Kp9Sq9YrNarfcrvcLDovH5LL5jE6r1+y2+w2Py+f0uv2OvwD2fP6iD/gH6Pc2GIhg2JeQSNjGuLf4GMlYKIloefAIUEl52ZmJyaY5mUhqyFnqmQr6KRoaMKp66hbLumpQ69oK+5qrOyg4a6qYV2x8jJysvMzc7PwMHS09TV1tfY2drb3N3e39DR4uPk5ebn6Onq6+zt7u/g4fL99UAAAh+QQACgAAACwAAAAAlgBkAIEAAAB9fX329vYAAAAC3JSPqcvtD6OctNqLs968+w+G4kiW5omm6sq27gvH8kzX9o3n+s73/g8MCofEovGITCqXzKbzCY1Kp9Sq9YrNarfcrvcLDovH5LL5jE6r1+y2+w2Py+f0uv2OvwD2fP4iABgY+CcoCNeHuJdQyLjIaOiWiOj4CEhZ+SbZd/nI2RipqYhQOThKGpAZCuBZyArZprpqSupaCqtaazmLCRqai7rb2av5W5wqSShcm8fc7PwMHS09TV1tfY2drb3N3e39DR4uPk5ebn6Onq6+zt7u/g4fLz9PX29/j5/vVAAAIfkEAAoAAAAsAAAAAJYAZACBAAAAfX199vb2AAAAAuCUj6nL7Q+jnLTai7PevPsPhuJIluaJpurKtu4Lx/JM1/aN5/rO9/4PDAqHxKLxiEwql8ym8wmNSqfUqvWKzWq33K73Cw6Lx+Sy+YxOq9fstvsNj8vn9Lr9jr8E9nz+AgAYGLjQVwhXiJgguAiYgGjo9tinyCjoKLn3hpmJUGmJsBmguUnpCXCJOZraaXoKShoJe9DqehCqKlnqiZobuzrbyvuIO8xqKpxIPKlwrPCbBx0tPU1dbX2Nna29zd3t/Q0eLj5OXm5+jp6uvs7e7v4OHy8/T19vf4+fr7/P379UAAAh+QQACgAAACwAAAAAlgBkAIEAAAB9fX329vYAAAAC4JSPqcvtD6OctNqLs968+w+G4kiW5omm6sq27gvH8kzX9o3n+s73/g8MCofEovGITCqXzKbzCY1Kp9Sq9YrNarfcrvcLDovH5LL5jE6r1+y2+w2Py+f0uv2OvwT2fP6iD7gAMEhICAeImIAYiFDoOPi22KcouZfw6BhZGUBZeYlp6LbJiTD6CQqg6Vm6eQqqKtkZ24iaKtrKunpQa9tmmju7Wwu7KFtMi3oYDMzompkHHS09TV1tfY2drb3N3e39DR4uPk5ebn6Onq6+zt7u/g4fLz9PX29/j5+vv8/f31QAADs=",c=void 0!==window.FileReader,u=/data:[^;]+;base64,/i;function g(e){for(var t=e.substr(5,e.indexOf(";")-5),n=atob(e.substr(e.indexOf(",")+1)),r=new Uint8Array(n.length),i=0;i<n.length;i++)r[i]=n[i].charCodeAt(0);try{return new Blob([r],{type:t})}catch(e){return null}}n.plugins.dragdrop=function(){if(c){var A,r,o,i,a,s=0;this.signalReady=function(){A=(r=this).opts.dragdrop||{},o=A.handleFile,i=r.getContentAreaContainer().parentNode,a=i.appendChild(n.dom.parseHTML('<div class="sceditor-dnd-cover" style="display: none"><p>'+r._("Drop files here")+"</p></div>").firstChild),i.addEventListener("dragover",e),i.addEventListener("dragleave",d),i.addEventListener("dragend",d),i.addEventListener("drop",t),r.getBody().addEventListener("dragover",e),r.getBody().addEventListener("drop",d)},this.signalPasteHtml=function(e){if(!("handlePaste"in A)||A.handlePaste){var t=document.createElement("div");t.innerHTML=e.val;for(var n=t.querySelectorAll("img"),r=0;r<n.length;r++){var i=n[r];if(u.test(i.src)){var a=g(i.src);a&&l(a)?o(a,f(i)):i.parentNode.removeChild(i)}}e.val=t.innerHTML}}}function d(){a.style.display="none",i.className=i.className.replace(/(^| )dnd( |$)/g,"")}function l(e){return!("application/x-moz-file"!==e.type&&A.allowedTypes&&A.allowedTypes.indexOf(e.type)<0)&&(!A.isAllowed||A.isAllowed(e))}function f(e){var n=document.createElement("img");function t(e){var t=r.getBody().ownerDocument.getElementById(n.id);t&&("string"==typeof e&&t.insertAdjacentHTML("afterend",e),t.parentNode.removeChild(t))}return n.src=v,n.className="sceditor-ignore",n.id="sce-dragdrop-"+s++,function(){return e?e.parentNode.replaceChild(n,e):r.wysiwygEditorInsertHtml(n.outerHTML),{insert:function(e){t(e)},cancel:t}}}function e(e){for(var t=e.dataTransfer,n=t.files.length||!t.items?t.files:t.items,r=0;r<n.length;r++)if("string"===n[r].kind)return;"none"===a.style.display&&(a.style.display="block",i.className+=" dnd"),e.preventDefault()}function t(e){var t=e.dataTransfer,n=t.files.length||!t.items?t.files:t.items;d();for(var r=0;r<n.length;r++){if("string"===n[r].kind)return;l(n[r])&&o(n[r],f())}e.preventDefault()}}}(sceditor);