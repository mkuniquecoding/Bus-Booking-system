<?php
	include('connection.php');
  	session_start();
  	$email=$_SESSION['uname'];
	if (!isset($email)) {
		header('location:user_login.php');
	}
	$date=$_POST['date'];
	$display="SELECT * FROM travels_data WHERE traveler_email='$email' && dates='$date'";
	$query=mysqli_query($con,$display);
	if (mysqli_num_rows($query) > 0) {
		while ($row=mysqli_fetch_assoc($query)) {
			$ticket_id=$row['ticket_id'];
			$destination=$row['destination'];
			$source=$row['source'];
			$dates=$row['dates'];
			$departure=$row['departure'];
			$arrival=$row['arrival'];
			$duration=$row['duration'];
			$departure_place=$row['departure_place'];
			$arrival_place=$row['arrival_place'];
			$seats=$row['seats'];
			$total_price=$row['total_price'];
			$bus_name=$row['bus_name'];
			$bus_type=$row['bus_type'];
			$traveler_email=$row['traveler_email'];

		}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>BUS YATRA</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>