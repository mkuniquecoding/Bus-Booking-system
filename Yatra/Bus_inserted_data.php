<?php
	include('connection.php');
    
	  $bus_name=ucwords($_POST['t1']);
	  $bus_number=strtoupper($_POST['t2']);
	  $destination=$_POST['t3'];
	  $source=$_POST['t4'];
	  $departure_place=ucwords($_POST['t5']);
	  $arrival_place=ucwords($_POST['t6']);
	  $duration=$_POST['t7'];
	  $bus_type=$_POST['t8'];
      $arrival=$_POST['t9'];
      $departure=$_POST['t10'];
      $price=$_POST['t11'];

      $check="SELECT * FROM ticket_price WHERE bus_no='$bus_number' && source='$source' && destination='$destination'";
      $query=mysqli_query($con,$check);
      if (mysqli_num_rows($query)==1) {
      	echo "Alerdy data Inserted...!!";
      }
      else{
	     $insert="INSERT INTO ticket_price
	     	  (destination,source,price,bus_name,bus_type,bus_no,departure,duration,arrival,departure_place,arrival_place) 
	     		values('$destination','$source','$price','$bus_name','$bus_type','$bus_number','$departure','$duration','$arrival','$departure_place','$arrival_place')";
		   if(mysqli_query($con,$insert)){
		    echo "data Inserted...!!";
		   }
		   else{
		    echo "something wrong..!!";
		   }
		}
				 
				
	?>