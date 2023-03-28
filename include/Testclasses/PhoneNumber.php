<?php 
  namespace App\Testclasses;
  // $regex = ;
  class PhoneNumber {
    
    public function validatePhoneNumber($phoneNumber) {
 
      if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phoneNumber)) {
        return True;
      } else {
        return False;
      }
    }

  }

?>