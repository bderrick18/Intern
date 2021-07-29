<!DOCTYPE html>
<html>
<head>
	<title>NEMA</title>
		<link rel="stylesheet" type="text/css" href="../app.css">

</head>
<body>
	<?php include 'header.php'; ?>


        <main class="py-4">
            <div class="container">
            	<h1>DISTRICTS RECORDED</h1>
            	<hr>
            	<form method="POST" action="save_districts.php">

            		<div class="row">
            			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">

            		<label>Name</label><br>
            		<input type="text" name="district_name" class="form-control">
            		<hr>

            		<button type="Submit" class="btn btn-success"> Save district</button></div>

<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12"></div>
            </div>
        </main>
         	</form>
         	<hr>
         	<table class="table">
         		<thead>
         			<th>ID</th> <th>Name</th>
         		</thead>
         		<tbody>
         			<?php require('read districts.php')?>
         		</tbody>
         	</table>

</body>
</html>