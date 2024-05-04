<?php
 

 
class Google_HttpRequest {
  const USER_AGENT_SUFFIX = "google-api-php-client/0.6.0";
  private $batchHeaders = array(
    'Content-Type' => 'application/http',
    'Content-Transfer-Encoding' => 'binary',
    'MIME-Version' => '1.0',
    'Content-Length' => ''
  );

  protected $url;
  protected $requestMethod;
  protected $requestHeaders;
  protected $postBody;
  protected $userAgent;

  protected $responseHttpCode;
  protected $responseHeaders;
  protected $responseBody;
  
  public $accessKey;

  public function __construct($url, $method = 'GET', $headers = array(), $postBody = null) {
    $this->setUrl($url);
    $this->setRequestMethod($method);
    $this->setRequestHeaders($headers);
    $this->setPostBody($postBody);

    global $apiConfig;
    if (empty($apiConfig['application_name'])) {
      $this->userAgent = self::USER_AGENT_SUFFIX;
    } else {
      $this->userAgent = $apiConfig['application_name'] . " " . self::USER_AGENT_SUFFIX;
    }
  }

   
  public function getBaseUrl() {
    if ($pos = strpos($this->url, '?')) {
      return substr($this->url, 0, $pos);
    }
    return $this->url;
  }

   
  public function getQueryParams() {
    if ($pos = strpos($this->url, '?')) {
      $queryStr = substr($this->url, $pos + 1);
      $params = array();
      parse_str($queryStr, $params);
      return $params;
    }
    return array();
  }

   
  public function getResponseHttpCode() {
    return (int) $this->responseHttpCode;
  }

   
  public function setResponseHttpCode($responseHttpCode) {
    $this->responseHttpCode = $responseHttpCode;
  }

   
  public function getResponseHeaders() {
    return $this->responseHeaders;
  }

   
  public function getResponseBody() {
    return $this->responseBody;
  }

   
  public function setResponseHeaders($headers) {
    $headers = Google_Utils::normalize($headers);
    if ($this->responseHeaders) {
      $headers = array_merge($this->responseHeaders, $headers);
    }

    $this->responseHeaders = $headers;
  }

   
  public function getResponseHeader($key) {
    return isset($this->responseHeaders[$key])
        ? $this->responseHeaders[$key]
        : false;
  }

   
  public function setResponseBody($responseBody) {
    $this->responseBody = $responseBody;
  }

   

  public function getUrl() {
    return $this->url;
  }

   
  public function getRequestMethod() {
    return $this->requestMethod;
  }

   
  public function getRequestHeaders() {
    return $this->requestHeaders;
  }

   
  public function getRequestHeader($key) {
    return isset($this->requestHeaders[$key])
        ? $this->requestHeaders[$key]
        : false;
  }

   
  public function getPostBody() {
    return $this->postBody;
  }

   
  public function setUrl($url) {
    if (substr($url, 0, 4) == 'http') {
      $this->url = $url;
    } else {
 
      if (substr($url, 0, 1) !== '/') {
        $url = '/' . $url;
      }
      global $apiConfig;
      $this->url = $apiConfig['basePath'] . $url;
    }
  }

   
  public function setRequestMethod($method) {
    $this->requestMethod = strtoupper($method);
  }

   
  public function setRequestHeaders($headers) {
    $headers = Google_Utils::normalize($headers);
    if ($this->requestHeaders) {
      $headers = array_merge($this->requestHeaders, $headers);
    }
    $this->requestHeaders = $headers;
  }

   
  public function setPostBody($postBody) {
    $this->postBody = $postBody;
  }

   
  public function setUserAgent($userAgent) {
    $this->userAgent = $userAgent;
  }

   
  public function getUserAgent() {
    return $this->userAgent;
  }

   
  public function getCacheKey() {
    $key = $this->getUrl();

    if (isset($this->accessKey)) {
      $key .= $this->accessKey;
    }

    if (isset($this->requestHeaders['authorization'])) {
      $key .= $this->requestHeaders['authorization'];
    }

    return md5($key);
  }

  public function getParsedCacheControl() {
    $parsed = array();
    $rawCacheControl = $this->getResponseHeader('cache-control');
    if ($rawCacheControl) {
      $rawCacheControl = str_replace(', ', '&', $rawCacheControl);
      parse_str($rawCacheControl, $parsed);
    }

    return $parsed;
  }

   
  public function toBatchString($id) {
    $str = '';
    foreach($this->batchHeaders as $key => $val) {
      $str .= $key . ': ' . $val . "\n";
    }

    $str .= "Content-ID: $id\n";
    $str .= "\n";

    $path = parse_url($this->getUrl(), PHP_URL_PATH);
    $str .= $this->getRequestMethod() . ' ' . $path . " HTTP/1.1\n";
    foreach($this->getRequestHeaders() as $key => $val) {
      $str .= $key . ': ' . $val . "\n";
    }

    if ($this->getPostBody()) {
      $str .= "\n";
      $str .= $this->getPostBody();
    }

    return $str;
  }
}
