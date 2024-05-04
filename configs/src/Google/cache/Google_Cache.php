<?php
 

require_once "Google_FileCache.php";
require_once "Google_MemcacheCache.php";

 
abstract class Google_Cache {

   
  abstract function get($key, $expiration = false);

   
  abstract function set($key, $value);

   
  abstract function delete($key);
}


