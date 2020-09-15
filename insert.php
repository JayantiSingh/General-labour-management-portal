<?php
	//error_reporting(0);
	session_start();
	require ('connection.php');
	if(isset($_POST['login'])){
		$uname = mysqli_real_escape_string($con, htmlspecialchars($_POST['username']));
		$pswd = mysqli_real_escape_string($con, htmlspecialchars($_POST['password']));
    $query = "SELECT aadhar_number,password FROM `insert_info` WHERE `aadhar_number`='$uname' AND `password`='$pswd' ";
    $sql = mysqli_query($con, $query) or die(mysqli_error($con));
		if(mysqli_num_rows($sql)!=0)
		{
			$_SESSION['username_user']=$uname;
      		echo "Logged_In";
			header("location: newregistration.php");
		}
		else{
			echo "Login Error";
		}
    }
?>

