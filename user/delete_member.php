<?php
require('sql_connection.php');

$member_id = $_GET['member_id'];

$sql_connection->query("DELETE FROM members WHERE ID=$member_id");
header("Location:list_of_members.php");