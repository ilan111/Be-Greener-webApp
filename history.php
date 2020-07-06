<?php 
if (isset($_GET['del'])) {
	$id=$_GET['del'];
	include 'assets/inc/dbconnect.php';
	mysqli_query($conn,"UPDATE questionare set active='1' where id_qn='$id'") or die(mysqli_error($conn));
	echo "<script>alert('Record Deleted.');
	location.href='history.php'</script>";
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
	<script type="text/javascript">
		function confirm_del() {
			return confirm('Delete This Entry?');
		}
	</script>
	<section id="contactus" class="contact_section wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
		<div class="container">
			<div class="section-header">
				<h3>History</h3>
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
				  <a class="active" href="history.php">History</a>
				  <a href="profile.php">Profile</a>
				  <a href="assets/inc/logout.php">Logout</a>
				</div>

				<!-- Page content -->
				<div class="content">

					<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Date</th>
                <th>Travel</th>
                <th>Hours on bike/Car</th>
                <th>Meal</th>
                <th>Spend</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php 
        	
        	$result = mysqli_query($conn,"SELECT * from questionare where active='0' and user='n' and id_pk='".$_SESSION['uid']."'");
        	while ($row=mysqli_fetch_array($result)) {
        		echo " <tr>";
                echo "<td>".$row['invdate']."</td>";
                echo "<td>";
                if ($row['q_foot'] == '1') {
                	echo ", Foot";
                }
                if ($row['q_cycle'] == '1') {
                	echo ", Cycle";
                }
                if ($row['q_bus'] == '1') {
                	echo ", Bus";
                }
                if ($row['q_bike'] == '1') {
                	echo ", Bike";
                }
                if ($row['q_car'] == '1') {
                	echo ", car";
                }
                if ($row['q_taxi'] == '1') {
                	echo ", taxi";
                }
                if ($row['q_train'] == '1') {
                	echo ", train";
                }
                if ($row['q_flight'] == '1') {
                	echo ", Flight";
                }
                echo "<td>".$row['q_2']." Hours</td>
                <td>".$row['q_3']."</td>
                <td>".$row['q_4']." $</td>
                <td>".$row['total']."/30</td>
                <td><a href='history.php?del=".$row['id_qn']."' onclick='return confirm_del();'><img src='assets/images/delete.png' title='Delete' height='20px' width='20px'></a></td>
            	</tr>";
        	}
        	 ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Date</th>
                <th>Travel</th>
                <th>Hours on bike/Car</th>
                <th>Meal</th>
                <th>Spend</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
<?php  include 'assets/inc/datatable.php';?>
				  
				</div>
				   
				</div>
			</div>
		</div>
	</section>	
	
	<?php include 'assets/inc/footer.php';?>