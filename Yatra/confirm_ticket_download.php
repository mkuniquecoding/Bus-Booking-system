<?php
	include('connection.php');
  session_start();
  $email=$_SESSION['uname'];
  if (!isset($email)) {
    header('location:user_login.php');
  }
  $ticket_id=$_GET['ticket_id'];

  $display="SELECT * FROM travels_data WHERE ticket_id='$ticket_id'";
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
      span{
        color: rgba(0,0,0,0.5);
      }
      #ticket{
        background: #ffdd99;
        margin: 30px 0;
        border: 5px solid rgba(248, 178, 40, .5);
      }
      #ticket table tr td{
        border: none;
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
<!----------End header Area-------------->
<div class="container col-lg-6 m-auto">
  <div id="ticket">
    <div class="responsive">
      <table class="table">
        <tr>
          <td colspan="2" class="text-center"><?php echo $bus_name."(".$bus_type.")"; ?></td>
        </tr>
        <tr>
          <td><?php echo $ticket_id; ?></td>
          <td><?php  echo $dates; ?></td>
        </tr>
        <tr>
          <td><?php echo $destination."<br>"."<span>".$departure_place."</span>"; ?></td>
          <td><?php  echo $departure; ?></td>
        </tr>
        <tr>
          <td><?php echo $source."<br>"."<span>".$arrival_place."</span>"; ?></td>
          <td><?php  echo $arrival; ?></td>
        </tr>
        <tr>
          <td>Seats</td>
          <td><?php  echo $seats; ?></td>
        </tr>
        <tr>
          <td>Total Cost</td>
          <td><?php  echo $total_price; ?></td>
        </tr>
      </table>
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
            <p><a href="logout.php">logout</a></p>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>