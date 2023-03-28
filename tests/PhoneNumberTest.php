<?php

use PHPUnit\Framework\TestCase;


class PhoneNumberTest extends TestCase {
    
    public function testValidatePhoneNumber() { 

      $phoneNumber = new App\Testclasses\PhoneNumber;

      $result = $phoneNumber->validatePhoneNumber("605-736-6516");

      $this->assertTrue($result);

 
    }
  }
