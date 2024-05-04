<?php
 

 
class Google_MediaFileUpload {
  const UPLOAD_MEDIA_TYPE = 'media';
  const UPLOAD_MULTIPART_TYPE = 'multipart';
  const UPLOAD_RESUMABLE_TYPE = 'resumable';

   
  public $mimeType;

   
  public $data;

   
  public $resumable;

   
  public $chunkSize;

   
  public $size;

   
  public $resumeUri;

   
  public $progress;

   
  public function __construct($mimeType, $data, $resumable=false, $chunkSize=false) {
    $this->mimeType = $mimeType;
    $this->data = $data;
    $this->size = strlen($this->data);
    $this->resumable = $resumable;
    if(!$chunkSize) {
      $this->chunkSize = 256 * 1024;
    }

    $this->progress = 0;
  }

   
  public static function process($meta, &$params) {
    $payload = array();
    $meta = is_string($meta) ? json_decode($meta, true) : $meta;
    $uploadType = self::getUploadType($meta, $payload, $params);
    if (!$uploadType) {
 
      return false;
    }
 
    $params['uploadType'] = array(
        'type' => 'string',
        'location' => 'query',
        'value' => $uploadType,
    );

    if (isset($params['file'])) {
 
      $file = $params['file']['value'];
      unset($params['file']);
      return self::processFileUpload($file);
    }

    $mimeType = isset($params['mimeType'])
        ? $params['mimeType']['value']
        : false;
    unset($params['mimeType']);

    $data = isset($params['data'])
        ? $params['data']['value']
        : false;
    unset($params['data']);

    if (self::UPLOAD_RESUMABLE_TYPE == $uploadType) {
      $payload['content-type'] = $mimeType;

    } elseif (self::UPLOAD_MEDIA_TYPE == $uploadType) {
 
      $payload['content-type'] = $mimeType;
      $payload['postBody'] = $data;
    }

    elseif (self::UPLOAD_MULTIPART_TYPE == $uploadType) {
 
      $boundary = isset($params['boundary']['value']) ? $params['boundary']['value'] : mt_rand();
      $boundary = str_replace('"', '', $boundary);
      $payload['content-type'] = 'multipart/related; boundary=' . $boundary;
      $related = "--$boundary\r\n";
      $related .= "Content-Type: application/json; charset=UTF-8\r\n";
      $related .= "\r\n" . json_encode($meta) . "\r\n";
      $related .= "--$boundary\r\n";
      $related .= "Content-Type: $mimeType\r\n";
      $related .= "Content-Transfer-Encoding: base64\r\n";
      $related .= "\r\n" . base64_encode($data) . "\r\n";
      $related .= "--$boundary--";
      $payload['postBody'] = $related;
    }

    return $payload;
  }

   
  public static function processFileUpload($file) {
    if (!$file) return array();
    if (substr($file, 0, 1) != '@') {
      $file = '@' . $file;
    }
 
    return array('postBody' => array('file' => $file));
  }

   
  public static function getUploadType($meta, &$payload, &$params) {
    if (isset($params['mediaUpload'])
        && get_class($params['mediaUpload']['value']) == 'Google_MediaFileUpload') {
      $upload = $params['mediaUpload']['value'];
      unset($params['mediaUpload']);
      $payload['content-type'] = $upload->mimeType;
      if (isset($upload->resumable) && $upload->resumable) {
        return self::UPLOAD_RESUMABLE_TYPE;
      }
    }
 
    if (isset($params['uploadType'])) {
      return $params['uploadType']['value'];
    }

    $data = isset($params['data']['value'])
        ? $params['data']['value'] : false;

    if (false == $data && false == isset($params['file'])) {
 
      return false;
    }

    if (isset($params['file'])) {
      return self::UPLOAD_MEDIA_TYPE;
    }

    if (false == $meta) {
      return self::UPLOAD_MEDIA_TYPE;
    }

    return self::UPLOAD_MULTIPART_TYPE;
  }


  public function nextChunk(Google_HttpRequest $req) {
    if (false == $this->resumeUri) {
      $this->resumeUri = $this->getResumeUri($req);
    }

    $data = substr($this->data, $this->progress, $this->chunkSize);
    $lastBytePos = $this->progress + strlen($data) - 1;
    $headers = array(
      'content-range' => "bytes $this->progress-$lastBytePos/$this->size",
      'content-type' => $req->getRequestHeader('content-type'),
      'content-length' => $this->chunkSize,
      'expect' => '',
    );

    $httpRequest = new Google_HttpRequest($this->resumeUri, 'PUT', $headers, $data);
    $response = Google_Client::$io->authenticatedRequest($httpRequest);
    $code = $response->getResponseHttpCode();
    if (308 == $code) {
      $range = explode('-', $response->getResponseHeader('range'));
      $this->progress = $range[1] + 1;
      return false;
    } else {
      return Google_REST::decodeHttpResponse($response);
    }
  }

  private function getResumeUri(Google_HttpRequest $httpRequest) {
    $result = null;
    $body = $httpRequest->getPostBody();
    if ($body) {
      $httpRequest->setRequestHeaders(array(
        'content-type' => 'application/json; charset=UTF-8',
        'content-length' => Google_Utils::getStrLen($body),
        'x-upload-content-type' => $this->mimeType,
        'expect' => '',
      ));
    }

    $response = Google_Client::$io->makeRequest($httpRequest);
    $location = $response->getResponseHeader('location');
    $code = $response->getResponseHttpCode();
    if (200 == $code && true == $location) {
      return $location;
    }
    throw new Google_Exception("Failed to start the resumable upload");
  }
}