<?php
  include("../db.php");
  session_start();
  
  if(isset($_SESSION['userLoggedIn'])) {
    $userId = $_SESSION['userLoggedIn'];

    if($_SERVER['REQUEST_METHOD'] = "POST") {
      $productName = $_POST['productName'];
      $productContent = $_POST['productContent'];
      $date = date("Y-m-d");
    }

    $insertQuery = "INSERT INTO product(userId, postDate, productName, productContent) 
    VALUES(?, ?, ?, ?)";

    $stmt = $con->prepare($insertQuery);
    $stmt -> bind_param("ssss", $userId, $date, $productName, $productContent);

    if($stmt->execute()) {
      header("Location:  http://localhost/shop-web-app/index.php");
    } else {
      echo "Failed";
    }
  }

  

?>