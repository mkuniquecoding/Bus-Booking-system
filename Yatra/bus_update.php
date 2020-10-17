<?php
	include('connection.php');
	$bus_id=$_GET['bus_id'];
	$display="SELECT * FROM ticket_price where s_no='$bus_id'";
	$query=mysqli_query($con,$display);
	$num=mysqli_num_rows($query);
	if ($num==1) {
		while ($row=mysqli_fetch_assoc($query)) {
			$destination=$row['destination'];
			$source=$row['source'];
			$price=$row['price'];
			$bus_name=$row['bus_name'];
			$bus_no=$row['bus_no'];
			$bus_type=$row['bus_type'];
			$departure=$row['departure'];
			$duration=$row['duration'];
			$arrival=$row['arrival'];
			$departure_place=$row['departure_place'];
			$arrival_place=$row['arrival_place'];

		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bus Update</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
     <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet"href="adminstyle.css">
       <style type="text/css">
       	#cancle{
       		color: #fff;
       	}
       </style>
</head>
<body>

	<div class="container busregistration col-lg-8 m-auto" style="top: 40px;">
        <h3 class="p-2">Update Bus Details</h3>
          <form method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Bus Name</label>
            <input type="text" class="form-control" name="t1" id="bus_name" value="<?php echo $bus_name; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Bus Number</label>
            <input type="text" class="form-control" name="t2" id="bus_no" value="<?php echo $bus_no; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Destination</label>
          <select  name="t3" id="destination" required="" class="form-control">
              <option value=""><?php echo $destination; ?></option>
            <?php 
              $query="SELECT * FROM city order by city_name";
              $run=mysqli_query($con,$query);
              
                while ($row=mysqli_fetch_assoc($run)) {
            ?>

                <option><?php echo $row['city_name']; ?></option>
            <?php
                }
              
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Source</label>
          <select  name="t4" id="source" required="" class="form-control">
              <option value=""><?php echo $source; ?></option>
              <?php 
                $query="SELECT * FROM city order by city_name";
                $run=mysqli_query($con,$query);
                
                  while ($row=mysqli_fetch_assoc($run)) {
              ?>

                  <option><?php echo $row['city_name']; ?></option>
              <?php
                  }
                
              ?>
            </select>
        </div>
         <div class="form-group">
          <label for="inputAddress2">Departure Place</label>
          <input type="text" class="form-control" name="t5" id="departure_place" value="<?php echo $departure_place; ?>">
        </div>
         <div class="form-group">
          <label for="inputAddress2">Arrivel Place</label>
          <input type="text" class="form-control" name="t6" id="arrival_place" value="<?php echo $arrival_place; ?>">
        </div>
         <div class="form-group">
          <label for="inputAddress2">Duration</label>
          <input type="text" class="form-control" placeholder="00h 00m" name="t7" id="duration" value="<?php echo $duration; ?>">
        </div>
         <div class="form-group">
          <label for="inputAddress2">Bus Type</label>
          <input type="text" class="form-control" name="t8" id="bus_type" value="<?php echo $bus_type; ?>">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Arrivel</label>
            <input type="Time" class="form-control" name="t9" id="arrival" value="<?php echo $arrival; ?>">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Departure</label>
           <input type="time" class="form-control" name="t10" id="departure" value="<?php echo $departure; ?>">
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Price</label>
            <input type="text" class="form-control" name="t11" id="price" value="<?php echo $price; ?>">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" id="Bus-submit" name="update_bus">Update Bus</button>
        <button type="button" class="btn btn-danger"><a href="bus_report.php" id="cancle">Cancle</a></button>
         </form>  
      </div>

	<script src="https:code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https:cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https:code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https:ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https:maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>

<?php

if (isset($_POST['update_bus'])) {
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

      $update="UPDATE ticket_price set destination='$destination',source='$source',price='$price',bus_name='$bus_name',bus_no='$bus_number',bus_type='$bus_type',departure='$departure',duration='$duration',arrival='$arrival',departure_place='$departure_place',arrival_place='$arrival_place' WHERE s_no='$bus_id'";
      if (mysqli_query($con,$update)) {
      	echo "<script>alert('data successfully updated...!!');</script>";
      }
      else{
      	echo "<script>alert('something wrong..!!');</script>";
      }
}

?>