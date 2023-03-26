<?php
  include("include/db.php");

  if(isset($_SESSION['userLoggedIn'])) {
    $userId = $_SESSION['userLoggedIn'];
    $user = new User($con, $userId);
  }

  
  function isLoggedIn() {
    if(isset($_SESSION['userLoggedIn'])) {
      return true;
    } else {
      return false;
    }
  }
  

?>




<nav>
  <div>
    <p>Shop Web App</p>
  </div>
  <div>
    <?php
      if(isLoggedIn()) {
        echo "
          <ul>
            <li>
              <a href=#>Welcome " . $user->getFullName() . "!</a>
            </li>
            <li>
              <a href='./include/handler/logout-handler.php'>Logout</a>
            </li>
          </ul>
        ";
      }

      if(!isLoggedIn()) {
        echo "
          <ul>
            <li>
              <a href='./login.php'>Login</a>
            </li>
            <li>
              <a href='./register.php'>Register</a>
            </li>
          </ul>
        ";
      }

    ?>
  </div>
</nav>