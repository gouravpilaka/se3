<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:localhost01.database.windows.net,1433; Database = pilakag1_db", "pilakag1", "Pilakag_1");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Eror connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "pilakag1", "pwd" => "Pilakag_1", "Database" => "pilakag1_db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:localhost01.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
