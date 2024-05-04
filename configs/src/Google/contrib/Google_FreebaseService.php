<?php
 


   
  class Google_TextServiceResource extends Google_ServiceResource {


     
    public function get($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_ContentserviceGet($data);
      } else {
        return $data;
      }
    }
  }

 
class Google_FreebaseService extends Google_Service {
  public $text;
   
  public function __construct(Google_Client $client) {
    $this->servicePath = 'freebase/v1/';
    $this->version = 'v1';
    $this->serviceName = 'freebase';

    $client->addService($this->serviceName, $this->version);
    $this->text = new Google_TextServiceResource($this, $this->serviceName, 'text', json_decode('{"methods": {"get": {"httpMethod": "GET", "response": {"$ref": "ContentserviceGet"}, "id": "freebase.text.get", "parameters": {"maxlength": {"type": "integer", "location": "query", "format": "uint32"}, "id": {"repeated": true, "required": true, "type": "string", "location": "path"}, "format": {"default": "plain", "enum": ["html", "plain", "raw"], "type": "string", "location": "query"}}, "path": "text{/id*}"}}}', true));
  }
}

class Google_ContentserviceGet extends Google_Model {
  public $result;
  public function setResult($result) {
    $this->result = $result;
  }
  public function getResult() {
    return $this->result;
  }
}
