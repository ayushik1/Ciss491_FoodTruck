<!DOCTYPE html>
	<html>
		<head>
		<meta charset = "utf-8">
	<title>Weekend at Baudy's</title>
</head>
<body>

<?php
$conn = mysqli_connect('localhost', 'root', '');
if($conn){
  echo "<p>Connection set up successfully.</p>";
mysqli_query($conn, "DROP DATABASE IF EXISTS foodTruckDB");
if (mysqli_query($conn, "CREATE DATABASE foodTruckDB"))
	echo "<p>Database created successfully.</p>";
mysqli_select_db($conn, "foodTruckDB");

//create order table
//to keep track of order history
$myStatement = "CREATE TABLE cust_Order
(
	order_id INT NOT NULL  AUTO_INCREMENT,
	cust_name VARCHAR(100) NULL,
	CONSTRAINT pk_cust_id PRIMARY KEY (cust_id)	
); 
";
if(mysqli_query($conn, $myStatement))
	echo "<p>Customer order table was created successfully.</p>";
else
	echo "<p>Table creation failed."
	
	
	//create admin table
$myStatement = "CREATE TABLE manager
(
	manager_id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(120)  NOT NULL,
	password VARCHAR(120)  NOT NULL,
	CONSTRAINT pk_manager PRIMARY KEY(manager_id)
); ";
if(mysqli_query($conn, $myStatement))
	echo"<p>Manager table created successfully.</p>";
else	
	echo "<p>Table creation failed.</p>";
	
}	

mysqli_close($conn);
	
?>
</body>
</html>