<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<?php 
if(isset($_POST['login']))
		{
		if($_POST['Email']=="hello@umail.com" && $_POST['Password']=="login")
		{
			header("location:aindex.php");
		}
		else
		{
		echo "<script>alert('Invalid username or password! Please try again.');</script>";		
		}
	}
?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post" action="alogin.php">
          <div class="form-group">
            <label >Email address</label>
            <input class="form-control" name="Email" type="text" aria-describedby="emailHelp" placeholder="Enter email" required/>
          </div>
          <div class="form-group">
            <label >Password</label>
            <input class="form-control" name="Password" type="password" placeholder="Password" required/>
          </div>
          <input class="btn btn-primary btn-block" type="submit" name="login" value="Login" />
		   <a class="btn btn-primary btn-block" href="index.php">Back</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
