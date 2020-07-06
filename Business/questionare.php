
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
				<h3>Questionare</h3>
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
			<form action="assets/inc/addq.php" method="post">
				<input type="hidden" name="id" value="<?php echo $_SESSION['uid']; ?>" >
							<li>
								<h4>1. Which ways did you choose to transport yourself today?</h4>
								<p>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="checkbox" name="foot" aria-label="...">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="By Foot" disabled>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="checkbox" name="cycle" aria-label="...">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="Bicycle" disabled>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="checkbox" name="bus" aria-label="...">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="Bus" disabled>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="checkbox" name="bike" aria-label="...">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="Bike" disabled>
										</div>
									</div><br><br>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="checkbox" name="car" aria-label="...">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="car" disabled>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="checkbox" name="taxi" aria-label="...">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="Taxi" disabled>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="checkbox" name="train" aria-label="...">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="Train" disabled>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="checkbox" name="flight" aria-label="...">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="Flight" disabled>
										</div>
									</div>
								</p>
									  <!--div class="switch">
										<input id="switch-1" type="checkbox" class="switch-input" />
										<label for="switch-1" class="switch-label">By Foot</label>
									  </div-->
								
							</li><br>
							<li>
								<h4>2. How many hours did you spend in your car or on your motorbike for personal use including commuting today?</h4>
								<p>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="radio" required="" name="hour" aria-label="..." value="0">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="0 Hour" disabled>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="radio" required="" name="hour" aria-label="..." value="2-5">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="2-5 Hours" disabled>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="radio" required="" name="hour" aria-label="..." value="5-15">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="5-15 Hours" disabled>
										</div>
									</div>
								</p>
							</li>
							<div class="clearfix"></div><br>
							<li>
								<h4>3. Which type of meals was your main meal today?</h4>
								<p>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="radio" required="" name="meal" aria-label="..." value="vegan">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="Vegan" disabled>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="radio" required="" name="meal" aria-label="..." value="Vegetarian">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="Vegetarian" disabled>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="radio" required="" name="meal" aria-label="..." value="dairy">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="Dairy" disabled>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="radio" required="" name="meal" aria-label="..." value="fleshy">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="Fleshy" disabled>
										</div>
									</div>
								</p>
							</li>
							<div class="clearfix"></div><br>
							<li>
								<h4>4. How much did you spend on food from restaurants or takeaways today?</h4>
								<p>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="radio" required="" name="spend" aria-label="..." value="0">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="0$" disabled>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="radio" required="" name="spend" aria-label="..." value="1-10">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="1-10$" disabled>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="radio" required="" name="spend" aria-label="..." value="10-50">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="10-50$" disabled>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="input-group">
											<span class="input-group-addon">
												<input type="radio" name="spend" aria-label="..." value="more than 50">
											</span>
												<input type="text" class="form-control" aria-label="by foot" value="More Than 50$" disabled>
										</div>
									</div>
									<div class="clearfix"></div><br>
								<li>
									<div class="col-lg-10">
										
									</div>
									<div class="col-lg-2">
										<div class="input-group">
											
											<input type="submit" name="qst" class="btn btn-success" value="submit">
										</div>
									</div>
								</li>
								</p>
							</li>
						</ul>
						
								</form>				
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