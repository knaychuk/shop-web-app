<?php
  include("include/db.php");
  include("include/classes/User.php");

  session_start();

  if(isset($_SESSION['userLoggedIn'])) {
    $userId = $_SESSION['userLoggedIn'];
    $user = new User($con, $userId);
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  
  <?php include("./include/components/navbar.php")?>

  <?php
    if(isLoggedIn()) {
      echo "Products
      <button>
        <a href='./add-product.php'>Add Product</a>
      </button>";
    }
  ?>

  <?php
    if(!isLoggedIn()) {
      echo "Products";
    }
  ?>

  <?php
    $productQuery = mysqli_query($con, "SELECT * FROM product ORDER BY postDate DESC");

    while($row = mysqli_fetch_array($productQuery)) {
      $user = new User($con, $row['userId']);

      if(isLoggedIn()) {
        $isCurrentUserPost = ($row['userId'] == $userId);
      }

      echo "Title: " . $row['productName'];
      echo "Date: " . $row['postDate'];
      echo "Posted By: " . $row['userId'];

      if(isLoggedIn()) {
        if($isCurrentUserPost) {
          echo "MY POST";
        } else {
          echo "NOT MY POST";
        }
      }
    }
  ?>




</body>
</html>
