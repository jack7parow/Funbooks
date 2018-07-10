<HTML>
<Head>
	
	<!-- CSS file-->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	
	<!-- Custom styles for this page--> 
    <link href="css/shop-homepage1.css" rel="stylesheet">
</head>
<body>

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
	
<div class="container">
<div style="padding: 10px 10px;border-radius: 2px;color: #FFF;background: #0076d1;">Shopping Cart
<form method="post" action="box.php">
 <input type = "submit" name="empty" 
 style="background-color: #ffffff;border: #FFF 1px solid;padding: 1px 10px;margin-top:-20px;color: #ff0000;font-size: 0.8em;float: right;text-decoration: none;border-radius: 4px;"
 value="Empty Cart"/></form></div>
<?php
	include 'dbconnect.php';
	session_start();
	$userid = $_SESSION['login_cust'];
	if(isset($_POST['empty'])){
		$sql = "CALL `org_cart`('EMPTY','".$userid."','0','0','0','0','0');";
		$result = mysqli_real_query($connection, $sql);
		if($result)
			header('location:box.php');
	}
?>
	<table class="table">
    	<thead>
			<tr>
				<th style="width:50%">Product</th>
				<th style="width:10%">Price</th>
				<th style="width:8%">Quantity</th>
				<th style="width:22%" class="text-center">Subtotal</th>
				<th style="width:10%"></th>
				</tr>			
		</thead>
		
		
		<tbody>
		<?php
			$i = 0;
			$total = 0;
			$isql = "";
			$iresult;
			$quantity = 1;
			$irow = array();
			$bookid = 0;
			$bname = "";
			$publisher = "";
			$authors = "";
			$price = 1;
			$edition = "N/A";
			$sql = "select * from ord_summar where cid = '".$userid."' and oid = 0;";
			$result = mysqli_query($connection, $sql);
			while($row = mysqli_fetch_array($result)){
				$authors = "";
				$bookid = $row['bid'];
				$quantity = $row['Quant'];
				$isql = "select * from books where bookid = ".$bookid;
				$iresult = mysqli_query($connection, $isql);
				$irow = mysqli_fetch_array($iresult);
				$bname = $irow['name'];
				$publisher = $irow['publisher'];
				$price = (int)$irow['Price'];
				$edition = $irow['edition'];
				$authorsql = "select authorname from authors where bookid='".$bookid."';";
				$authorresult = mysqli_query($connection, $authorsql);
				while($authorrow = mysqli_fetch_array($authorresult))
					$authors .= $authorrow['authorname']." ";
				$total += $price*$quantity;
		?>
		
		<!--<form method="post" action = "addtocart.php">-->
		<tr>		
			<td>
				<div class="row">
				<div class="col-sm-10">
				<h5 class="nomargin"><?php echo $bname; ?></h5>
				<p><?php echo "By ".$authors."<br>Published by ".$publisher."<br>Edition : ".$edition; ?></p>
				</div>
				</div>
			</td>
			<td><?php echo "Rs.".$price; ?></td>
			<td><?php echo $quantity; ?></td>
			<td class="text-center"><?php echo $price*$quantity; ?></td>
			<td class="actions" style="display:inline-block;">
			<button style="background-color:white;border:2px solid #0076d1;border-radius:2px;color:#0076d1;padding:2px;" onclick="deletebook(<?php echo $bookid; ?>);"
			<i class="fa fa-trash" aria-hidden="true" style="color:#0076d1; "></i> Delete </button>
			<!--<input type="submit" name="delete" value="Delete" style="background-color:white;border:2px solid #0076d1;border-radius:2px;color:#0076d1;"/>-->
			</td>
		</tr>
		<!--</form>-->
		<?php
			$i++; }
		?>
	</tbody>
	
	<?php
	/*	if(isset($_POST['delete'])){
		$sql = "CALL `org_cart`('DELETE','".$userid."','".$bookid."',0,0,0,0);";
		$result = mysqli_real_query($connection, $sql);
		if($result)
			header('location:box.php?success=1');
	}*/
	?>
	<tfoot>
		<tr>
			<td><a href="customer_details.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
			<td colspan="2" class="hidden-xs"></td>
			<td class="hidden-xs text-center"><strong><?php echo "Total Rs.".$total; ?></strong></td>
			<td><a href="#pay" class="btn btn-success btn-block" style="width:100%;">Checkout <i class="fa fa-angle-right"></i></a></td>
		</tr>
	</tfoot>
	</table>
<section id="place_order">
		<form class="form-group"  method="post">
		<a name="pay">
		<div>
		<h1 style="text-align:center;color:blue;margin-top:50px"><b>Scan & PAY</b></h1>
		<div class="containerm">
		<img src="img\pay.jpg" alt="..." align="center"></div>
		</div>
		<div class="form-group">
		<label <!--for="username"-->Transaction_id</label>
		<input class="form-control" type="text"  name="tid" style="width:30%;"/>
		</div>
		<input class="btn btn-success btn-block" type="submit" name="pay" value="Make Payment" style="width:30%">
		</a>
		</form>
</section>	
</div>	

<?php
	if(isset($_POST['pay'])){
		$tid = $_POST['tid'];
		$sql = "CALL `org_cart`('FINAL','".$userid."','0','".$total."','0','0','".$tid."');";
		$result = mysqli_real_query($connection, $sql);
		if($result){
			echo "<script> alert('Book(s) purchased!'); </script>";
		}
	}
?>


	<!--footer-->
	<?php include 'footer.php'; ?>
	
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script>
	function deletebook(bookid){
		$.post('addtocart.php', {postbookid: bookid},
			function(data){
				if(data == 1)
					if(!alert('Deleted'))
						location.reload(true);
				else
					alert('Ghanta delete hua');
			});
		//location.reload();
	}
</script>
</body>
</html>
