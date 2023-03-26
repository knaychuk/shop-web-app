<?php
  include("../db.php");

  if($_SERVER['REQUEST_METHOD'] = 'POST') {
    $fullName = $_POST['fullName'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $creditCardNumber = $_POST['creditCardNumber'];
    $creditCardExpiryDate = $_POST['creditCardExpiryDate'];
    $creditCardCVC = $_POST['creditCardCVC'];

    $encryptPassword = md5($password);

    $checkIfUserExistQuery = mysqli_query($con, "SELECT COUNT(*) as count FROM user WHERE username = '$username' OR email = '$email'");
    $result = mysqli_fetch_array($checkIfUserExistQuery);
    $count = $result['count'];
    if($count > 0) {
      echo "Username or e-mail already exists. Please try again";
      echo "<a href='http://localhost/shop-web-app/register.php'> Click here to redirect </a>";
    } else {
      $insertQuery = "INSERT INTO user(fullName, username, password, email, phoneNumber, creditCardNumber, creditCardExpiryDate, creditCardCVC)
      VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

      $stmt = $con->prepare($insertQuery);
      $stmt -> bind_param("ssssssss", $fullName, $username, $encryptPassword, $email, $phoneNumber, $creditCardNumber, $creditCardExpiryDate, $creditCardCVC);

      if($stmt->execute()) {
        header("Location:  http://localhost/shop-web-app/login.php");
      } else {
        echo "Failed";
      }

    }
  }
  
?>