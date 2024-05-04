<?php
 

 
class googleApcCache extends Google_Cache {

  public function __construct() {
    if (! function_exists('apc_add')) {
      throw new Google_CacheException("Apc functions not available");
    }
  }

  private function isLocked($key) {
    if ((@apc_fetch($key . '.lock')) === false) {
      return false;
    }
    return true;
  }

  private function createLock($key) {
 
 
    @apc_add($key . '.lock', '', 5);
  }

  private function removeLock($key) {
 
    @apc_delete($key . '.lock');
  }

  private function waitForLock($key) {
 
    $tries = 20;
    $cnt = 0;
    do {
 
      usleep(250);
      $cnt ++;
    } while ($cnt <= $tries && $this->isLocked($key));
    if ($this->isLocked($key)) {
 
      $this->removeLock($key);
    }
  }

    
  public function get($key, $expiration = false) {

    if (($ret = @apc_fetch($key)) === false) {
      return false;
    }
    if (!$expiration || (time() - $ret['time'] > $expiration)) {
      $this->delete($key);
      return false;
    }
    return unserialize($ret['data']);
  }

   
  public function set($key, $value) {
    if (@apc_store($key, array('time' => time(), 'data' => serialize($value))) == false) {
      throw new Google_CacheException("Couldn't store data");
    }
  }

   
  public function delete($key) {
    @apc_delete($key);
  }
}
