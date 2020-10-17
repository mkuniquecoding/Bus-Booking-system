<?php
	$con=mysqli_connect('localhost','root','');
	if (!$con) {
		echo "connection failed.....!!";
	}
	else{
		mysqli_select_db($con,'bus_ticketing');
	}
?>