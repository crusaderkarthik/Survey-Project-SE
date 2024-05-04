<?php
 

 
class Google_REST {
   
  static public function execute(Google_HttpRequest $req) {
    $httpRequest = Google_Client::$io->makeRequest($req);
    $decodedResponse = self::decodeHttpResponse($httpRequest);
    $ret = isset($decodedResponse['data'])
        ? $decodedResponse['data'] : $decodedResponse;
    return $ret;
  }

  
   
  public static function decodeHttpResponse($response) {
    $code = $response->getResponseHttpCode();
    $body = $response->getResponseBody();
    $decoded = null;
    
    if ($code != '200' && $code != '201' && $code != '204') {
      $decoded = json_decode($body, true);
      $err = 'Error calling ' . $response->getRequestMethod() . ' ' . $response->getUrl();
      if ($decoded != null && isset($decoded['error']['message'])  && isset($decoded['error']['code'])) {
 
 
        $err .= ": ({$decoded['error']['code']}) {$decoded['error']['message']}";
      } else {
        $err .= ": ($code) $body";
      }

      throw new Google_ServiceException($err, $code, null, $decoded['error']['errors']);
    }
 
    if ($code != '204') {
      $decoded = json_decode($body, true);
      if ($decoded === null || $decoded === "") {
        throw new Google_ServiceException("Invalid json in service response: $body");
      }
    }
    return $decoded;
  }

   
  static function createRequestUri($servicePath, $restPath, $params) {
    $requestUrl = $servicePath . $restPath;
    $uriTemplateVars = array();
    $queryVars = array();
    foreach ($params as $paramName => $paramSpec) {
 
      if (! isset($paramSpec['location'])) {
        $paramSpec['location'] = $paramSpec['restParameterType'];
      }

      if ($paramSpec['type'] == 'boolean') {
        $paramSpec['value'] = ($paramSpec['value']) ? 'true' : 'false';
      }
      if ($paramSpec['location'] == 'path') {
        $uriTemplateVars[$paramName] = $paramSpec['value'];
      } else {
        if (isset($paramSpec['repeated']) && is_array($paramSpec['value'])) {
          foreach ($paramSpec['value'] as $value) {
            $queryVars[] = $paramName . '=' . rawurlencode($value);
          }
        } else {
          $queryVars[] = $paramName . '=' . rawurlencode($paramSpec['value']);
        }
      }
    }

    if (count($uriTemplateVars)) {
      $uriTemplateParser = new URI_Template_Parser($requestUrl);
      $requestUrl = $uriTemplateParser->expand($uriTemplateVars);
    }
 
 
    $requestUrl = str_replace('%40', '@', $requestUrl);

    if (count($queryVars)) {
      $requestUrl .= '?' . implode($queryVars, '&');
    }

    return $requestUrl;
  }
}
