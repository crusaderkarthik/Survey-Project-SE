<?php
 
namespace Facebook\HttpClients;

 
class FacebookCurl
{

     
    protected $curl;

     
    public function init()
    {
        $this->curl = curl_init();
    }

     
    public function setopt($key, $value)
    {
        curl_setopt($this->curl, $key, $value);
    }

     
    public function setoptArray(array $options)
    {
        curl_setopt_array($this->curl, $options);
    }

     
    public function exec()
    {
        return curl_exec($this->curl);
    }

     
    public function errno()
    {
        return curl_errno($this->curl);
    }

     
    public function error()
    {
        return curl_error($this->curl);
    }

     
    public function getinfo($type)
    {
        return curl_getinfo($this->curl, $type);
    }

     
    public function version()
    {
        return curl_version();
    }

     
    public function close()
    {
        curl_close($this->curl);
    }
}
