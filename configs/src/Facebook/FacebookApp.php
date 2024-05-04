<?php
 
namespace Facebook;

use Facebook\Authentication\AccessToken;

class FacebookApp implements \Serializable
{
     
    protected $id;

     
    protected $secret;

     
    public function __construct($id, $secret)
    {
        $this->id = $id;
        $this->secret = $secret;
    }

     
    public function getId()
    {
        return $this->id;
    }

     
    public function getSecret()
    {
        return $this->secret;
    }

     
    public function getAccessToken()
    {
        return new AccessToken($this->id . '|' . $this->secret);
    }

     
    public function serialize()
    {
        return serialize([$this->id, $this->secret]);
    }

     
    public function unserialize($serialized)
    {
        list($id, $secret) = unserialize($serialized);

        $this->__construct($id, $secret);
    }
}
