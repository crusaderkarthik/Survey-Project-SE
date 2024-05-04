<?php
 


   
  class Google_ObjectAccessControlsServiceResource extends Google_ServiceResource {


     
    public function insert($bucket, $object, Google_ObjectAccessControl $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_ObjectAccessControl($data);
      } else {
        return $data;
      }
    }
     
    public function get($bucket, $object, $entity, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_ObjectAccessControl($data);
      } else {
        return $data;
      }
    }
     
    public function listObjectAccessControls($bucket, $object, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_ObjectAccessControls($data);
      } else {
        return $data;
      }
    }
     
    public function update($bucket, $object, $entity, Google_ObjectAccessControl $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_ObjectAccessControl($data);
      } else {
        return $data;
      }
    }
     
    public function patch($bucket, $object, $entity, Google_ObjectAccessControl $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_ObjectAccessControl($data);
      } else {
        return $data;
      }
    }
     
    public function delete($bucket, $object, $entity, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

   
  class Google_BucketAccessControlsServiceResource extends Google_ServiceResource {


     
    public function insert($bucket, Google_BucketAccessControl $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_BucketAccessControl($data);
      } else {
        return $data;
      }
    }
     
    public function get($bucket, $entity, $optParams = array()) {
      $params = array('bucket' => $bucket, 'entity' => $entity);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_BucketAccessControl($data);
      } else {
        return $data;
      }
    }
     
    public function listBucketAccessControls($bucket, $optParams = array()) {
      $params = array('bucket' => $bucket);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_BucketAccessControls($data);
      } else {
        return $data;
      }
    }
     
    public function update($bucket, $entity, Google_BucketAccessControl $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'entity' => $entity, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_BucketAccessControl($data);
      } else {
        return $data;
      }
    }
     
    public function patch($bucket, $entity, Google_BucketAccessControl $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'entity' => $entity, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_BucketAccessControl($data);
      } else {
        return $data;
      }
    }
     
    public function delete($bucket, $entity, $optParams = array()) {
      $params = array('bucket' => $bucket, 'entity' => $entity);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

   
  class Google_ObjectsServiceResource extends Google_ServiceResource {


     
    public function insert($bucket, Google_StorageObject $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_StorageObject($data);
      } else {
        return $data;
      }
    }
     
    public function get($bucket, $object, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_StorageObject($data);
      } else {
        return $data;
      }
    }
     
    public function listObjects($bucket, $optParams = array()) {
      $params = array('bucket' => $bucket);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_Objects($data);
      } else {
        return $data;
      }
    }
     
    public function update($bucket, $object, Google_StorageObject $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_StorageObject($data);
      } else {
        return $data;
      }
    }
     
    public function patch($bucket, $object, Google_StorageObject $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_StorageObject($data);
      } else {
        return $data;
      }
    }
     
    public function delete($bucket, $object, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

   
  class Google_BucketsServiceResource extends Google_ServiceResource {


     
    public function insert(Google_Bucket $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Bucket($data);
      } else {
        return $data;
      }
    }
     
    public function get($bucket, $optParams = array()) {
      $params = array('bucket' => $bucket);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Bucket($data);
      } else {
        return $data;
      }
    }
     
    public function listBuckets($projectId, $optParams = array()) {
      $params = array('projectId' => $projectId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_Buckets($data);
      } else {
        return $data;
      }
    }
     
    public function update($bucket, Google_Bucket $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_Bucket($data);
      } else {
        return $data;
      }
    }
     
    public function patch($bucket, Google_Bucket $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_Bucket($data);
      } else {
        return $data;
      }
    }
     
    public function delete($bucket, $optParams = array()) {
      $params = array('bucket' => $bucket);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

 
class Google_StorageService extends Google_Service {
  public $objectAccessControls;
  public $bucketAccessControls;
  public $objects;
  public $buckets;
   
  public function __construct(Google_Client $client) {
    $this->servicePath = 'storage/v1beta1/';
    $this->version = 'v1beta1';
    $this->serviceName = 'storage';

    $client->addService($this->serviceName, $this->version);
    $this->objectAccessControls = new Google_ObjectAccessControlsServiceResource($this, $this->serviceName, 'objectAccessControls', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "ObjectAccessControl"}, "response": {"$ref": "ObjectAccessControl"}, "httpMethod": "POST", "path": "b/{bucket}/o/{object}/acl", "id": "storage.objectAccessControls.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "id": "storage.objectAccessControls.get", "httpMethod": "GET", "path": "b/{bucket}/o/{object}/acl/{entity}", "response": {"$ref": "ObjectAccessControl"}}, "list": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}}, "id": "storage.objectAccessControls.list", "httpMethod": "GET", "path": "b/{bucket}/o/{object}/acl", "response": {"$ref": "ObjectAccessControls"}}, "update": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "ObjectAccessControl"}, "response": {"$ref": "ObjectAccessControl"}, "httpMethod": "PUT", "path": "b/{bucket}/o/{object}/acl/{entity}", "id": "storage.objectAccessControls.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "ObjectAccessControl"}, "response": {"$ref": "ObjectAccessControl"}, "httpMethod": "PATCH", "path": "b/{bucket}/o/{object}/acl/{entity}", "id": "storage.objectAccessControls.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "path": "b/{bucket}/o/{object}/acl/{entity}", "id": "storage.objectAccessControls.delete", "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));
    $this->bucketAccessControls = new Google_BucketAccessControlsServiceResource($this, $this->serviceName, 'bucketAccessControls', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "BucketAccessControl"}, "response": {"$ref": "BucketAccessControl"}, "httpMethod": "POST", "path": "b/{bucket}/acl", "id": "storage.bucketAccessControls.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "id": "storage.bucketAccessControls.get", "httpMethod": "GET", "path": "b/{bucket}/acl/{entity}", "response": {"$ref": "BucketAccessControl"}}, "list": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}}, "id": "storage.bucketAccessControls.list", "httpMethod": "GET", "path": "b/{bucket}/acl", "response": {"$ref": "BucketAccessControls"}}, "update": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "BucketAccessControl"}, "response": {"$ref": "BucketAccessControl"}, "httpMethod": "PUT", "path": "b/{bucket}/acl/{entity}", "id": "storage.bucketAccessControls.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "BucketAccessControl"}, "response": {"$ref": "BucketAccessControl"}, "httpMethod": "PATCH", "path": "b/{bucket}/acl/{entity}", "id": "storage.bucketAccessControls.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "path": "b/{bucket}/acl/{entity}", "id": "storage.bucketAccessControls.delete", "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));
    $this->objects = new Google_ObjectsServiceResource($this, $this->serviceName, 'objects', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_write"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}, "name": {"type": "string", "location": "query"}, "projection": {"enum": ["full", "no_acl"], "type": "string", "location": "query"}}, "supportsMediaUpload": true, "request": {"$ref": "Object"}, "mediaUpload": {"protocols": {"simple": {"path": "/upload/storage/v1beta1/b/{bucket}/o", "multipart": true}, "resumable": {"path": "/resumable/upload/storage/v1beta1/b/{bucket}/o", "multipart": true}}, "accept": ["*  $acl) {
    $this->assertIsArray($acl, 'Google_BucketAccessControl', __METHOD__);
    $this->acl = $acl;
  }
  public function getAcl() {
    return $this->acl;
  }
  public function setDefaultObjectAcl(  $defaultObjectAcl) {
    $this->assertIsArray($defaultObjectAcl, 'Google_ObjectAccessControl', __METHOD__);
    $this->defaultObjectAcl = $defaultObjectAcl;
  }
  public function getDefaultObjectAcl() {
    return $this->defaultObjectAcl;
  }
  public function setLocation($location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setOwner(Google_BucketOwner $owner) {
    $this->owner = $owner;
  }
  public function getOwner() {
    return $this->owner;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class Google_BucketAccessControl extends Google_Model {
  public $domain;
  public $bucket;
  public $kind;
  public $id;
  public $role;
  public $entityId;
  public $entity;
  public $email;
  public $selfLink;
  public function setDomain($domain) {
    $this->domain = $domain;
  }
  public function getDomain() {
    return $this->domain;
  }
  public function setBucket($bucket) {
    $this->bucket = $bucket;
  }
  public function getBucket() {
    return $this->bucket;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setRole($role) {
    $this->role = $role;
  }
  public function getRole() {
    return $this->role;
  }
  public function setEntityId($entityId) {
    $this->entityId = $entityId;
  }
  public function getEntityId() {
    return $this->entityId;
  }
  public function setEntity($entity) {
    $this->entity = $entity;
  }
  public function getEntity() {
    return $this->entity;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class Google_BucketAccessControls extends Google_Model {
  protected $__itemsType = 'Google_BucketAccessControl';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_BucketAccessControl', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_BucketOwner extends Google_Model {
  public $entityId;
  public $entity;
  public function setEntityId($entityId) {
    $this->entityId = $entityId;
  }
  public function getEntityId() {
    return $this->entityId;
  }
  public function setEntity($entity) {
    $this->entity = $entity;
  }
  public function getEntity() {
    return $this->entity;
  }
}

class Google_BucketWebsite extends Google_Model {
  public $notFoundPage;
  public $mainPageSuffix;
  public function setNotFoundPage($notFoundPage) {
    $this->notFoundPage = $notFoundPage;
  }
  public function getNotFoundPage() {
    return $this->notFoundPage;
  }
  public function setMainPageSuffix($mainPageSuffix) {
    $this->mainPageSuffix = $mainPageSuffix;
  }
  public function getMainPageSuffix() {
    return $this->mainPageSuffix;
  }
}

class Google_Buckets extends Google_Model {
  public $nextPageToken;
  protected $__itemsType = 'Google_Bucket';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_Bucket', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_ObjectAccessControl extends Google_Model {
  public $domain;
  public $object;
  public $bucket;
  public $kind;
  public $id;
  public $role;
  public $entityId;
  public $entity;
  public $email;
  public $selfLink;
  public function setDomain($domain) {
    $this->domain = $domain;
  }
  public function getDomain() {
    return $this->domain;
  }
  public function setObject($object) {
    $this->object = $object;
  }
  public function getObject() {
    return $this->object;
  }
  public function setBucket($bucket) {
    $this->bucket = $bucket;
  }
  public function getBucket() {
    return $this->bucket;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setRole($role) {
    $this->role = $role;
  }
  public function getRole() {
    return $this->role;
  }
  public function setEntityId($entityId) {
    $this->entityId = $entityId;
  }
  public function getEntityId() {
    return $this->entityId;
  }
  public function setEntity($entity) {
    $this->entity = $entity;
  }
  public function getEntity() {
    return $this->entity;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class Google_ObjectAccessControls extends Google_Model {
  protected $__itemsType = 'Google_ObjectAccessControl';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_ObjectAccessControl', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_Objects extends Google_Model {
  public $nextPageToken;
  protected $__itemsType = 'Google_StorageObject';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $prefixes;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_StorageObject', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPrefixes(  $prefixes) {
    $this->assertIsArray($prefixes, 'Google_string', __METHOD__);
    $this->prefixes = $prefixes;
  }
  public function getPrefixes() {
    return $this->prefixes;
  }
}

class Google_StorageObject extends Google_Model {
  public $kind;
  public $name;
  protected $__mediaType = 'Google_StorageObjectMedia';
  protected $__mediaDataType = '';
  public $media;
  public $bucket;
  public $contentEncoding;
  public $selfLink;
  protected $__ownerType = 'Google_StorageObjectOwner';
  protected $__ownerDataType = '';
  public $owner;
  public $cacheControl;
  protected $__aclType = 'Google_ObjectAccessControl';
  protected $__aclDataType = 'array';
  public $acl;
  public $id;
  public $contentDisposition;
  public $metadata;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setMedia(Google_StorageObjectMedia $media) {
    $this->media = $media;
  }
  public function getMedia() {
    return $this->media;
  }
  public function setBucket($bucket) {
    $this->bucket = $bucket;
  }
  public function getBucket() {
    return $this->bucket;
  }
  public function setContentEncoding($contentEncoding) {
    $this->contentEncoding = $contentEncoding;
  }
  public function getContentEncoding() {
    return $this->contentEncoding;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setOwner(Google_StorageObjectOwner $owner) {
    $this->owner = $owner;
  }
  public function getOwner() {
    return $this->owner;
  }
  public function setCacheControl($cacheControl) {
    $this->cacheControl = $cacheControl;
  }
  public function getCacheControl() {
    return $this->cacheControl;
  }
  public function setAcl(  $acl) {
    $this->assertIsArray($acl, 'Google_ObjectAccessControl', __METHOD__);
    $this->acl = $acl;
  }
  public function getAcl() {
    return $this->acl;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setContentDisposition($contentDisposition) {
    $this->contentDisposition = $contentDisposition;
  }
  public function getContentDisposition() {
    return $this->contentDisposition;
  }
  public function setMetadata($metadata) {
    $this->metadata = $metadata;
  }
  public function getMetadata() {
    return $this->metadata;
  }
}

class Google_StorageObjectMedia extends Google_Model {
  public $contentType;
  public $timeCreated;
  public $algorithm;
  public $length;
  public $link;
  public $hash;
  public $data;
  public function setContentType($contentType) {
    $this->contentType = $contentType;
  }
  public function getContentType() {
    return $this->contentType;
  }
  public function setTimeCreated($timeCreated) {
    $this->timeCreated = $timeCreated;
  }
  public function getTimeCreated() {
    return $this->timeCreated;
  }
  public function setAlgorithm($algorithm) {
    $this->algorithm = $algorithm;
  }
  public function getAlgorithm() {
    return $this->algorithm;
  }
  public function setLength($length) {
    $this->length = $length;
  }
  public function getLength() {
    return $this->length;
  }
  public function setLink($link) {
    $this->link = $link;
  }
  public function getLink() {
    return $this->link;
  }
  public function setHash($hash) {
    $this->hash = $hash;
  }
  public function getHash() {
    return $this->hash;
  }
  public function setData($data) {
    $this->data = $data;
  }
  public function getData() {
    return $this->data;
  }
}

class Google_StorageObjectOwner extends Google_Model {
  public $entityId;
  public $entity;
  public function setEntityId($entityId) {
    $this->entityId = $entityId;
  }
  public function getEntityId() {
    return $this->entityId;
  }
  public function setEntity($entity) {
    $this->entity = $entity;
  }
  public function getEntity() {
    return $this->entity;
  }
}
