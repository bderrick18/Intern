<?php 

require('nema.php');

$pName = $_POST['person_name'];

$email_address = $_POST['email_address'];

$password = md5($_POST['password']);

$confirm_password = md5($_POST['password']);

$district = $_POST['district_id'];

if($password != $confirm_password){
 echo "passwords do not match";
 exit();}

$sql_connection->query("INSERT INTO members(NAME,EMAIL,PASSWORD,DISTRICT_ID)VALUES('$pName','$email_address','$password','$district')");

header("Location:users.php");

 