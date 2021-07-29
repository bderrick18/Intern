<!DOCTYPE html>
<html>
<?php require('sql_connection.php')?>
<head>
    <meta charset="utf-8">
    <title>Members registered</title>
        <link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>
    <?php include 'header.php'; 
        
      
       $members = $sql_connection->query("SELECT members.ID,members.NAME,members.PHONE_NUMBER,members.EMAIL,subcounty.NAME as subcounty_name from members, subcounty WHERE members.SUBCOUNTY_ID = subcounty.ID");
$ACTIONS;

        ?>


         <main class="py-4">
            <div class="container">
                <h1>LIST OF MEMBERS</h1>
                <hr>
                 
                 <table class="table table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>NAME</th>
                         <th>PHONE_NUMBER</th>
                        <th>EMAIL</th>
                        <th>SUB-COUNTY</th>
                        <th>ACTIONS</th>
                    </thead>
                    <tbody>


                        <?php
                         foreach ($members as $key => $value) {
                            $id = $value["ID"];
                            $pName = $value["NAME"];
                            $pNumber = $value["PHONE_NUMBER"];
                            $emailAddress = $value["EMAIL"];
                            $subcounty_name = $value["subcounty_name"];
                             

                            echo "
                            <tr>
                            <td>$id</td>
                            <td>$name</td>
                            <td>$email</td>
                            <td>$subcounty_name</td>
                            <td><a href='delete_member.php?member_id=".$value["ID"]."'>Delete </a>

                            <a href = 'update_member.php?member_id=".$value["ID"]."'> Update</a></td>
                            </tr> ";
                         }
                        ?>
                    </tbody> 
                 </table>


            </div>
        </main>
</body>
</html>