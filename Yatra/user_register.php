<?php
	include('connection.php');
	$user=ucwords($_POST['username']);
	$email=$_POST['email'];
	$pass=$_POST['pass'];

	$check="SELECT * FROM user_register WHERE email='$email'";
	$result=mysqli_query($con,$check);
	if (mysqli_num_rows($result)==1) {
		echo "Username Already inserted";
	}
	else{
		$insert="INSERT INTO user_register(username,email,password) VALUES('$user','$email','$pass')";
		if(mysqli_query($con,$insert)){
			echo "success registration";
		}
		else{
			echo "something wrong...!!";
		}

	}

?>