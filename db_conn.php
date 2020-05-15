<?php

$servername = "localhost01.database.windows.net,1433";
$username = "pilakag1@";
$password = "Pilakag_1";
$db = "pilakag1_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection faild: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
