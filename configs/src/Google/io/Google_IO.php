<?php
 

require_once 'io/Google_HttpRequest.php';
require_once 'io/Google_CurlIO.php';
require_once 'io/Google_REST.php';

 
interface Google_IO {
   
  public function authenticatedRequest(Google_HttpRequest $request);

   
  public function makeRequest(Google_HttpRequest $request);

   
  public function setOptions($options);

}
