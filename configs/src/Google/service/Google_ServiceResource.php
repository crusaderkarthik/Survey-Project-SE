<?php
 

 
class Google_ServiceResource {
 
  private $stackParameters = array(
      'alt' => array('type' => 'string', 'location' => 'query'),
      'boundary' => array('type' => 'string', 'location' => 'query'),
      'fields' => array('type' => 'string', 'location' => 'query'),
      'trace' => array('type' => 'string', 'location' => 'query'),
      'userIp' => array('type' => 'string', 'location' => 'query'),
      'userip' => array('type' => 'string', 'location' => 'query'),
      'file' => array('type' => 'complex', 'location' => 'body'),
      'data' => array('type' => 'string', 'location' => 'body'),
      'mimeType' => array('type' => 'string', 'location' => 'header'),
      'uploadType' => array('type' => 'string', 'location' => 'query'),
      'mediaUpload' => array('type' => 'complex', 'location' => 'query'),
  );

   
  private $service;

   
  private $serviceName;

   
  private $resourceName;

   
  private $methods;

  public function __construct($service, $serviceName, $resourceName, $resource) {
    $this->service = $service;
    $this->serviceName = $serviceName;
    $this->resourceName = $resourceName;
    $this->methods = isset($resource['methods']) ? $resource['methods'] : array($resourceName => $resource);
  }

   
  public function __call($name, $arguments) {
    if (! isset($this->methods[$name])) {
      throw new Google_Exception("Unknown function: {$this->serviceName}->{$this->resourceName}->{$name}()");
    }
    $method = $this->methods[$name];
    $parameters = $arguments[0];
 
    $postBody = null;
    if (isset($parameters['postBody'])) {
      if (is_object($parameters['postBody'])) {
        $this->stripNull($parameters['postBody']);
      }
 
      if (is_array($parameters['postBody']) && 'latitude' == $this->serviceName) {
        if (!isset($parameters['postBody']['data'])) {
          $rawBody = $parameters['postBody'];
          unset($parameters['postBody']);
          $parameters['postBody']['data'] = $rawBody;
        }
      }

      $postBody = is_array($parameters['postBody']) || is_object($parameters['postBody'])
          ? json_encode($parameters['postBody'])
          : $parameters['postBody'];
      unset($parameters['postBody']);

      if (isset($parameters['optParams'])) {
        $optParams = $parameters['optParams'];
        unset($parameters['optParams']);
        $parameters = array_merge($parameters, $optParams);
      }
    }

    if (!isset($method['parameters'])) {
      $method['parameters'] = array();
    }
    
    $method['parameters'] = array_merge($method['parameters'], $this->stackParameters);
    foreach ($parameters as $key => $val) {
      if ($key != 'postBody' && ! isset($method['parameters'][$key])) {
        throw new Google_Exception("($name) unknown parameter: '$key'");
      }
    }
    if (isset($method['parameters'])) {
      foreach ($method['parameters'] as $paramName => $paramSpec) {
        if (isset($paramSpec['required']) && $paramSpec['required'] && ! isset($parameters[$paramName])) {
          throw new Google_Exception("($name) missing required param: '$paramName'");
        }
        if (isset($parameters[$paramName])) {
          $value = $parameters[$paramName];
          $parameters[$paramName] = $paramSpec;
          $parameters[$paramName]['value'] = $value;
          unset($parameters[$paramName]['required']);
        } else {
          unset($parameters[$paramName]);
        }
      }
    }
 
    if (! isset($method['id'])) {
      $method['id'] = $method['rpcMethod'];
    }
 
    if (! isset($method['path'])) {
      $method['path'] = $method['restPath'];
    }

    $servicePath = $this->service->servicePath;
 
    $contentType = false;
    if (isset($method['mediaUpload'])) {
      $media = Google_MediaFileUpload::process($postBody, $parameters);
      if ($media) {
        $contentType = isset($media['content-type']) ? $media['content-type']: null;
        $postBody = isset($media['postBody']) ? $media['postBody'] : null;
        $servicePath = $method['mediaUpload']['protocols']['simple']['path'];
        $method['path'] = '';
      }
    }

    $url = Google_REST::createRequestUri($servicePath, $method['path'], $parameters);
    $httpRequest = new Google_HttpRequest($url, $method['httpMethod'], null, $postBody);
    if ($postBody) {
      $contentTypeHeader = array();
      if (isset($contentType) && $contentType) {
        $contentTypeHeader['content-type'] = $contentType;
      } else {
        $contentTypeHeader['content-type'] = 'application/json; charset=UTF-8';
        $contentTypeHeader['content-length'] = Google_Utils::getStrLen($postBody);
      }
      $httpRequest->setRequestHeaders($contentTypeHeader);
    }

    $httpRequest = Google_Client::$auth->sign($httpRequest);
    if (Google_Client::$useBatch) {
      return $httpRequest;
    }
 
    if (isset($parameters['uploadType']['value'])
        && 'resumable' == $parameters['uploadType']['value']) {
      return $httpRequest;
    }

    return Google_REST::execute($httpRequest);
  }

  public  function useObjects() {
    global $apiConfig;
    return (isset($apiConfig['use_objects']) && $apiConfig['use_objects']);
  }

  protected function stripNull(&$o) {
    $o = (array) $o;
    foreach ($o as $k => $v) {
      if ($v === null || strstr($k, "\0*\0__")) {
        unset($o[$k]);
      }
      elseif (is_object($v) || is_array($v)) {
        $this->stripNull($o[$k]);
      }
    }
  }
}
