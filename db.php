<?php

$servername = "wordpress.cs6royptlt8t.us-west-2.rds.amazonaws.com";
$username = "wordpress";
$password = "wordpress123";
$db = "ecommerse";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
