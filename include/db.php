<?php
$servername = "localhost";
$username = "root";
$password = "";
$name = "cosc310";

//create connection
$con = new mysqli($servername, $username, $password, $name);
$con -> set_charset("utf8");

// Check connection

// if ($con->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
// ?>