<?php
	include 'dbconnect.php';
	session_start();
	$csid = $_SESSION['login_cust'];	
	/*$sql = "";
	if(isset($_POST['addtocart'])){
		$bookid = $_POST['bookid'];
		$quantity = $_POST['quantity'];
		$sql = "CALL `org_cart`('INSERT','".$csid."','".$bookid."','0','0',".$quantity.",'0');";
		$result = mysqli_real_query($connection, $sql);
		if($result)
			header('location:customer_details.php');
	}*/
?>

<?php
		$bookid = $_POST['postbookid'];
		$sql = "CALL `org_cart`('DELETE','".$csid."','".$bookid."',0,0,0,0);";
		$result = mysqli_real_query($connection, $sql);
		if($result)
			echo "1";	
?>