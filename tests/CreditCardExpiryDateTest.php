<?php

use PHPUnit\Framework\TestCase;

class CreditCardExpiryDateTest extends TestCase {
    
    public function testValidateCreditCardExpiryDate() { 

      $creditCardExpiryDate = new App\Testclasses\CreditCardExpiryDate;

      $result = $creditCardExpiryDate->validateCreditCardExpiryDate("02-12");

      $this->assertTrue($result);

 
    }
  }