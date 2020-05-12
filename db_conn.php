<?php

  $servername = "tcp:localhost01.database.windows.net,1433";
	$username = "pilakag1";
	$password = "Pilakag_1";
	$db = "pilakag1_db";

try {
   $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password, $db);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
?>
