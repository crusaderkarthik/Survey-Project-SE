<?php
 

 
class Google_FileCache extends Google_Cache {
  private $path;

  public function __construct() {
    global $apiConfig;
    $this->path = $apiConfig['ioFileCache_directory'];
  }

  private function isLocked($storageFile) {
 
    return file_exists($storageFile . '.lock');
  }

  private function createLock($storageFile) {
    $storageDir = dirname($storageFile);
    if (! is_dir($storageDir)) {
 
      if (! @mkdir($storageDir, 0755, true)) {
 
        if (! is_dir($storageDir)) {
          throw new Google_CacheException("Could not create storage directory: $storageDir");
        }
      }
 
    }
    @touch($storageFile . '.lock');
  }

  private function removeLock($storageFile) {
 
    @unlink($storageFile . '.lock');
  }

  private function waitForLock($storageFile) {
 
    $tries = 20;
    $cnt = 0;
    do {
 
      clearstatcache();
 
      usleep(250);
      $cnt ++;
    } while ($cnt <= $tries && $this->isLocked($storageFile));
    if ($this->isLocked($storageFile)) {
 
      $this->removeLock($storageFile);
    }
  }

  private function getCacheDir($hash) {
 
 
 
    return $this->path . '/' . substr($hash, 0, 2);
  }

  private function getCacheFile($hash) {
    return $this->getCacheDir($hash) . '/' . $hash;
  }

  public function get($key, $expiration = false) {
    $storageFile = $this->getCacheFile(md5($key));
 
 
 
    if ($this->isLocked($storageFile)) {
      $this->waitForLock($storageFile);
    }
    if (file_exists($storageFile) && is_readable($storageFile)) {
      $now = time();
      if (! $expiration || (($mtime = @filemtime($storageFile)) !== false && ($now - $mtime) < $expiration)) {
        if (($data = @file_get_contents($storageFile)) !== false) {
          $data = unserialize($data);
          return $data;
        }
      }
    }
    return false;
  }

  public function set($key, $value) {
    $storageDir = $this->getCacheDir(md5($key));
    $storageFile = $this->getCacheFile(md5($key));
    if ($this->isLocked($storageFile)) {
 
      $this->waitForLock($storageFile);
    }
    if (! is_dir($storageDir)) {
      if (! @mkdir($storageDir, 0755, true)) {
        throw new Google_CacheException("Could not create storage directory: $storageDir");
      }
    }
 
 
    $data = serialize($value);
    $this->createLock($storageFile);
    if (! @file_put_contents($storageFile, $data)) {
      $this->removeLock($storageFile);
      throw new Google_CacheException("Could not store data in the file");
    }
    $this->removeLock($storageFile);
  }

  public function delete($key) {
    $file = $this->getCacheFile(md5($key));
    if (! @unlink($file)) {
      throw new Google_CacheException("Cache file could not be deleted");
    }
  }
}
