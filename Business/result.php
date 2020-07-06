
<!DOCTYPE html>
	<style>
	.switch {
  position: relative;
  display: inline-block;
}
.switch-input {
  display: none;
}
.switch-label {
  display: block;
  width: 48px;
  height: 20px;
  clip: rect(0 0 0 0);
  color: transparent;
  user-select: none;
}
.switch-label::before,
.switch-label::after {
  content: "";
  display: block;
  position: absolute;
  cursor: pointer;
}
.switch-label::before {
  width: 100%;
  height: 100%;
  background-color: #dedede;
  border-radius: 9999em;
  -webkit-transition: background-color 0.25s ease;
  transition: background-color 0.25s ease;
}
.switch-label::after {
  top: 0;
  left: 0;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-color: #fff;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.45);
  -webkit-transition: left 0.25s ease;
  transition: left 0.25s ease;
}
.switch-input:checked + .switch-label::before {
  background-color: #8BC34A;
}
.switch-input:checked + .switch-label::after {
  left: 24px;
}

	
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
				<h3>Results</h3>
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
				  <a class="active" href="questionare.php">Questionare</a>
				  <a href="history.php">History</a>
				  <a href="profile.php">Profile</a>
				  <a href="assets/inc/logout.php">Logout</a>
				</div>

				<!-- Page content -->
				<div class="content">
				  <section>
		<div class="container">
			<div class="row">
				<div class="col-xs-10 col-md-10">
					<div class="box wow fadeIn" data-wow-delay="0.5s">
						<ul class="ul-timeline">
							<?php include 'assets/inc/chartresult.php';
				  			include 'assets/js/chartresult.js'; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
				</div>
				   
				</div>
			</div>
		</div>
	</section>	
	
	<?php include 'assets/inc/footer.php';?>