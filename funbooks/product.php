<HTML>
<Head>
	
	 <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
	 <!-- Custom styles for this template-->
	 <link href="vendor/bootstrap/css/custom.css" rel="stylesheet">
    <link href="css/shop-homepage1.css" rel="stylesheet">
	<title>Customer</title>
</head>
<body>
	<!--Navigation-->
	<?php
		include 'nav1.php';
		include 'dbconnect.php';
		session_start();
		$i = 1;
	?>
	<!-- /.navbigator -->
	<div class="col-md-10">
	<a href="clogin.php"> <button class="btn btn-block btn-danger btn-lg" type="button" style="width: 20%; float: right;"> Login or signup </button> </a>
	</div>
	<br>
	<br>
	<hr>
	
	<button type="button" onclick="alert('Please login or signup.')">
	<!-- Search bar -->
	<div class="col-md-10" style="margin: 10px 100px;">
	<form class="form-inline" action="customer.php" method="post">
		<input placeholder="Enter the book or author or type" type="text" name="searchvalue" class = "form-control" style="width: 80%;">
		<input type="submit" value="Search" name ="search" class="btn btn-block btn-danger btn-lg" style="width: 20%;">
	</form>
	</div>
	
	<!-- All Products -->
	<div class="col-md-10" style="margin: 10px 100px;">
	<div class="row">
	<?php
	$bookid = "";
	$name = "";
	$publisher = "";
	$authors = "";
	$image = "";
	$sql = "select * from books;";
	$result = mysqli_query($connection, $sql);
	while($row = mysqli_fetch_array($result)){
		$authors = "";
		$bookid = $row['bookid'];
		$name = $row['name'];
		$publisher = $row['publisher'];
		$image = $row['image'];
		$authorsql = "select authorname from authors where bookid='".$bookid."';";
		$authorresult = mysqli_query($connection, $authorsql);
		while($authorrow = mysqli_fetch_array($authorresult))
			$authors .= $authorrow['authorname'];
	?>
		<div class="col-md-3 portfolio-item">
                <a href="product.php" style = "color: #dc3545;">
                    <img class="img-responsive" src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>" alt="no image found">
					<p> <?php echo $name." by ".$authors." published by ".$publisher; $_SESSION['bookid'] = $bookid;?></p>
                </a>
        </div>
	<?php $i++; }?>
	</div>
	</div>
	</button>
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</HTML>
