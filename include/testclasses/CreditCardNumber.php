<?php 
  namespace App\Testclasses;

  class CreditCardNumber {
    
    public function validateCreditCardNumber($cardNumber) {
 
      if(preg_match("/^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$/", $cardNumber)) {
        return True;
      } else {
        return False;
      }
    }

  }

?>