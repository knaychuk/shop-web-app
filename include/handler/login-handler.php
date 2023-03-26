<?php
  include("../db.php");

  session_start();

  if($_SERVER['REQUEST_METHOD'] = 'POST') {
    $username = $_POST['username'];
    // echo $username;
    $password = $_POST['password'];
    // echo $password;

    $encryptPassword = md5($password);
    $query = "SELECT * FROM user WHERE username = ? AND password = ?";

    $stmt = $con->prepare($query);
    $stmt -> bind_param("ss", $username, $encryptPassword);
    $stmt -> execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if(!is_null($row)) {
      $_SESSION['userLoggedIn'] = $row["userId"];
      header("Location: http://localhost/shop-web-app/index.php");
    } else {
      echo "user not found";
    }
  }

?>