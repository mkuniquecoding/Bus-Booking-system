<?php
	include('connection.php');
  session_start();
  $email=$_SESSION['uname'];
  if (!isset($email)) {
    header('location:user_login.php');
  }
?>

<!doctype html>
<html lang="en">
  <head>
       <title>Bus Yatra</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
      .panel-body table tr th{
        background: #000;
        color: #fff;
      }
    </style>

 
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="index.php">BUS YATRA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto p-2">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ticket_download.php">Ticket</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_login.php">Login</a>
      </li>
    </ul>
  </div>
</nav>

            <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                  <div class="panel-heading">
                      <h3 class="p-2 text-center bg-dark" style="color: #fff;">Download Ticket</h3>
                    </div>
                    <div class="panel-body">
                      <div class="table responsive">
                      <table class="table table-hover">
                          <tr>
                                <th>S.No</th>
                                <th>Ticket Id</th>
                                <th>Destination</th>
                                <th>Source</th>
                                <th>Bus Name</th>
                                 <th>Seat No.</th>
                                 <th>Date</th>
                                 <th>Paid</th>
                                  <th>Download</th>
                                 
                                
                            </tr>
                            <?php
                                      $se="SELECT * from travels_data where traveler_email='$email'";
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
                                            <td><?php echo $se2['seats']; ?></td>
                                            <td><?php echo $se2['dates']; ?></td>
                                            <td><?php echo $se2['total_price']; ?></td>
                                            <td><a href="confirm_ticket_download.php?ticket_id=<?php  echo $se2['ticket_id']; ?>" class="btn btn-primary">Download</a></td>
                                            
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

    <!------------Footer------------------>
  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-lg-4 col-sm-12 col-12">
          <div class="footer-area">
            <h5>BUS YATRA</h5>
            <p>Online Bus Ticket Reservation System is a Web based application that works within a centralized network. This project presents a review on the software program "Online Bus Ticket Reservation System" as should be used in a bus transportation system, a facility which is used to reserve seats, cancellation of reservation and different types of route enquiries used on securing quick reservations.</p>
          </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-12 col-12">
          <div class="footer-area">
            <h5>ABOUT BUS YATRA</h5>
            <p><a href="#">About Us</a></p>
            <p><a href="#">Contact Us</a></p>
          </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-12 col-12">
          <div class="footer-area">
            <h5>PRODUCT</h5>
            <p><a href="#">API</a></p>
            <p><a href="#">Features</a></p>
          </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-12 col-12">
          <div class="footer-area">
            <h5>LEGAL</h5>
            <p><a href="#">Term &amp; Conditions</a></p>
            <p><a href="#">Copy Right</a></p>
            <p><a href="logout.php">Logout</a></p>
          </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-12 col-12">
          <div class="footer-area">
            <h5>CONTACT US</h5>
            <p>contact@busyatra.com</p>
            <p>+91 790381496</p>
            
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!------------End Footer-------------->
  <div id="copyright">
    <p>Copyright <i class="fa fa-copyright"></i> 2020 Bus Yatra. All Rights reserved.</p>
  </div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>

