<?php

use PHPUnit\Framework\TestCase;


class EmailTest extends TestCase {
    
    public function testValidateEmail() {

      $email = new App\Testclasses\Email;
      $result = $email->validateEmail("email@email.com");

      $this->assertEquals("Valid email format", $result);

 
    }
  }
