<?php

function get_price($name)
{
	$host = "tcp:localhost01.database.windows.net,1433";
	$user = "pilakag1@localhost01";
	$pwd  = "Pilakag_1";
	$db   = "pilakag1_db";
    	$conn = new PDO("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = ("SELECT price FROM product WHERE product = '$name'");
	$stmt = $conn->query("$sql");
	$row = $stmt->fetch();
	$price = $row["price"];
	$conn = NULL;
 	return $price;	
	
}


function get_avail($name)
{
        
	$host = "tcp:localhost01.database.windows.net,1433";
	$user = "pilakag1@localhost01";
	$pwd  = "Pilakag_1";
	$db   = "pilakag1_db";
    	$conn = new PDO("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = ("SELECT avail FROM product WHERE product = '$name'");
	$stmt = $conn->query("$sql");
	$row = $stmt->fetch();
	$avail = $row["avail"];
	$conn = NULL;
        return $avail;
}

function get_delv($name)
{
        $host = "tcp:localhost01.database.windows.net,1433";
	$user = "pilakag1@localhost01";
	$pwd  = "Pilakag_1";
	$db   = "pilakag1_db";
    	$conn = new PDO("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = ("SELECT delv FROM product WHERE product = '$name'");
	$stmt = $conn->query("$sql");
	$row = $stmt->fetch();
	$delv = $row["delv"];
	$conn = NULL;
 		

    return $delv;
}

function get_dema($name)
{
        
	$host = "tcp:localhost01.database.windows.net,1433";
	$user = "pilakag1@localhost01";
	$pwd  = "Pilakag_1";
	$db   = "pilakag1_db";
    	$conn = new PDO("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
	$sql = ("SELECT demand FROM product WHERE product = '$name'");
	$stmt = $conn->query("$sql");
	$row = $stmt->fetch();
	$dema = $row["demand"];
	$conn = NULL;

    return $dema;
}




?>

