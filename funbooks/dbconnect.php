<?php
	$db_host = "localhost";
	$db_username = "root";
	$db_pass = "";
	$db_name = "funbooks";
	$connection = mysqli_connect("$db_host", "$db_username", "$db_pass") or die("Cannot connect to database!");
	mysqli_select_db($connection, "$db_name") or die("Database not found!");
	$bookid = array();
	$index = 0;
?>