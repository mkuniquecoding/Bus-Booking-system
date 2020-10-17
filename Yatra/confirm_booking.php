<?php
session_start();
$email=$_SESSION['uname'];
	include('connection.php');
	$ticket_id=uniqid();
	$cost=$_POST['ticket_cost'];
	$seats=$_POST['seats'];
	$destination=$_POST['destination'];
	$source=$_POST['source'];
	$departure=$_POST['departure'];
	$arrival=$_POST['arrival'];
	$bus_name=$_POST['bus_name'];
	$bus_type=$_POST['bus_type'];
	$duration=$_POST['duration'];
	$dates=$_POST['dates'];
	$departure_place=$_POST['departure_place'];
	$arrival_place=$_POST['arrival_place'];
	$check="SELECT * FROM travels_data WHERE traveler_email='$email' && seats='$seats' && bus_name='$bus_name' && destination='$destination' && source='$source'";
	$query=mysqli_query($con,$check);
	$num=mysqli_num_rows($query);
	if ($num==1) {
		echo "Sorry seats not available";
	}
	else{

	$insert="INSERT INTO travels_data(ticket_id,destination,source,dates,departure,arrival,duration,
							departure_place,arrival_place,seats,total_price,bus_name,bus_type,traveler_email) 
		   values('$ticket_id','$destination','$source','$dates','$departure','$arrival','$duration','$departure_place',
		'$arrival_place','$seats','$cost','$bus_name','$bus_type','$email')";
	if(mysqli_query($con,$insert)){
		echo "successfuly Bus Booking";
	}
}
?>