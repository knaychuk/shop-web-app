<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<body>
  <h1>Register Page</h1>
  <form id="login-form" method="post" action="./include/handler/register-handler.php">
    <label for="fullName">Full Name</label>
    <input type="text" name="fullName" id="fullName" placeholder="First and Last Name" aria-label="First and Last Name" required>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="Email" aria-label="Email" required>
    <label for="phoneNumber">Phone Number</label>
    <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" aria-label="Phone Number" required>
    <label for="creditCardNumber">Credit Card Number</label>
    <input type="text" name="creditCardNumber" id="creditCardNumber" placeholder="Credit Card Number" aria-label="Credit Card Number" required>
    <label for="creditCardExpiryDate">Expiry Date</label>
    <input type="text" name="creditCardExpiryDate" id="creditCardExpiryDate" placeholder="Expiry Date" aria-label="Credit Card Expiry Date" required>
    <label for="creditCardCVC">CVC</label>
    <input type="text" name="creditCardCVC" id="creditCardCVC" placeholder="CVC" aria-label="Credit Card Expiry Date" required>
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Username" aria-label="Username" required>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="Password" required>
    <button type="submit" name="register" id="register-button">Register</button>

    <!-- <p> Forgot your password? <a href="forgot-password.html">Recover Here</a></p> -->
  </form>

</body>
</html>