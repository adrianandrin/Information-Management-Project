<?php
	session_start();
	$con = mysqli_connect("localhost","root","","musika0.1") or die(mysqli_connect_error());
	if(isset($_POST['submit'])){
		if(!empty($_POST['user']) && !empty($_POST['pass'])){
			$user = $_POST['user'];
			$pass = $_POST['pass'];

			$sql="select count(*) from customer where username= '$user'";
            $res = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($res);

			if($row[0]==1){
				$sql="SELECT count(*) FROM customer WHERE username= '$user' AND pass = '$pass'";
				$res = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($res);
				if($row[0] == 1){
					$sql="SELECT customerID FROM customer WHERE username='$user'";
					$res = mysqli_query($con,$sql);
					$row = mysqli_fetch_array($res);
					$_SESSION['id'] =  $row['customerID'];
					header("Location: Home.php");
				}
				else{
					header("Location: Login.php?login=incorrectpass&user=$user");
				}
			}
			else{
                header("Location: Login.php?login=notregistered");
			}
		}
		else{
			header("Location: Login.php?login=empty");
		}
	}

?>