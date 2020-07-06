<?php
include("dbconnect.php");

		$email = $_POST['email'];
		$password= $_POST['password'];

		$sql = "SELECT * FROM user WHERE email='".$email."' AND password = '".$password."'";
		$q = $conn->query($sql);
				if($q->num_rows==1)
				{
						$res = $q->fetch_assoc();
						$_SESSION['uid']=$res['id_pk'];
						$_SESSION['pass']=$res['password'];
						$_SESSION['name']=$res['f_name']." ".$res['l_name'] ;
						$_SESSION['user'] = 's';
						echo '<script type="text/javascript">window.location="../../dashboard.php"; </script>';
						
				}
				else
				{

					$sql = "SELECT * FROM b_user WHERE email='".$email."' AND password = '".$password."'";
					$q = $conn->query($sql);
					if($q->num_rows==1)
					{
						$res = $q->fetch_assoc();
						$_SESSION['uid']=$res['id_pk'];
						$_SESSION['pass']=$res['password'];
						$_SESSION['name']=$res['name'] ;
						$_SESSION['user']='b'
						echo '<script type="text/javascript">window.location="../../business/dashboard.php"; </script>';
						
					}
					else
					{

					
						echo '<script type="text/javascript">window.location="../../index.php"; </script>';
					
					}
					
				}
			

?>