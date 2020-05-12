<?php
include 'db_conn.php'

function get_price($name)
{
        
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

