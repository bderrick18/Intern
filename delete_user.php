<?php
require('nema.php');

$user_id = $_GET['user_id'];

$sql_connection->query("DELETE FROM members WHERE ID=$user_id");
header("Location:users.php");