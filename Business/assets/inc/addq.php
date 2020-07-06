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
$total=0;
	if (isset($_POST['foot'])) {
		$foot=1;
		$total+=1;
	}
	if (isset($_POST['cycle'])) {
		$cycle=1;
		$total+=1;
	}
	if (isset($_POST['bus'])) {
		$bus=1;
		$total+=1;
	}
	if (isset($_POST['bike'])) {
		$bike=1;
		$total+=1;
	}
	if (isset($_POST['car'])) {
		$car=1;
		$total+=1;
	}
	if (isset($_POST['taxi'])) {
		$taxi=1;
		$total+=1;
	}
	if (isset($_POST['train'])) {
		$train=1;
		$total+=1;
	}
	if (isset($_POST['flight'])) {
		$flight=1;
		$total+=1;
	}
	$hour = $_POST['hour'];
	if ($hour =='0') {
		$total+=0;
	}
	elseif ($hour == '2-5') {
		$total+=5;
	}
	else{
		$total+=10;
	}
	$meal = $_POST['meal'];
	if ($meal =='vegan') {
		$total+=2;
	}
	elseif ($meal== 'Vegetarian') {
		$total+=4;
	}
	elseif ($meal == 'dairy') {
		$total+=6;
	}
	else{
		$total+=8;
	}
	$spend = $_POST['spend'];
	if ($spend =='0') {
		$total+=0;
	}
	elseif ($spend== '1-10') {
		$total+=4;
	}
	elseif ($spend == '10-15') {
		$total+=6;
	}
	else{
		$total+=8;
	}
	$id = $_POST['id'];
	include 'dbconnect.php';
	mysqli_query($conn,"INSERT into questionare(id_pk,invdate,q_foot,q_cycle,q_bus,q_bike,q_car,q_taxi,q_train,q_flight,q_2,q_3,q_4,user,total) values('$id','$invdate','$foot','$cycle','$bus','$bike','$car','$taxi','$train','$flight','$hour','$meal','$spend','b','$total')") or die(mysqli_error($conn));
	echo "<script>alert('Questionare Submitted Successfully.');
	location.href='../../result.php'</script>";

}
