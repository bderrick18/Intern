<?php

$sqliCon = new mysqli("localhost","root","");

$sqliCon->query("CREATE DATABASE IF NOT EXISTS rearing");

mysqli_select_db($sqliCon, "rearing");

$sqliCon->query("CREATE TABLE IF NOT EXISTS cattle_keepers(id int( 11) not null auto_increment, PRIMARY KEY(id), phone_number varchar(20) not null unique, name varchar(50) not null)");



$sqliCon->query("CREATE TABLE IF NOT EXISTS cattle(id int( 11) not null auto_increment, PRIMARY KEY(id), member_id int(11) not null, number_of_cows int(11) not null, FOREIGN KEY(member_id) REFERENCES cattle_keepers(id))");

