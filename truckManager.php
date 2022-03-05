<?php
INCLUDE ("DBConn.php");
connDB();
$statement = "
INSERT INTO manager (username, password) VALUES ('truckManager', 'Columbi@1851CC');";


if(mysqli_query($mysqli, $statement))
	echo "<p>Row inserted successfully</p>";
else 
	echo "<p>Something went wrong.</p>";
mysqli_close($mysqli);
?>
