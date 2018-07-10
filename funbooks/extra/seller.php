<HTML>
<Head>
	
	 <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
	 <!-- Custom styles for this template--> 
    <link href="css/shop-homepage1.css" rel="stylesheet">
	<title>funbooks Seller login</title>
</head>
<body>
	<?php
	include 'dbconnect.php';
	session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$user_id = mysqli_real_escape_string($connection,$_POST['username']);
		$password =mysqli_real_escape_string($connection,$_POST['password']);
		$sql="SELECT * FROM seller WHERE userid='$user_id' and pswrd='$password'";
		$result= mysqli_query($connection,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		if($count==1)
		{
			$_SESSION['login_user']=$user_id;
			header("location:seller_details.php");
		}
		else
		{
		echo "<script>alert('Invalid username or password! Please try again.');</script>";		
		}
	}
?>

	<!--Navigation-->
	<?php
		include 'nav1.php';
	?>
	<!-- /.navbigator -->
	<!--form-->
	<div style="width: 80%;height:100%;padding-left:110";>
	<div style="float:left; width: 50%">
		<H4 style="text-align:left;color:red;">Login</h4>
		<form class="form-group" name="do_login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<div class="form-group">
			<label>User ID</label>
			<input class="form-control" type="text" name="username" required />
			</div>
			<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password" required/>
			</div>	    			
			<input class="btn btn-block btn-danger btn-lg" type="submit" name="login" value="Login" style="width:40%;">
		</form>
	</div></div>
	<!--/form -->
	 <!-- Footer -->
    <?php
		include 'footer.php';
	?>
	<!-- /Footer -->	 
    <script src="vendor/jquery/jquery.min.js"></script> 
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	</body>

</HTML>
