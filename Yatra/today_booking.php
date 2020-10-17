<?php
  include "connection.php";
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
      <style type="text/css">
        .panel-body table tr th{
          background: #000;
          color: #fff;
        }
      </style>
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
      <li>
        <a href="busdetails.php"><i class="fa fa-plug"></i>Add Bus</a>
      </li>
       <li>
        <a href="bus_report.php"><i class="fa fa-plug"></i>Bus Report</a>
      </li>
      <li class="active">
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

            <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                  <div class="panel-heading">
                      <h3 class="p-2">Todays Booking</h3>
                    </div>
                    <div class="panel-body">
                      <table class="table table-hover">
                          <tr>
                                <th>S.No</th>
                                <th>Ticket Id</th>
                                <th>Destination</th>
                                <th>Source</th>
                                <th>Bus Name</th>
                                <th>Bus Type</th>
                                 <th>Departure</th>
                                 <th>Arrival</th>
                                 <th>Seat No.</th>
                                 <th>Date</th>
                                 <th>Paid</th>
                                 
                                
                            </tr>
                            <?php
                                      $date=date("y/m/d");
                                      $se="SELECT * from travels_data where dates='$date'";
                                      $se1=mysqli_query($con,$se);
                                      $num=1;
                                      while($se2=mysqli_fetch_assoc($se1))
                                      {
                 
                             ?>
                                      <tr>
                                            <td><?php echo $num; ?></td>
                                            <td><?php echo $se2['ticket_id']; ?></td>
                                            <td><?php echo $se2['destination']; ?></td>
                                            <td><?php echo $se2['source']; ?></td>
                                            <td><?php echo $se2['bus_name']; ?></td>
                                            <td><?php echo $se2['bus_type']; ?></td>
                                            <td><?php echo $se2['departure']; ?></td>
                                            <td><?php echo $se2['arrival']; ?></td>
                                            <td><?php echo $se2['seats']; ?></td>
                                            <td><?php echo $date; ?></td>
                                            <td><?php echo $se2['total_price']; ?></td>
                                            
                                        </tr>
                                    <?php
                                      $num++;
                                         }
                                     ?>
                        </table>
                    </div>
                </div>
            </div>
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
     </script>
   
     </body>
</html>
