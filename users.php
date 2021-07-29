<!DOCTYPE html>
<html>
<?php require('nema.php')?>
<head>
	<meta charset="utf-8">
	<title>Members registered</title>
		<link rel="stylesheet" type="text/css" href="../app.css">
</head>
<body>
	<?php include 'header.php'; 
		
      
       $users = $sql_connection->query("SELECT members.ID,members.NAME,members.EMAIL,districts.NAME as district_name from members, districts WHERE members.DISTRICT_ID = districts.ID");
$ACTIONS;

		?>


		 <main class="py-4">
            <div class="container">
            	<h1>LIST OF USERS</h1>
            	<hr>
                 
                 <table class="table table-striped table-hover">
                 	<thead>
                 		<th>ID</th>
                 		<th>NAME</th>
                 		<th>EMAIL</th>
                 		<th>DISTRICT_OF_ORIGIN</th>
                        <th>ACTIONS</th>
                 	</thead>
                 	<tbody>
                 		<?php
                         foreach ($users as $key => $value) {
                         	$id = $value["ID"];
                         	$name = $value["NAME"];
                         	$email = $value["EMAIL"];
                         	$district_name = $value["district_name"];
                             

                         	echo "
                         	<tr>
                         	<td>$id</td>
                         	<td>$name</td>
                         	<td>$email</td>
                         	<td>$district_name</td>
                            <td><a href='delete_user.php?user_id=".$value["ID"]."'>Delete </a>

                            <a href = 'update_user.php?user_id=".$value["ID"]."'> Update</a></td>
                         	</tr>
                         	";
                         }
                 		?>
                 	</tbody> 
                 </table>


            </div>
        </main>
</body>
</html>