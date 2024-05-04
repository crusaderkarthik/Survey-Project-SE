<?php
 

require_once "Google_PemVerifier.php";

 
abstract class Google_Verifier {
   
  abstract public function verify($data, $signature);
}
