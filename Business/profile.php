<?php 
if (isset($_POST['update'])) {
	include 'assets/inc/dbconnect.php';
$name=$_POST["name"];
$industry=$_POST["industry"];
$email=$_POST["email"];
$p_name =$_POST['p_name'];
$contact=$_POST["contact"];
$date=date("Y-m-d H:i:s");
$sql = "SELECT email FROM b_user WHERE email = '$email' and id_pk !='".$_SESSION['uid']."'" ;
$select = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$row = mysqli_num_rows($select);
if($row>=1)
{
	echo "<script type='text/javascript'>
	alert('Email Is Already Registered')
	location.href='profile.php'; </script>";
	die();
}
else
{

$q="UPDATE `b_user` set `name`='$name', `industry`='$industry', `p_name`='$p_name', `email`='$email',`contact`='$contact',`updated_at`='$date' where id_pk='".$_SESSION['uid']."'";
$run=mysqli_query($conn,$q) or die(mysqi_error($conn));

if($run==TRUE)
{
	echo '<script type="text/javascript">
	window.alert("Your Account has been Updated sucessfully!")
	window.location="profile.php"; </script>';
	die();
}

}
}
if (isset($_POST["updatepassword"])) {
	$password = $_POST["password"];
	include 'assets/inc/dbconnect.php';
	$date=date("Y-m-d H:i:s");
	mysqli_query($conn,"update b_user set password='$password',updated_at='$date' where id_pk='".$_SESSION['uid']."'") or die(mysqli_error($conn));
	echo "<script>alert('Password Updated');
	location.href ='profile.php';</script>";
	die();
}
 ?>
<!DOCTYPE html>
	<style>
	/* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: absolute;
  height: auto;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #8BC34A;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: auto;
}

.highcharts-figure, .highcharts-data-table table {
    min-width: 310px; 
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}


/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

	</style>
	<?php include 'assets/inc/header.php';
		include'assets/inc/checklogin.php';
	?>
	
	<section id="contactus" class="contact_section wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
		<div class="container">
			<div class="section-header">
				<h3>Profile</h3>
				<!--ul class="contact_list">
					<li><i class="fa fa-globe"></i>Office#32, Line#21, City, State</li>
					<li><i class="fa fa-phone"></i><a href="tel:+923166136945">+9230012345678</a> </li>
					<li><i class="fa fa-envelope"></i><a href="mailt:info@better.com">info@betterbegreener.com</a></li>
				</ul-->
			</div>
			<div class="row">
				<div class="col-xs-12">
				   
				<!-- The sidebar -->
				<div class="sidebar">
				  <a href="dashboard.php">Dashboard</a>
				  <a href="questionare.php">Questionare</a>
				  <a href="history.php">History</a>
				  <a class="active" href="profile.php">Profile</a>
				  <a href="assets/inc/logout.php">Logout</a>
				</div>

				<!-- Page content -->
				<div class="content">
				  <?php
				  $result = mysqli_query($conn,"SELECT * from b_user where id_pk='".$_SESSION['uid']."'");
				  $row = mysqli_fetch_array($result);
				  ?>
				  <div class="row">
				  	<div class="col-lg-6 personal">
				  		<h4>Personal Info</h4>
				<ul>
					<li>
						Company Name
						<span class="pull-right label-primary"><?php echo $row['name']; ?></span>
					</li>
					<li>
						Industry
						<span class="pull-right label-danger"><?php echo $row['industry']; ?></span>
					</li>
					<li>
						Email
						<span class="pull-right label-info"><?php echo $row['email'] ?></span>
					</li>
					<li>
						Representative Name
						<span class="pull-right label-purple"><?php echo $row['p_name'] ?></span>
					</li>
					
					<li>
						contact
						<span class="pull-right label-success"><?php echo $row['contact'] ?></span>
					</li>

				  	</div>
				  	<div class="col-lg-6 update-div">
				  		<h4>Update Information</h4>
						<form action="" method="post" enctype="multipart/form-data">
					<div class="col-sm-3 label_upd">Company Name</div>
					<div class="col-sm-8">
						<input type="text" required name="name" class="form-control" value="<?php echo $row['name']; ?>"><br>
					</div>

					<div class="col-sm-3 label_upd">Industry</div>
					<div class="col-sm-8">
						<input type="text" required name="industry" class="form-control" value="<?php echo $row['industry']; ?>"><br>
					</div>

					<div class="col-sm-3 label_upd">Email</div>
					<div class="col-sm-8">
						<input type="email" required name="email" class="form-control" value="<?php echo $row['email']; ?>">
						<br>
					</div>

					<div class="col-sm-3 label_upd">Rep. Name</div>
					<div class="col-sm-8">
						<input type="text" name="p_name" class="form-control" value="<?php echo $row['p_name']; ?>">
						<br>
					</div>


					<div class="col-sm-3 label_upd">Contact</div>
					<div class="col-sm-8">
						<input type="text" name="contact" class="form-control" value="<?php echo $row['contact']; ?>">
						<br>
					</div>


					<div class="col-sm-3"></div>
					<div class="col-sm-8">
						<input type="submit" class="btn btn-primary" name="update" value="Update">
						<br><br>
					</div>
					
					</form>
				  	</div>
</div>

				 <div class="row" id='password-row' style="border:1px solid #dcdcdc;margin:20px 10px 10px 10px;padding: 15px 25px;" >
			<h4>Update Password</h4>
			<div style="padding: 20px 60px 20px 60px;text-align:right">
				<form action="" method="post" id="passwordform">
					<strong>New Password  : </strong><input type="password" name="password" class="form-control inline"><br><br>
					<strong>Confirm New Password : </strong><input type="password" name="confirmpassword" class="form-control inline"><br><br>
					<input type="submit" name="updatepassword" class="btn btn-primary" value="Update"><br>
					<div class="alert-danger" id="alert-password">
						Passwords Don't Match!
					</div>
					<div class="alert-success" id="success-password">
						Passowrd Updated Successfully!
					</div>
				</form>
			</div>
		</div>


				  

				</div>
				
				   
				</div>
			</div>
		</div>
	</section>	
	
	<?php include 'assets/inc/footer.php';?>

	<script>
	$(document).ready(function() {
	$("#passwordform").submit(function(e) {
		if ($("[name='password']").val() != $("[name='confirmpassword']").val()) {
			e.preventDefault();
			$("#alert-password").slideDown(500).delay(2000).slideUp(500);
			$("[name='confirmpassword']").focus();
		}
	});	
	});
</script>