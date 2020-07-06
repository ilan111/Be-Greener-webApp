<?php
session_start();
	unset($_SESSION['uid']);
	unset($_SESSION['name']);
	unset($_SESSION['pass']);
	
	echo '<script type="text/javascript">
	window.alert("Logout Successful!");
	window.location="../../../index.php"; </script>';
?>