<!DOCTYPE html>
 <?php
 require('nema.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Update User</title>
	<link rel="stylesheet" type="text/css" href="../app.css">

</head>
<body>
	<?php

	$user_id = $_GET['user_id'];
	$this_user = $sql_connection->query("SELECT * FROM members WHERE ID= $user_id");

	$record = $this_user->fetch_assoc();
	?>

            	 
            	<form method="POST" action="update_member.php">
            		<div class="row">
            			<div class="col-md-6 col-ld-6 col-sm-12 col-xs-12">
            				<label>Name</label><br>
            				<input type="text" value="<?php echo $record['NAME'] ?>" name="person_name" class="form-control" required>

            				<label>Email</label>
            				<input type="email" value="<?php echo $record['EMAIL'] ?>" name="email_address" class="form-control" required>

            				<label>Password</label>
            				<input type="password" name="password" class="form-control" required>

            				<label>Confirm password</label>
            				<input type="password" name="password" class="form-control" required>
            				
            					<?php
            				$results = $sql_connection->query("SELECT ID, NAME FROM districts ORDER BY ID ASC");?>
            			
            				<label>District_of_origin</label>
            			    <select class="form-control" name="district_id">
            			    	<?php
            			    	foreach ($results as $key => $value) {
            			    		$id = $value["ID"];
            			    		$name = $value["NAME"];

            			    		echo"<option value='$id'>$name</option>";
            			    	}
            			    	?>
            			    </select><br>
            			    <input type="hidden" name="user_id" value="<?php echo $user_id ?>">

                          <hr>

                          <button type="submit" class="btn btn-success">Save Changes</button>
                      </div>
                  </div>

            	</form>
</body>
</html>