<?php

function get_price($name)
{
       
	$host = "tcp:localhost01.database.windows.net,1433";
	$user = "pilakag1@localhost01";
	$pwd  = "Pilakag_1";
	$db   = "pilakag1_db";
    	$conn = new PDO("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        if ($conn->connect_error) 
	{
            die("Connection faied: " .$conn->connect_error);
       	}



       $sql = "SELECT price FROM product WHERE product = '$name'";

       $result = $conn->query($sql);
	

         if ($result->num_rows > 0) {
             
             while($row = $result->fetch_assoc()) {
                      $price = $row["price"];
      }
    } 
else {
                     $price = null;
        }

    $conn->close();

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
        
        if ($conn->connect_error) 
	{
            die("Connection failed: " .$conn->connect_error);
       	}
	

     	$sql1 = "SELECT avail FROM product WHERE product = '$name'";

       	$result1 = $conn->query($sql1);

         if ($result1->num_rows > 0) {
             
             while($row = $result1->fetch_assoc()) {
                      $avail = $row["avail"];
      }
    } 
else {
                     $avail = null;
        }

    $conn->close();

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
        
        if ($conn->connect_error) 
	{
            die("Connection failed: " .$conn->connect_error);
       	}

     	$sql1 = "SELECT delv FROM product WHERE product = '$name'";

       	$result3 = $conn->query($sql1);

         if ($result3->num_rows > 0) {
             
             while($row = $result3->fetch_assoc()) {
                      $delv = $row["delv"];
      }
    } 
else {
                     $delv = null;
        }

    $conn->close();

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
        
        if ($conn->connect_error) 
	{
            die("Connection failed: " .$conn->connect_error);
       	}

     	$sql1 = "SELECT demand FROM product WHERE product = '$name'";

       	$result4 = $conn->query($sql1);

         if ($result4->num_rows > 0) {
             
             while($row = $result4->fetch_assoc()) {
                      $dema = $row["demand"];
      }
    } 
else {
                     $dema = null;
        }

    $conn->close();

    return $dema;
}




?>

