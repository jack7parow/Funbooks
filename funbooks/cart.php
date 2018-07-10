<div class="container">
<div style="padding: 10px 10px;border-radius: 2px;color: #FFF;background: #6aadf1;">Shopping Cart <a style="background-color: #ffffff;border: #FFF 1px solid;padding: 1px 10px;color: #ff0000;font-size: 0.8em;float: right;text-decoration: none;border-radius: 4px;" href="box.php?action=empty">Empty Cart</a></div>
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
			include 'dbconnect.php';
			session_start();
			$userid = $_SESSION['login_cust'];
			$isql = "";
			$iresult;
			$quantity = 1;
			$irow = array();
			$bookid = "";
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
				$iresult = "select * from books where bookid = ".$bookid.";";
				$irow = mysqli_fetch_array($iresult);
				$bname = $irow['name'];
				$publisher = $irow['publisher'];
				$price = (int)$irow['Price'];
				$edition = $irow['edition'];
				$authorsql = "select authorname from authors where bookid='".$bookid."';";
				$authorresult = mysqli_query($connection, $authorsql);
				while($authorrow = mysqli_fetch_array($authorresult))
					$authors .= $authorrow['authorname']." ";
		?>
		
		<tr>
		<form method="post" action = "addtocart.php">
			<td>
				<div class="row">
				<div class="col-sm-10">
				<h4 class="nomargin"><?php echo $bname; ?></h4>
				<p><?php echo "By ".$authors."<br>Published by ".$publisher."<br>Edition : ".$edition; ?></p>
				</div>
				</div>
			</td>
			<td><?php echo $price; ?></td>
			<td><?php echo $quantity; ?></td>
			<td class="text-center"><?php echo $price*$quantity; ?></td>
			<td class="actions" style="display:inline-block;">
			<input type="submit" name="delete" value= '<i class="fa fa-trash" aria-hidden="true"></i>' />							
			</td>
		</form>
		</tr>
		<?php
			$i++; }
		?>
	</tbody>
	<tfoot>
		<tr>
			<td><a href="customer_details.php" class="btn btn-warning"><i class="fa fa-angle-left"></i>Continue Shopping</a></td>
			<td colspan="2" class="hidden-xs"></td>
			<td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
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
		<input class="btn btn-success btn-block" type="submit" name="Pay" value="Make Payment" style="width:30%">
		</a>
		</form>
</section>	
</div>