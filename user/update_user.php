<!DOCTYPE html>
 <?php
 require('sql_connection.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Member</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">

</head>
<body>
	<?php

	$member = $_GET['member_id'];
	$this_member = $sql_connection->query("SELECT * FROM members WHERE ID= $member_id");

	$record = $this_member->fetch_assoc();
	?>

            	 
            	<form method="POST" action="update_member.php">
            		<div class="row">
            			<div class="col-md-6 col-ld-6 col-sm-12 col-xs-12">
            				<label>Name</label><br>
            				<input type="text" value="<?php echo $record['NAME'] ?>" name="person_name" class="form-control" required>

                                    <label>Phone Number</label><br>
                                    <input type="text"  name="phone_number" placeholder="+256770123456" class="form-control" required>


            				<label>Email</label>
            				<input type="email" value="<?php echo $record['EMAIL'] ?>" name="email_address" class="form-control" required>

            				 
            				
            					<?php
            				$results = $sql_connection->query("SELECT ID, NAME FROM subcounty ORDER BY ID ASC");?>
            			
            				<label>Sub-County</label>
            			    <select class="form-control" name="subcounty_id">
            			    	<?php
            			    	foreach ($results as $key => $value) {
            			    		$id = $value["ID"];
            			    		$name = $value["NAME"];

            			    		echo"<option value='$id'>$name</option>";
            			    	}
            			    	?>

                                     

            			    </select><br>

                                  <label>Password</label>
                                    <input type="password" name="password" class="form-control" required>

                                    <label>Confirm password</label>
                                    <input type="password" name="password" class="form-control" required>

            			    <input type="hidden" name="member_id" value="<?php echo $member_id ?>">

                          <hr>

                          <button type="submit" class="btn btn-success">Save Changes</button>
                      </div>
                  </div>

            	</form>
</body>
</html>