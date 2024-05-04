<?php
 


   
  class Google_WebResourceServiceResource extends Google_ServiceResource {


     
    public function insert($verificationMethod, Google_SiteVerificationWebResourceResource $postBody, $optParams = array()) {
      $params = array('verificationMethod' => $verificationMethod, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_SiteVerificationWebResourceResource($data);
      } else {
        return $data;
      }
    }
     
    public function get($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_SiteVerificationWebResourceResource($data);
      } else {
        return $data;
      }
    }
     
    public function listWebResource($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_SiteVerificationWebResourceListResponse($data);
      } else {
        return $data;
      }
    }
     
    public function update($id, Google_SiteVerificationWebResourceResource $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_SiteVerificationWebResourceResource($data);
      } else {
        return $data;
      }
    }
     
    public function patch($id, Google_SiteVerificationWebResourceResource $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_SiteVerificationWebResourceResource($data);
      } else {
        return $data;
      }
    }
     
    public function getToken(Google_SiteVerificationWebResourceGettokenRequest $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('getToken', array($params));
      if ($this->useObjects()) {
        return new Google_SiteVerificationWebResourceGettokenResponse($data);
      } else {
        return $data;
      }
    }
     
    public function delete($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

 
class Google_SiteVerificationService extends Google_Service {
  public $webResource;
   
  public function __construct(Google_Client $client) {
    $this->servicePath = 'siteVerification/v1/';
    $this->version = 'v1';
    $this->serviceName = 'siteVerification';

    $client->addService($this->serviceName, $this->version);
    $this->webResource = new Google_WebResourceServiceResource($this, $this->serviceName, 'webResource', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/siteverification", "https://www.googleapis.com/auth/siteverification.verify_only"], "parameters": {"verificationMethod": {"required": true, "type": "string", "location": "query"}}, "request": {"$ref": "SiteVerificationWebResourceResource"}, "response": {"$ref": "SiteVerificationWebResourceResource"}, "httpMethod": "POST", "path": "webResource", "id": "siteVerification.webResource.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/siteverification"], "parameters": {"id": {"required": true, "type": "string", "location": "path"}}, "id": "siteVerification.webResource.get", "httpMethod": "GET", "path": "webResource/{id}", "response": {"$ref": "SiteVerificationWebResourceResource"}}, "list": {"scopes": ["https://www.googleapis.com/auth/siteverification"], "path": "webResource", "response": {"$ref": "SiteVerificationWebResourceListResponse"}, "id": "siteVerification.webResource.list", "httpMethod": "GET"}, "update": {"scopes": ["https://www.googleapis.com/auth/siteverification"], "parameters": {"id": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "SiteVerificationWebResourceResource"}, "response": {"$ref": "SiteVerificationWebResourceResource"}, "httpMethod": "PUT", "path": "webResource/{id}", "id": "siteVerification.webResource.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/siteverification"], "parameters": {"id": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "SiteVerificationWebResourceResource"}, "response": {"$ref": "SiteVerificationWebResourceResource"}, "httpMethod": "PATCH", "path": "webResource/{id}", "id": "siteVerification.webResource.patch"}, "getToken": {"scopes": ["https://www.googleapis.com/auth/siteverification", "https://www.googleapis.com/auth/siteverification.verify_only"], "request": {"$ref": "SiteVerificationWebResourceGettokenRequest"}, "response": {"$ref": "SiteVerificationWebResourceGettokenResponse"}, "httpMethod": "POST", "path": "token", "id": "siteVerification.webResource.getToken"}, "delete": {"scopes": ["https://www.googleapis.com/auth/siteverification"], "path": "webResource/{id}", "id": "siteVerification.webResource.delete", "parameters": {"id": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));

  }
}

class Google_SiteVerificationWebResourceGettokenRequest extends Google_Model {
  public $verificationMethod;
  protected $__siteType = 'Google_SiteVerificationWebResourceGettokenRequestSite';
  protected $__siteDataType = '';
  public $site;
  public function setVerificationMethod($verificationMethod) {
    $this->verificationMethod = $verificationMethod;
  }
  public function getVerificationMethod() {
    return $this->verificationMethod;
  }
  public function setSite(Google_SiteVerificationWebResourceGettokenRequestSite $site) {
    $this->site = $site;
  }
  public function getSite() {
    return $this->site;
  }
}

class Google_SiteVerificationWebResourceGettokenRequestSite extends Google_Model {
  public $identifier;
  public $type;
  public function setIdentifier($identifier) {
    $this->identifier = $identifier;
  }
  public function getIdentifier() {
    return $this->identifier;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class Google_SiteVerificationWebResourceGettokenResponse extends Google_Model {
  public $token;
  public $method;
  public function setToken($token) {
    $this->token = $token;
  }
  public function getToken() {
    return $this->token;
  }
  public function setMethod($method) {
    $this->method = $method;
  }
  public function getMethod() {
    return $this->method;
  }
}

class Google_SiteVerificationWebResourceListResponse extends Google_Model {
  protected $__itemsType = 'Google_SiteVerificationWebResourceResource';
  protected $__itemsDataType = 'array';
  public $items;
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_SiteVerificationWebResourceResource', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
}

class Google_SiteVerificationWebResourceResource extends Google_Model {
  public $owners;
  public $id;
  protected $__siteType = 'Google_SiteVerificationWebResourceResourceSite';
  protected $__siteDataType = '';
  public $site;
  public function setOwners(  $owners) {
    $this->assertIsArray($owners, 'Google_string', __METHOD__);
    $this->owners = $owners;
  }
  public function getOwners() {
    return $this->owners;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setSite(Google_SiteVerificationWebResourceResourceSite $site) {
    $this->site = $site;
  }
  public function getSite() {
    return $this->site;
  }
}

class Google_SiteVerificationWebResourceResourceSite extends Google_Model {
  public $identifier;
  public $type;
  public function setIdentifier($identifier) {
    $this->identifier = $identifier;
  }
  public function getIdentifier() {
    return $this->identifier;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}
