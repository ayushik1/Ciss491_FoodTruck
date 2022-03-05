<?php
INCLUDE ("DBConn.php");
connDB();
$statement = "
INSERT INTO cust_Order (order_id, cust_name) VALUES ( 1, 'Test Order');

if (mysqli_multi_query($mysqli, $statement))
	echo "<p>Row inserted successfully.</p>";
else
	echo "<p>Something went wrong.</p>";

mysqli_close($mysqli);
?>