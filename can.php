<?php

function get_price($name)
{
	$host = "tcp:localhost01.database.windows.net,1433";
	$user = "pilakag1@localhost01";
	$pwd  = "Pilakag_1";
	$db   = "pilakag1_db";
    	$conn = new PDO("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = ("select * from product where price=67;");
	$stmt = $conn->query("$sql");
	$row = $stmt->fetch();
	echo "$row[0] $row[1] $row[2]";
	$price = $row["price"];
	$conn = NULL;
 	return $price;	
?>
	 
