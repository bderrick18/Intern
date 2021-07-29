<<?php 
require('nema.php');

 if(!isset($_POST['tree_type_name'])){
 	echo "Name is not set";
 	exit();
 }

$t_name = $_POST['tree_type_name'];
$t_number = $_POST['tree_number'];

$sql_connection->query("INSERT INTO tree_types(TYPE_NAME,NUMBER_OF_TREES)VALUES('$t_name','$t_number')");

header("Location:tree_types.php");

 