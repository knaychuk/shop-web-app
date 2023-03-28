<?php 
  namespace App\Testclasses;

  class Email {
    public function validateEmail($email) {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format";
      } else {
        return "Valid email format";
      }
    }

  }

?>