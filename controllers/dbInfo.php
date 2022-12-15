<?php
$serverName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "loginsystemphp";

$conn = mysqli_connect($serverName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
