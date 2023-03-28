<?php

use PHPUnit\Framework\TestCase;

class CreditCardNumberTest extends TestCase {
    
    public function testValidateCreditCardNumber() { 

      $creditCardNumber = new App\Testclasses\CreditCardNumber;

      $result = $creditCardNumber->validateCreditCardNumber("6053-7361-6516-4435");

      $this->assertTrue($result);

 
    }
  }
