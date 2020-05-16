<html>
<head>
<meta charset="utf-8"/>
<title></title>
<script></script>
</head>
<body>
	<h1>
		<?php

	try {
    	$conn = new PDO("sqlsrv:Server = tcp:localhost01.database.windows.net,1433; Database = pilakag1_db", "pilakag1", "Pilakag_1");
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	

	}
	catch (Exception $e) {
    	print("Error connecting to SQL Server.");
    	die(print_r($e));
	}
?>
	</h1>
</body>
</html>
