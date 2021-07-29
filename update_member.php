<?php
require('nema.php');


$names = $_POST['person_name'];
$email = $_POST['email_address'];
$district = $_POST['district_id'];

$user_id = $_POST['user_id'];

$sql_connection->query("UPDATE members SET NAME = '$names', EMAIL = '$email', DISTRICT_ID = '$district' WHERE ID= '$user_id' ");
header("Location:users.php");