<?php

$servername = "tcp:localhost01.database.windows.net,1433";
$username = "pilakag";
$password = "Pilakag_1";
$db = "pilakag1_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
