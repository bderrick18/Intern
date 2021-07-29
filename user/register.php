<!DOCTYPE html>
<html>

<?php require('sql_connection.php') ?>
<head>
	<meta charset="utf-8">
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>

	<?php include 'header.php'; ?>

    <main class="py-4">
        <div class="container">

        	<h2>Create an account</h2>
        	<hr>

        	<form method="POST" action="save_member.php">
        		<div class="row">
        			<div class="col-md-6">
        				<label>Name</label><br>
        				<input type="text" name="person_name" class="form-control" required>

        				<label>Phone Number</label><br>
        				<input type="text" name="phone_number" placeholder="+256770123456" class="form-control" required>

        				<label>Email</label><br>
        				<input type="email" name="email_address" class="form-control" required>
 

        				<?php 

        				$results = $sql_connection->query("SELECT ID, NAME FROM subcounty ORDER BY ID ASC");
        				 ?>

        				<label>Sub-County</label><br>
        				<select class="form-control" name="subcounty_id">

        					<?php 

        					foreach ($results as $key => $value) {

	                           $id = $value["ID"];
	                           $name = $value["NAME"];

	                           echo "<option value='$id'>$name</option>";

	                        }


        					 ?>
        					 
        				</select>

        				<br>

        				<label>Password</label><br>
        				<input type="password" name="user_password" class="form-control" required>

        				<label>Confirm Password</label><br>
        				<input type="password" name="confirm_user_password" class="form-control" required>

        				<hr>


        				<button type="submit" class="btn btn-success">Register</button>

        			</div>
        		</div>
        	</form>

        </div>
    </main>

</body>
</html>