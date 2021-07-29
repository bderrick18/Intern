<?php
require('sql_connection.php');
 
 

if (!isset($_POST['subcounty_name'])) {
	echo "Name is not set";
	exit();
}


$d_name = $_POST['subcounty_name'];

$sql_connection->query("INSERT INTO subcounty(NAME)VALUES('$d_name')");

header("Location:subcounty.php");