<?php 
require('legit_connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>

	<?php

	  $records = $sqliCon->query("SELECT phone_number, name, number_of_cows FROM cattle_keepers,cattle WHERE cattle.member_id = cattle_keepers.id");

	 ?>

	<div class="container">

		<h2>Cattle Keeping</h2>
		<hr>
		<table class="table">

			<thead>
				<th>Phone Number</th> <th>Name</th> <th>Total Cattle</th>
			</thead>

			<tbody>
				 <?php

				   if($records){

				   	 foreach ($records as $key => $value) {

				   	 	$phone = $value["phone_number"];
				   	 	$name = $value["name"];
				   	 	$total = $value["number_of_cows"];
				   	 	 echo "

				   	 	 <tr> 

				   	 	    <td>$phone </td>
				   	 	    <td>$name </td>
				   	 	    <td>$total </td>
 

				   	 	  </tr>



				   	 	 ";
				   	 }




				   }else{
				   	echo "Oops something went wrong, please try again.".$sqliCon->error;
				   } 


				  ?>
			</tbody>


		</table>
	</div>



</body>
</html>

