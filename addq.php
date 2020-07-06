<?php 
if (isset($_POST['qst'])) {
$invdate = date('Y-m-d');
$foot=0;
$cycle=0;
$bus=0;
$bike=0;
$car=0;
$taxi=0;
$train=0;
$flight=0;
	if (isset($_POST['foot'])) {
		$foot=1;
	}
	if (isset($_POST['cycle'])) {
		$cycle=1;
	}
	if (isset($_POST['bus'])) {
		$bus=1;
	}
	if (isset($_POST['bike'])) {
		$bike=1;
	}
	if (isset($_POST['car'])) {
		$car=1;
	}
	if (isset($_POST['taxi'])) {
		$taxi=1;
	}
	if (isset($_POST['train'])) {
		$train=1;
	}
	if (isset($_POST['flight'])) {
		$flight=1;
	}
	$hour = $_POST['hour'];
	$meal = $_POST['meal'];
	$spend = $_POST['spend'];
	$id = $_POST['id'];
	include 'assets/inc/dbconnect.php';
	mysqli_query($conn,"INSERT into questionare(id_pk,invdate,q_foot,q_cycle,q_bus,q_bike,q_car,q_taxi,q_train,q_flight,q_2,q_3,q_4) values('$id','$invdate','$foot','$cycle','$bus','$bike','$car','$taxi','$train','$flight','$hour','$meal','$spend')") or die(mysqli_error($conn));
	echo "<script>alert('Questionare Submitted Successfully.');
	location.href='questionare.php'</script>";

}

?>