<?php
    include("../db.php");

    session_start();

    session_destroy();

    header("Location: http://localhost/shop-web-app/index.php");
?>