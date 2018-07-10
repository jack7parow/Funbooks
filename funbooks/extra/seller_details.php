<html>
<head>
	<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
	<!-- manju css -->
	<link href="vendor/bootstrap/css/custom.css" rel="stylesheet">
	 <!-- Custom styles for this template--> 
	<link href="vendor/bootstrap/css/custom.css" rel="stylesheet">
	
	<title> Welcome!</title>
</head>
<body>
<?php
   include('dbconnect.php');
   session_start();
   $row=array();
   $user_check =mysqli_real_escape_string($connection,$_SESSION['login_user']);
   $sql="SELECT * FROM seller WHERE userid='$user_check'";
   $result= mysqli_query($connection,$sql);
   $row = mysqli_fetch_array($result);
   $userid= $row['userid'];
   $name= $row['sname'];
   $phone= $row['phn'];
   $email= $row['mail'];
   $address= $row['address'];
   if(!isset($_SESSION['login_user']))
   {
	   header("location:seller.php");
   }
?>
<!--Navigation--> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href=""><b style="text-shadow:3px 5px 1px rgb(254, 8, 8)">FuNBoOkS</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="seller.php" style="font-size: 20px;"><b>Logout</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<div style="position:relative; padding-top: 100px; margin-bottom: 40px;">
		<div style="width:20%">
		<h2 style="text-align:center; color:red;">Welcome!</h2>
		<hr>
		<h3 style="text-align:center;color:#b409f8;"><b><?php echo $userid; ?></b></h3> 
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
	
<?php
	$orderid= "";
	$customerid = "";
	$orderedBook = "";
	$orderedDate = "";
	$price = "";
	$getid = "";
	$table = "";
	
	$sql = mysqli_query($connection,"SELECT * FROM seller");
	
	while ($row = mysqli_fetch_array($sql)){
	
		$orderid = $row["userid"];
		$customerid = $row["sname"];
		$orderedBook = $row["mail"];
		$orderedDate = $row["phn"];		
		$price = $row["userid"];
		
		$table  .= "<tr class = \"hoverRow\" > <td class = \"hoverRow\" > ".$orderid." </td>
					<td class = \"hoverRow\" > ".$customerid." </td>
					<td class = \"hoverRow\" > ".$orderedBook." </td>
					<td class = \"hoverRow\" > <a href=\"#details\"> <button class = \"left-button\" onclick=\"\"> View <?php $getid = $customerid; ?> </button> </a> </td>
					<td class = \"hoverRow\" > <button class = \"left-button\" > Delete </button> </td> </tr>";
	}
?>
	
	<div class="left-side">
		<div class="left-table">
			<table class = "hoverRow">
				<tr class = "hoverRow">
					<th class = "hoverRow" align = 'center'> OrderId </th>
					<th class = "hoverRow" align = 'center'> Customer Id </th>
					<th class = "hoverRow" align = 'center'> Ordered Book </th>
					<th class = "hoverRow" align = 'center'> Details </th>
					<th class = "hoverRow" align = 'center'> Delete Order </th>
				</tr>
				<?php echo $table; ?>
			</table>
			<br> <hr style="width:90%; background-color:black; float:left;"> <br>
			<div class = "details">
			<a name="details">
				<div class = "left-side">
					<ul style="list-style:none;">
						<li><i>Name</i> : <?php echo $getid; ?></li>
						<li><i>Phone</i> : <?php echo $getid; ?></li>
						<li><i>@email</i> : <?php echo $getid; ?></li>
						<li><i>Address</i> : <?php echo $getid; ?></li>
					</ul>
				</div>
				<a href="seller_details.php"> <button class = "left-button"> Back to Top </button> </a>
			</a>
			</div>
		</div>
	</div>
	
<?php
	$bookid= "";
	$name = "";
	$author = "";
	$publisher = "";
	$pr = "";
	$table = "";
	
	$sql = mysqli_query($connection,"SELECT * FROM seller");
	
	while ($row = mysqli_fetch_array($sql)){
	
		$bookid = $row["userid"];
		$name = $row["sname"];
		$author = $row["mail"];
		$publisher = $row["phn"];		
		$pr = $row["userid"];
		
		$table  .= "<tr class = \"hoverRow\"><td class = \"hoverRow\"> ".$bookid." </td>
					<td class = \"hoverRow\"> ".$name." </td>
					<td class = \"hoverRow\"> ".$author." </td>
					<td class = \"hoverRow\"> ".$publisher." </td>
					<td class = \"hoverRow\"> ".$pr." </td></tr>";
	}
?>
	
	<div class="right-side">
		<div class="right-table">
			<table class = "hoverRow">
				<tr class = "hoverRow">
					<th class = "hoverRow" align = 'center'> BookId </th>
					<th class = "hoverRow" align = 'center'> Name </th>
					<th class = "hoverRow" align = 'center'> Author(s) </th>
					<th class = "hoverRow" align = 'center'> Publisher </th>
					<th class = "hoverRow" align = 'center'> Price </th>
				</tr>
				<?php echo $table; ?>
			</table>
			<a href="add_books.php"><button class = "add-books"> Add Book </button></a>
		</div>
	</div>

</body>
</html>