<?php
require('sql_connection.php');
require('../AfricasTalkingGateway.php');

$pName = $_POST['person_name'];

$pNumber = $_POST['phone_number'];

$emailAddress = $_POST['email_address'];

$subcounty_name = $_POST['subcounty_id'];

$user_password = md5($_POST['user_password']);

$confirm_user_password = md5($_POST['confirm_user_password']);

if($user_password != $confirm_user_password) {

	echo "Passwords did not match";

	exit();
	
}

$sql_connection->query("INSERT INTO members(NAME,SUBCOUNTY_ID,PHONE_NUMBER,PASSWORD,EMAIL_ADDRESS)VALUES('$pName','$subcounty_name','$pNumber','$user_password','$emailAddress')");

// $message = "Hello ".$pName.", Thank you for creating an account with Legit Farmers' Association Hoima(U). You will login with your email and your password, We shall connect to you shortly!" ; 

// $gateway    = new AfricasTalkingGateway("sandbox", "89c0376e436020f9f67d62a6d68bfc1c395d65f29c3a14b5663c08105207962b","sandbox");

// $gateway->sendMessage($pNumber , $message); 

header("Location:members.php");
