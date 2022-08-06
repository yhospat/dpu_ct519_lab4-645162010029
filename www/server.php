<?php

$servername = "10.1.1.22";
$username = "yhospat";
$password ="P@ssw0rd";
$dbname = "register_db";

//create Connection
$conn = mysqli_connect ($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
} 

?>
