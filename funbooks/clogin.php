<HTML>
<Head>
	<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
	 <!-- Custom styles for this template-->
	 <link href="vendor/bootstrap/css/custom.css" rel="stylesheet">
    <link href="css/shop-homepage1.css" rel="stylesheet">
	<title>Customer login</title>
</head>
<body>

<!-- navigation -->
<?php
include 'nav1.php';
//$msg = $_GET['msg'];
//if($msg)
	//echo "<script> alert('".$msg."')</script>";
?>
<?php
	include 'dbconnect.php';
	session_start();
		if(isset($_POST['login']))
		{
		$user_id = mysqli_real_escape_string($connection,$_POST['username']);
		$password =mysqli_real_escape_string($connection,$_POST['password']);
		$sql="SELECT * FROM customer WHERE csid='$user_id' and paswd='$password'";
		$result= mysqli_query($connection,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		if($count==1)
		{
			$_SESSION['login_cust']=$user_id;
			header("location:customer_details.php");
		}
		else
		{
		echo "<script>alert('Invalid username or password! Please try again.');</script>";		
		}
		}
		else if(isset($_POST['signup']))
		{
		$userid =   $_POST['uid'];
		$sname = $_POST['sname'];
		$pswrd = $_POST['pwd'];
		$phn = $_POST['phn'];
		$mail = $_POST['mail'];
		$address = $_POST['add'];
		$sql = "INSERT INTO customer VALUES ('".$userid."','".$sname."','".$address."','".$phn."','".$pswrd."','".$mail."')";
		if( mysqli_query($connection, $sql)){
			echo "<script>alert('Sign_up completed.');</script>";	
			}
		else
		{
		echo "<script>alert('Something went wrong try again latter.');</script>";
		}
		}
?>
<!-- Form -->
<div style="width: 80%;height:100%;padding-left:110";>
	<div style="float:left; width: 50%">
		<H4 style="text-align:left;color:#dc3545;">Login</h4>
		<form class="form-group" action="clogin.php" method="post">
			<div class="form-group">
			<label>User ID</label>
			<input class="form-control" type="text" name="username" />
			</div>
			<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password"/>
			</div>	    			
			<input class="btn btn-block btn-danger btn-lg" type="submit" name="login" value="Login" style="width:40%;">
		</form>
	</div>
	<div style="float:right;width:50%;">
	<H4 style="text-align:left;color:#dc3545">Customer Sign Up</h4>
		<form class="form-group" action="clogin.php" method="post">
		<div class="form-group">
		<label >User ID</label>
		<input class="form-control" type="text"  name="uid" required/>
		</div>
		<div class="form-group">
		<label>Customer name </label>
		<input class="form-control" type="text"  name="sname" required/>
		</div>
		<div class="form-group">
		<label >Password</label>
		<input class="form-control" type="password"  name="pwd" required/>
		</div>
		<div class="form-group">
		<label >Phone</label>
		<input class="form-control" type="text"  name="phn" required/>
		</div>
		<div class="form-group">
		<label >Email:</label>
		<input class="form-control" type="text"  name="mail" required/>
		</div>
		<div class="form-group">
		<label >Address</label>
		<input class="form-control" type="text"  name="add" required/>
		</div>
		<input class="btn btn-block btn-danger btn-lg" type="submit" name="signup" value="SignUp" style="width:40%;"></form>
    </div>
</div><br><br><br><br><br><br>
	<!-- /Form -->
	 <!-- Footer -->
    <?php
		include 'footer.php';
	?>
	<!-- /Footer -->	
</body>

<html>