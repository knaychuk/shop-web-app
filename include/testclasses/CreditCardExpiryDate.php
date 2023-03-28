<?php 
  namespace App\Testclasses;

  class CreditCardExpiryDate {
    
    public function validateCreditCardExpiryDate($cardExpiryDate) {
 
      if(preg_match("/^[0-9]{2}-[0-9]{2}$/", $cardExpiryDate)) {
        return True;
      } else {
        return False;
      }
    }

  }

?>