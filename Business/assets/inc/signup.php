<?php
include 'dbconnect.php';
$name=$_POST["name"];
$industry=$_POST["industry"];
$email=$_POST["email"];
$p_name = $_POST['p_name'];
$contact = $_POST['contact'];
$pass=$_POST["pass"];
$date=date("Y-m-d H:i:s");


$sql = "SELECT email FROM user WHERE email = '$email'" ;
$select = mysqli_query($conn, $sql);
$row = mysqli_num_rows($select);
if($row>=1)
{
	echo '<script type="text/javascript">
	alert("Email Registered as User!");
	window.location="../../../index.php"; </script>';
	die();
}

$sql = "SELECT email FROM b_user WHERE email = '$email'" ;
$select = mysqli_query($conn, $sql);
$row = mysqli_num_rows($select);
if($row>=1)
{
	echo '<script type="text/javascript">
	alert("Email Already Registered as Business!");
	window.location="../../../index.php"; </script>';
	die();
}

$q="INSERT INTO `b_user` (`id_pk`, `name`, `industry`,`p_name`,`contact`, `email`, `password`, `created_at`, `updated_at`) VALUES (NULL, '$name', '$industry','$p_name','$contact', '$email', '$pass', '$date', '$date');";

$run=mysqli_query($conn,$q) or die(mysqli_error($conn));
$id2 = mysqli_insert_id($conn);
	$col_1 = mt_rand(100,300);
	$col_2 = mt_rand(100,300);
	$col_3 = mt_rand(100,300);
	$col_4 = mt_rand(100,300);
	$col_5 = mt_rand(100,300);
	mysqli_query($conn,"insert into chart values('$id2','$col_1','$col_2','$col_3','$col_4','$col_5')") or die(mysqli_error($conn));
if($run==TRUE)
{
	echo '<script type="text/javascript">
	window.alert("Your Account has been created sucessfully!")
	window.location="../../../index.php"; </script>';
}

 ?>
