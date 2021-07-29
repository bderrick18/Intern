<?php
require('sql_connection.php');


$names = $_POST['person_name'];
$email = $_POST['email_address'];
$subcounty = $_POST['subcounty_id'];

$member_id = $_POST['member_id'];

$sql_connection->query("UPDATE members SET NAME = '$names', EMAIL = '$email', SUBCOUNTY_ID = '$subcounty' WHERE ID= '$member_id' ");
header("Location:list_of_members.php");