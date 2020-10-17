<?php
  include('connection.php');
  session_start();
  $admin_name=$_SESSION['aname'];
   if (!isset($admin_name)) {
     header('location:admin_login.php');
   }
?>

<html>
     <head>
     	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
     <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet"href="adminstyle.css">
     </head>
     <body>
     	  <div id="wrapper">

  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <h2>Bus Yatra</h2>
    </div>
    <ul class="sidebar-nav">
      <li>
        <a href="admin_index.php"><i class="fa fa-home"></i>Home</a>
      </li>
      <li class="active">
        <a href="busdetails.php"><i class="fa fa-plug"></i>Add Bus</a>
      </li>
       <li>
        <a href="bus_report.php"><i class="fa fa-plug"></i>Bus Report</a>
      </li>
      <li>
        <a href="today_booking.php"><i class="fa fa-user"></i>Todays Booking</a>
      </li>
       <li>
        <a href="awaited_booking.php"><i class="fa fa-user"></i>Awaitted Booking</a>
      </li>
       <li>
        <a href="total_booking.php"><i class="fa fa-user"></i>Total Booking</a>
      </li>
       <li>
        <a href="logout.php"><i class="fa fa-user"></i>Logout</a>
      </li>
    </ul>
  </aside>

  <div id="navbar-wrapper">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
        </div>
      </div>
    </nav>
  </div>
          <div class="container busregistration col-lg-8 m-auto" style="top: 40px;">
        <h3 class="p-2">Fill Bus Details</h3>
          <form method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Bus Name</label>
            <input type="text" class="form-control" name="t1" id="bus_name">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Bus Number</label>
            <input type="text" class="form-control" name="t2" id="bus_no">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Destination</label>
          <select  name="t3" id="destination" required="" class="form-control">
              <option></option>
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
              <option></option>
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
          <input type="text" class="form-control" name="t5" id="departure_place">
        </div>
         <div class="form-group">
          <label for="inputAddress2">Arrivel Place</label>
          <input type="text" class="form-control" name="t6" id="arrival_place">
        </div>
         <div class="form-group">
          <label for="inputAddress2">Duration</label>
          <input type="text" class="form-control" name="t7" id="duration">
        </div>
         <div class="form-group">
          <label for="inputAddress2">Bus Type</label>
          <input type="text" class="form-control" name="t8" id="bus_type">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Arrivel</label>
            <input type="Time" class="form-control" name="t9" id="arrival">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Departure</label>
           <input type="time" class="form-control" name="t10" id="departure">
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Price</label>
            <input type="text" class="form-control" name="t11" id="price">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" id="Bus-submit" name="submit">Add Bus</button>
         </form>  
      </div>

 
  </div>

     <script src="https:code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https:cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https:code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https:ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https:maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


     <script type="text/javascript">
      //==-------Menu Bar=======--//
     	const $button  = document.querySelector('#sidebar-toggle');
          const $wrapper = document.querySelector('#wrapper');

          $button.addEventListener('click', (e) => {
            e.preventDefault();
            $wrapper.classList.toggle('toggled');
          });

         // --=======End Menu Bar======--//

        $(document).ready(function(){
            $('#Bus-submit').click(function(e){
              e.preventDefault();
              var bus_name = $('#bus_name').val();
              var destination = $('#destination').val();
              var source = $('#source').val();
              var departure_place = $('#departure_place').val();
              var arrival_place = $('#arrival_place').val();
              var duration = $('#duration').val();
              var bus_type = $('#bus_type').val();
              var arrival = $('#arrival').val();
              var departure = $('#departure').val();
              var price = $('#price').val();
              if (bus_name=="" || destination=="" || source=="" || departure_place=="" || arrival_place=="" || duration=="" || bus_type=="" || arrival=="" || departure=="" || price=="") {
                alert("All field required...!!");
                return false;
              }
              else{
                $.ajax({
                  url:'Bus_inserted_data.php',
                  method:'post',
                  data:$('form').serialize(),
                  dataType:"text",
                  success: function(strMessage){
                    alert(strMessage);
                  }

                });
              }

              
            });
          });  
     </script>
   
     </body>
</html>


