<HTML>
<Head>
	
	 <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
	 <!-- Custom styles for this template-->
	 <link href="vendor/bootstrap/css/custom.css" rel="stylesheet">
    <link href="css/shop-homepage1.css" rel="stylesheet">
	<title>Welcome!</title>
</head>
<body>
	<?php
   include('dbconnect.php');
   session_start();
   $row=array();
   $user_check =mysqli_real_escape_string($connection,$_SESSION['login_cust']);
   $sql="SELECT * FROM customer WHERE csid='$user_check'";
   $result= mysqli_query($connection,$sql);
   $row = mysqli_fetch_array($result);
   $userid= $row['csid'];
   $name= $row['name'];
   $phone= $row['phone'];
   $email=$row['email'];
   $address= $row['address'];
   if(!isset($_SESSION['login_cust']))
   {
	   header("location:clogin.php");
   }
   $i = 1;
?>

	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href=""><b style="text-shadow:3px 5px 1px rgb(254, 8, 8)">FuNBoOkS</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li>
			<a class="nav-link" href="box.php"> Cart <img src="img/cart.jpg" ></a>
			</li>
			<li class="nav-item">
              <a class="nav-link" href="clogin.php"><b>Logout</b></a>
            </li>
            </ul>
        </div>
      </div>
    </nav>
<div style="position:relative;">
		<div style="width:20%">
		<h2 style="text-align:center; color:red;">Welcome!</h2>
		<hr>
		<h3 style="text-align:center;color:#b409f8;"><b><?php echo $userid ?></b></h3> 
		</div>
		<div class = "right-side" style="margin-top: -100px;">
		<ul style="list-style:none;">
		<li><i>Name</i> : <?php echo $name ?></li>
		<li><i>Phone</i> : <?php echo $phone?></li>
		<li><i>@email</i> : <?php echo $email?></li>
		<li><i>Address</i> : <?php echo $address?></li>
		</ul>
		</div>
	</div>
	<br>
	<hr style="background-color:black;">
	
	<!-- Search bar -->
	<div class="col-md-10" style="margin: 10px 100px;">
	<form class="form-inline" action="customer_details.php" method="post">
		<input placeholder="Enter the book or author or type" type="text" name="searchvalue" class = "form-control" style="width: 80%;">
		<input type="submit" value="Search" name ="search" class="btn btn-block btn-danger btn-lg" style="width: 20%;">
	</form>
	</div>
	<?php
		$sql = "";
		$flag = false;
		if(isset($_POST['search'])){
			$searchvalue = $_POST['searchvalue'];
			if($searchvalue){
				$flag = true;
				$sql = "select distinct bookid from books natural join authors where name like '%".$searchvalue."%' OR type like '%".$searchvalue."%' OR authorname like '%".$searchvalue."%';";
				$id = mysqli_query($connection, $sql);
				$ids = "";
				while($roww = mysqli_fetch_array($id))
					$ids .= $roww['bookid'].", ";
				$ids = substr($ids, 0, strlen($ids)-2);
				$sql = "select * from books where bookid in (".$ids.");";
			}
		}

	?>
	
	<!-- All Products -->
	<div class="col-md-10" style="margin: 10px 100px;">
	<div class="row">
	<?php
	$bookid = "";
	$bname = "";
	$publisher = "";
	$authors = "";
	$image = "";
	$price = "";
	$edition = "N/A";
	$type = "";
	if(!$flag)
		$sql = "select * from books;";
	$result = mysqli_query($connection, $sql);
	if(!$result)
		echo "No books found....";
	else{
	while($row = mysqli_fetch_assoc($result)){
		$authors = "";
		$bookid = $row['bookid'];
		$bname = $row['name'];
		$publisher = $row['publisher'];
		$image = $row['image'];
		$price =$row['Price'];
		$edition = $row['edition'];
		$type = $row['type'];
		$authorsql = "select authorname from authors where bookid='".$bookid."';";
		$authorresult = mysqli_query($connection, $authorsql);
		while($authorrow = mysqli_fetch_array($authorresult))
			$authors .= $authorrow['authorname']." ";
	?>
		<div class="col-md-3 portfolio-item">
	<?php
	$sql = "";
	if(isset($_POST['addtocart'])){
		$bookid = $_POST['bookid'];
		$quantity = $_POST['quantity'];
		$sql = "CALL `org_cart`('INSERT','".$userid."','".$bookid."','0','0',".$quantity.",'0');";
		$result = mysqli_real_query($connection, $sql);
		if($result)
			header('location:customer_details.php?success=1');
	}
	?>		
				<form method="post" action="customer_details.php">
				<p> <?php echo $type."<br>"; ?> </p>
                <img class="img-responsive" src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>" alt="no image found">
				<p> <?php echo " By ".$authors." <br>Publisher: ".$publisher." <br>Edition: ".$edition." <br><b><i>Price:  ".$price."</b></i>"; ?></p>
				<div>
				<input type="number" name="quantity" value="1" size="2" style="width:25%;margin-bottom:5px;"/>
				<input type="hidden" name="bookid" id="bookidval" value="<?php echo $bookid;?>"/>
				<input type="submit" class="btn btn-block btn-danger btn-lg" name="addtocart" value="Add to Cart" style="width:60%;"/>
				</div>
				</form>
		</div>
	<?php $i++; }}?>
				</div>
		</div>
		

<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</HTML>
