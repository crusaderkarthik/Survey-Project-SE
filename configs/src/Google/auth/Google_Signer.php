<?php
 

require_once "Google_P12Signer.php";

 
abstract class Google_Signer {
   
  abstract public function sign($data);
}
