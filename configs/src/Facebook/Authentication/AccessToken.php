<?php
 
namespace Facebook\Authentication;

 
class AccessToken
{
     
    protected $value = '';

     
    protected $expiresAt;

     
    public function __construct($accessToken, $expiresAt = 0)
    {
        $this->value = $accessToken;
        if ($expiresAt) {
            $this->setExpiresAtFromTimeStamp($expiresAt);
        }
    }

     
    public function getAppSecretProof($appSecret)
    {
        return hash_hmac('sha256', $this->value, $appSecret);
    }

     
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

     
    public function isAppAccessToken()
    {
        return strpos($this->value, '|') !== false;
    }

     
    public function isLongLived()
    {
        if ($this->expiresAt) {
            return $this->expiresAt->getTimestamp() > time() + (60 * 60 * 2);
        }

        if ($this->isAppAccessToken()) {
            return true;
        }

        return false;
    }

     
    public function isExpired()
    {
        if ($this->getExpiresAt() instanceof \DateTime) {
            return $this->getExpiresAt()->getTimestamp() < time();
        }

        if ($this->isAppAccessToken()) {
            return false;
        }

        return null;
    }

     
    public function getValue()
    {
        return $this->value;
    }

     
    public function __toString()
    {
        return $this->getValue();
    }

     
    protected function setExpiresAtFromTimeStamp($timeStamp)
    {
        $dt = new \DateTime();
        $dt->setTimestamp($timeStamp);
        $this->expiresAt = $dt;
    }
}
