<?php

	include 'dbconnect.php';
	$flag = false;
	$roww = array();
	if(isset($_POST['login'])){
		$userid = $_POST['username'];
		$pswrd = $_POST['password'];
		$sql = mysqli_query($connection,"SELECT * FROM seller");
		
		while ($row = mysqli_fetch_array($sql)){
			if($userid==$row['userid'] && $pswrd==$row['pswrd'])
			{
				$flag = true;
				$roww = $row;
			}
		}
		if(!$flag)
			header('location:seller.php ?msg=Invalid username or password! Please try again.');
	}

?>
