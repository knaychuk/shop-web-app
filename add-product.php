<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
</head>
<body>
  <?php include("include/components/navbar.php") ?>

  <h1>Add Product Page</h1>
  <form id="login-form" method="post" action="./include/handler/add-product-handler.php">
    <label for="productName">Name</label>
    <input type="text" name="productName" id="productName" placeholder="Product Name" aria-label="Product Name">
    <label for="productContent">Content</label>
    <input type="text" name="productContent" id="productContent" placeholder="Content" aria-label="Product Content">
    <button type="submit" name="sell" id="sell-button">Sell</button>

  
  </form>

</body>
</html>