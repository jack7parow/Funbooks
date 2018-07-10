<!DOCTYPE html>
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
  <!-- Page level plugin CSS-->
  <link href="admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
<?php include "nav3.php";
?>
  <div class="content-wrapper">
    <div class="container-fluid" style="padding-top:15px";>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white o-hidden h-100"; style="background:#007bff !important";>
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">New Messages!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#message">
              <span class="float-left">Read</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Books</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#Book">
              <span class="float-left">Show Table</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">Orders!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#order">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">Change IN Server</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="//localhost/phpmyadmin/db_structure.php?server=1&db=funbooks">
              <span class="float-left">Jump To localhost</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Area Chart Example</div>
        <div class="card-body" style="background-image: url(img/a1.png);height:368px; width:1067px;">
          <canvas id="myAreaChart" width="100%" height="30" ></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Bar Chart Example</div>
            <div class="card-body" style="background-image: url(img/a3.png);height:255px; width:700px;">
              <div class="row">
                <div class="col-sm-8 my-auto">
                  <canvas id="myBarChart" width="100" height="50"></canvas>
                </div>
                <div class="col-sm-4 text-center my-auto">
                  <div class="h4 mb-0 text-primary">$34,693</div>
                  <div class="small text-muted">YTD Revenue</div>
                  <hr>
                  <div class="h4 mb-0 text-warning">$18,474</div>
                  <div class="small text-muted">YTD Expenses</div>
                  <hr>
                  <div class="h4 mb-0 text-success">$16,219</div>
                  <div class="small text-muted">YTD Margin</div>
                </div>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
          </div>
        <div class="col-lg-4">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Pie Chart Example</div>
            <div class="card-body" style="background-image: url(img/a2.png);height:250px; width:228px;">
              <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
       </div>
      </div>
  <!-- Books Table-->
	  <a name="Book">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Books Table </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Bookid</th>
                  <th>Name</th>
                  <th>Publisher</th>
                  <th>Price</th>
                  <th>Quantity</th>
				  <th>Edition</th>
				  <th>Type</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                 <th>Bookid</th>
                  <th>Name</th>
                  <th>Publisher</th>
                  <th>Price</th>
                  <th>Quantity</th>
				  <th>Edition</th>
				  <th>Type</th>
                </tr>
              </tfoot>
	<?php
	include 'dbconnect.php';
	$table = "";
	$bookid="";
	$bname = "";
	$publisher = "";
	$price = "";
	$Quantity="";
	$edition="";
	$type = "";
		$sql = "select * from books;";
	$result = mysqli_query($connection, $sql);
	while($row = mysqli_fetch_array($result)){
		$bookid = $row['bookid'];
		$bname = $row['name'];
		$publisher = $row['publisher'];
		$image = $row['image'];
		$price =$row['Price'];
		$edition = $row['edition'];
		$type = $row['type'];
		$table  .= "<tr><td>".$bookid." </td>
					<td> ".$bname." </td>
					<td> ".$publisher." </td>
					<td> ".$price." </td>
					<td> ".$Quantity." </td>
					<td> ".$edition." </td>
					<td> ".$type." </td></tr>";
	}
	?>
			  <tbody>
			  <?php echo $table; ?>
            </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div></a>
	  <!-- /Books table -->
	  <!-- Orders Table-->
	  <a name="order">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Orders</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Order Id</th>
                  <th>Customer id</th>
                  <th>Total Value</th>
                  <th>Date</th>
				  <th>Transaction Id</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                 <th>Order Id</th>
                  <th>Customer id</th>
                  <th>Total Value</th>
                  <th>Date</th>
				  <th>Transaction Id</th>
                </tr>
              </tfoot>
	<?php
	$table1="";
	$oid = "";
	$cid="";
	$p = "";
	$date= "";
	$tid="";
		$sql1 = "select * from orderplaced;";
	$result1 = mysqli_query($connection, $sql1);
	while($row = mysqli_fetch_array($result1)){
		$oid = $row['oid'];
		$cid = $row['cid'];
		$p= $row['amount'];
		$date= $row['orderdate'];
		$tid=$row['transid'];
		$table1 .= "<tr><td>".$oid." </td>
					<td> ".$cid." </td>
					<td> ".$p." </td>
					<td> ".$date." </td>
					<td> ".$tid." </td></tr>";
	}
	?>
			  <tbody>
			  <?php 
			  if($table1)
			  {
			  echo $table1; 
			  }
			  else
				  echo "No records to display";?>
            </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div></a>
	  <!-- /order table -->
	  <!-- Message Feed -->
	  	  <a name="message">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Notification </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>BOOKID</th>
                  <th>Message</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                 <th>BOOKID</th>
                  <th>Message</th>
                  <th>Date</th>
                </tr>
              </tfoot>
	<?php
	$table3 ="";
	$bid="";
	$mesg = "";
	$dated="";
		$sql = "select * from new_feed;";
	$result = mysqli_query($connection, $sql);
	while($row = mysqli_fetch_assoc($result)){
		$bid = $row['bookid'];
		$mesg = $row['message'];
		$dated= $row['feeddat'];
		$table3 .= "<tr><td>".$bid." </td>
					<td> ".$mesg." </td>
					<td> ".$dated." </td></tr>";
	}
	?>
			  <tbody>
			  <?php echo $table3; ?>
            </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div></a>
    </div></div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include "footer.php";?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
