<?php
	include('connection.php');
	session_start();
	$email=$_POST['login_email'];
	$pass=$_POST['login_pass'];
	$query="SELECT * FROM user_register WHERE email='$email' && password='$pass'";
	$result=mysqli_query($con,$query);
	$row=mysqli_num_rows($result);
	if ($row>0) {
		$_SESSION['uname']=$email;
		echo "success";
	}
	else{
		echo "email or password incorrect....!!";
	}
?>