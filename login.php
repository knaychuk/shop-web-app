<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Login Page</h1>
  <form id="login-form" method="post" action="./include/handler/login-handler.php">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Username" aria-label="username">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="Password">
    <button type="submit" name="login" id="login-button">Login</button>

    <!-- <p> Forgot your password? <a href="forgot-password.html">Recover Here</a></p> -->
  </form>

</body>
</html>