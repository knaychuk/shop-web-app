<?php
class User {
  private $con;
  private $userId;
  private $fullName;
  private $username;
  private $password;
  private $email;
  private $phoneNumber;
  private $creditCardNumber;
  private $creditCardExpiryDate;
  private $creditCardCVC;
  private $type;

  private $mysqldata;

  public function __construct($con, $userId) {
    $this -> con = $con;
    $this -> userId = $userId;

    $query = mysqli_query($this->con, "SELECT * FROM user WHERE userId='$this->userId'");

    $this-> mysqldata = mysqli_fetch_array($query);
    $this-> fullName = $this -> mysqldata['fullName'];
    $this-> username = $this -> mysqldata['username'];
    $this-> password = $this -> mysqldata['password'];
    $this-> email = $this -> mysqldata['email'];
    $this-> phoneNumber = $this -> mysqldata['phoneNumber'];
    $this-> type = $this -> mysqldata['type'];
  }

  public function getUserId() {
    return $this -> userId;
  }

  public function getFullName() {
    return $this -> fullName;
  }

  public function getUsername() {
    return $this -> username;
  }

  public function getPassword() {
    return $this -> password;
  }

  public function getEmail() {
    return $this -> email;
  }

  public function getPhoneNumber() {
    return $this -> phoneNumber;
  }

  public function getType() {
    return $this -> type;
  }

  
}
?>