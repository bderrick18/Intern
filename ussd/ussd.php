<?php
header("Content-type:text/plane");

require('../AfricasTalkingGateway.php');

require('legit_connection.php');

$phone_number = $_POST['phoneNumber'];

$textFromUser = $_POST['text'];

$sessionID = $_POST['sessionId'];

$serviceCode = $_POST['serviceCode'];

if(empty($textFromUser)){

	$textFromUser = "0";

}else{

	$textFromUser = "0*".$textFromUser;

}

$inputArray = explode("*", $textFromUser);

$level = count($inputArray);

switch ($level) {

	case 1:

		$response = "CON Welcome to Legit Farmers' Association Hoima(U)";

	    $response .= "\n 1. Register";

	    $response .= "\n 2. Add Cattle";

	    

	    echo $response;

		break;

	case 2:	 

		 if($inputArray[1]   ==  1) {  

		 	echo "CON What is your name?";



		 }elseif ($inputArray[1] == 2) { 

		 	$checkmembership = $sqliCon->query("SELECT * FROM cattle_keepers WHERE phone_number = '$phone_number' ");

		 	if($checkmembership->num_rows == 0) 

		 		echo "END Please first register an account with our Association";

		 	else{

		 		while ($results = $checkmembers->fetch_assoc()) {

		 			echo "CON ".$results['name']."\n Enter the number of Cattle";

		 		}

		 	}
				
					  

		 
		 }else{

		 	echo "END Invalid option";

		 }
		  
		break;

	case 3: 

	     if($inputArray[1]   ==  1) { 

		 	$user_name = $inputArray[2];

		 	$saveUser = $sqliCon->query("INSERT INTO members(phone_number,name)VALUES('$phone_number','$user_name')");

		 	if($saveUser){

		 		$message = "Hello ".$user_name." Thank you for registering with Legit Farmers' Association Hoima(U)";		        
				$apikey     = "8ca31226367ab4abde28fc34a62a2ef852d0e730b66c02348c98ed7499ca087c";			 
				$gateway    = new AfricasTalkingGateway("sandbox", $apikey,"sandbox");

				$gateway->sendMessage($phone_number, $message); 

				echo "END Registration successful"; 

		 	}else{

		 		echo "END Registration unsuccessful ".$sqliCon->error;

		 	}


		 }elseif ($inputArray[1] == 2) { 

		 	$number_of_cows = $inputArray[2];

		 	$checkmembership = $sqliCon->query("SELECT id,name FROM cattle_keepers WHERE phone_number = '$phone_number'");

		 	if($checkmembers->num_rows == 1){
		 
		 	while ($rows = $checkmembers->fetch_assoc()) {

		 		$member_id = $rows['id'];

		 	    $member_name = $rows['name'];

		 	    $sqliCon->query("INSERT INTO cattle(member_id,number_of_cows)VALUES('$member_id','$number_of_cows')");

		 	    $message = "Hello ".$member_name.", Thank you engaging in cattlekeeping. You have recorded $number_of_cows cow(s). We will connect to you shortly!";
			    $apikey     = "8ca31226367ab4abde28fc34a62a2ef852d0e730b66c02348c98ed7499ca087c";			 
			    $gateway    = new AfricasTalkingGateway("sandbox", $apikey,"sandbox");
			    $gateway->sendMessage($phone_number, $message);
		 	    echo "END $message";
		 		 
		 	}

		 }else{

		 	echo "END No user found";

		 }
	 
	}  

	 
		break;
	
	default:

		echo"The option selected is not valid";

		break;
}



 


