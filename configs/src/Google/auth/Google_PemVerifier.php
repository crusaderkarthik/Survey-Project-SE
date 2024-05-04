<?php
 

 
class Google_PemVerifier extends Google_Verifier {
  private $publicKey;

   
  function __construct($pem) {
    if (!function_exists('openssl_x509_read')) {
      throw new Google_Exception('Google API PHP client needs the openssl PHP extension');
    }
    $this->publicKey = openssl_x509_read($pem);
    if (!$this->publicKey) {
      throw new Google_AuthException("Unable to parse PEM: $pem");
    }
  }

  function __destruct() {
    if ($this->publicKey) {
      openssl_x509_free($this->publicKey);
    }
  }

   
  function verify($data, $signature) {
    $status = openssl_verify($data, $signature, $this->publicKey, "sha256");
    if ($status === -1) {
      throw new Google_AuthException('Signature verification error: ' . openssl_error_string());
    }
    return $status === 1;
  }
}
