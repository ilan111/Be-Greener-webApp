<?php
include("dbconnect.php");

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Better Be Greener</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome CSS -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  
  <!-- Owl Carousel CSS -->
  <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
  
  <!-- Animate CSS -->
  <link href="assets/css/animate.css" rel="stylesheet">
  
  <!--tel-input CSS -->
  <link href="assets/css/tel-input/intlTelInput.min.css" rel="stylesheet">
  
   <!--Custom CSS -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head> 
<body>
<!--header top-->
<!--div class="top_sticky">
	<div class="">
		<div class="row">
			<div class="col-12 col-lg-8">
				<p class="offer">Its Limited Time Offer <strong data-toggle="modal" data-target="#sign_up_modal">Sign Up</strong> Now and Get <strong>30% Discount </strong></p>
			</div>
			<div class="col-12 col-lg-4 hidden-xs">
				<p class="btns">
					<a href="#" class='btnSticky'><i class="fa fa-shopping-cart"></i> Sign up Now</a>
				</p>
			</div>
		</div>
	</div>
</div-->

<span id="translate" style="top: 50%;position: fixed;color: #fff;background: #313131;font-size: 21px;z-index: 99;width: 40px;height: 40px;line-height: 40px;text-align: center;border-radius: 0px 4px 4px 0px;" class="fa fa-language"></span>
<span class="hidden" id="google_translate_element" style="top: 55%;position: fixed;color: #fff;border-radius: 0px 4px 4px 0px;background: #313131;z-index: 99;"></span>
<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 hidden-xs">
				<p class="left-bar">
					<a href="mailto:info@hiddenlogics.com"><i class="fa fa-envelope-o"></i> info@betterbegreener.com</a>
					<a href="tel:+923166136945"><i class="fa fa-phone"></i> +9230012345678</a>
				</p>
			</div>
			<?php
			if(!isset($_SESSION["name"]))
			{
			?>
			<div class="col-xs-12 col-md-6">
								<p class="right-bar">
					<a data-toggle="modal" data-target="#sign_up_modal"> Sign Up</a>
					<a data-toggle="modal" data-target="#sign_up_business_modal"></i> Sign Up As Business</a>
					<a data-toggle="modal" data-target="#sign_in_modal" class='active'><i class="fa fa-sign-in"></i> Sign In</a>
				</p>
			</div>

			<?php
				}
				else{
					echo '<div class="col-xs-12 col-md-6">
								<p class="right-bar">
					<a href="dashboard.php"> Dashboard</a>
					</p>
			</div>';
				}
			?>
		</div>
	</div>
</div><!--main header-->
<div class="header">
		<div class="container">
			<nav class="navbar navbar-default custom_nav">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				  </button>
				  <a class="navbar-brand text hidden" href="index.html">Better Be Greener</a>
				  <a class="navbar-brand img " href="index.php" style="color:white;margin-top:20px;">Better Be Greener</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="../index.php"> Home </a></li>
					<li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
					  <i class="fa fa-"></i> Ranking <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<div class="row">
						    
						<div class="col-xs-12 col-md-4 wrap" >
							<h4> Personal Zone </h4>
							<ul>
								<li><a class="dropdown-item" href="#">CO2 Emission Ranking</a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-md-4">
							<h4> Business Zone </h4>
							<ul>
								<li><a class="dropdown-item" href="../ranking.php">CO2 Emission Ranking</a></li>
						    </ul>
						</div>
					  </div>
					  </ul>
					</li>
					
					<li><a href="../contact-us.php">Contact Us</a></li>
					<li><a href="#aboutUs" class="scroll">About Us</a></li>
					<li><a href="questionare.php">Questionaire</a></li>
				  </ul>
				</div>
			</nav>
		</div>
	</div>