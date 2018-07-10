<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FuNBoOkS</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template--> 
    <link href="css/shop-homepage.css" rel="stylesheet"> 

  </head>

  <body>
	<?php $_GET['msg']=""; ?>

    <!--Navigation-->
	<?php
		include 'nav1.php';
	?>
	<!-- /.navbigator -->
   <!-- Page Content -->
	<div class="container">
	<div id="bbGWContainer">
	<div id="bbGWCopyContainer">
	<p style="color:#fff;font-family: Lato,sans-serif;font-size: 16px;text-align: center;"> Welcome To FN.com!</p>
	<h1 style="font-family: Poynter,Georgia,serif;line-height: 1em;text-align: center;color: #fff;font-weight: 400;">A World of Discovery Awaits You</h1>
	</div>
	<div id="bbGWImgContainer">
	<div style="width: 150px;
height: 150px;
margin: 15px 6px;
float: right;
background: red;">
	<img src="img\i1.png">
	</div>
	<div style="width: 150px;
height: 150px;
margin: 15px 6px;
float: right;
background: red;">
	<img src="img\i2.png">
	</div>
	<div style="width: 150px;
height: 150px;
margin: 15px 6px;
float: right;
background: red;">
	<img src="img\i3.png">
	</div>
	</div>
	</div>
	</div>
   <!-- Slider-->
	<?php
		include 'imageslider.php';
	?>
	<!-- /.slider -->
	<div class="row" >
	<div align="left" style="margin-left:5%;">
	<a href="product.php"><img src="img\books.png" alt="nn"></a>
	<div>
	<strong style="color:red;">PRODUCT</strong>
	</div>
	</div>
	<div align="center" style="margin-left:25%;">
	<a href="clogin.php"><img src="img\seller.png" alt="nm"></a>
	<div>
	<strong style="color:red;">LOGIN</strong>
	</div>
	</div>
	<div align="right" style="margin-left:25%;margin-top:2%;">
	<a href="contact.php"><img src="img\contact.png" alt="nb"></a>
	<div>
	<strong style="color:red;text-align:center;">CONTACT US</strong>
	</div>
	</div>
	</div>
</div>
<!-- /page container -->
<hr class="bg-primary" style="border-color: grey;border-width: 2px;width: 98%;">
	<div class="containerm">
	<img src="img\i4.jpg" style="width:100%">
	<div class="hero-8">
	<span class="header1">Fall's best & Brightest</span>
	<p style="margin: 1rem 0 0;color: #21282d;font-size: 1rem;">So many great new books,so little time.Snapp them up today</p>
	</div></div>
	<div class="containerm">
	<img src="img\i5.jpg" style="width:100%">
	<div class="hero-8">
	<span class="header1">50% Off The Criterion Collection*</span>
	</div>
	</div>
	<hr class="bg-primary" style="border-color: grey;border-width: 2px;width: 98%;">
	<!--<div class="container">
	<div style="background-color:orange;color:white;padding:60px; background-size:100% 60%;position:relative;">
	<h2 style="color:white;">Gain Knowledge</h2><span><img style="position:absolute;right:5%;top:5%;" align="right" src="img\science.png" width="300" height="300"></span>
	<p><i>Science Fiction & Facts <br>New Invention <br>New Technologies and much more<br>With book on</i><h4 style="color:#ff9f00;">FunBooks.com</h4></p>
	</div>
	<div style="background-color:grey;padding:15px;padding-left:60px;background-size:100% 60%;position:relative;">
	<div style="position:absolute;right:5%;top:8%;max-width:500px;top:20%;"><h2 style="color:white;">Gain Knowledge</h4>
	<p style=""><i>Science Fiction & Facts <br>New Invention <br>New Technologies and much more<br>With book on</i><h4 style="color:#ff9f00;">FunBooks.com</h4></p></div>
	<img style="" src="img\potter.jpg" width="300" height="300"></span>
	</div>
	<br>
	</div>
	<!--<div style="background-color:#c0f5fb;width:98%;padding-left:1%;">
	<img align="left" src="img\potter.jpg">
	<h4 style="color:grey;">Gain Knowledge</h4>
	<p style="color:#b44343;"><i>Science Fiction & Facts <br>New Invention <br>New Technologies and much more<br>With book on</i><h4 style="color:#ff9f00;">FunBooks.com</h4></p>
	</div>-->

    <!-- Footer -->
    <?php
		include 'footer1.php';
	?>
	<!-- /Footer -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script> 
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
