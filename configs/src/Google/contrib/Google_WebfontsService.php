<?php
 


   
  class Google_WebfontsServiceResource extends Google_ServiceResource {


     
    public function listWebfonts($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_WebfontList($data);
      } else {
        return $data;
      }
    }
  }

 
class Google_WebfontsService extends Google_Service {
  public $webfonts;
   
  public function __construct(Google_Client $client) {
    $this->servicePath = 'webfonts/v1/';
    $this->version = 'v1';
    $this->serviceName = 'webfonts';

    $client->addService($this->serviceName, $this->version);
    $this->webfonts = new Google_WebfontsServiceResource($this, $this->serviceName, 'webfonts', json_decode('{"methods": {"list": {"httpMethod": "GET", "response": {"$ref": "WebfontList"}, "id": "webfonts.webfonts.list", "parameters": {"sort": {"enum": ["alpha", "date", "popularity", "style", "trending"], "type": "string", "location": "query"}}, "path": "webfonts"}}}', true));

  }
}

class Google_Webfont extends Google_Model {
  public $kind;
  public $variants;
  public $subsets;
  public $family;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setVariants($variants) {
    $this->variants = $variants;
  }
  public function getVariants() {
    return $this->variants;
  }
  public function setSubsets($subsets) {
    $this->subsets = $subsets;
  }
  public function getSubsets() {
    return $this->subsets;
  }
  public function setFamily($family) {
    $this->family = $family;
  }
  public function getFamily() {
    return $this->family;
  }
}

class Google_WebfontList extends Google_Model {
  protected $__itemsType = 'Google_Webfont';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_Webfont', __METHOD__);
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
