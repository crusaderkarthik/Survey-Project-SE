<?php
 
namespace Facebook\HttpClients;

 
interface FacebookHttpClientInterface
{
     
    public function send($url, $method, $body, array $headers, $timeOut);
}
