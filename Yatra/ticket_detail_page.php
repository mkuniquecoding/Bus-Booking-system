<?php
	include('connection.php');
  session_start();
  $from=$_SESSION['from'];
  $to=$_SESSION['to'];
  $date= $_SESSION['date'];

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
    #seat{
      color: #fff;
      text-decoration: none;
      background: red;
      padding: 5px 10px;
      font-weight: normal;
      font-size: 12px;
      border:none;
    }
    span{
      color: rgba(0,0,0,0.5);
    }
    #bus-search-detail{
      background: rgba(248,244,240,1);
    }
    #bus-search-detail table tr th{
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
        <a class="nav-link" href="#">Login</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!----------End Header Area-------------->

<!----------Ticket Details---------------->
<section id="bus-search-detail">
  <div class="container">
    <p class="text-danger"><?php echo $from." "."->"." ".$to; ?></p>
    <div class="responsive">
      <table class="table table-striped table-hover">
        <?php
          $show="SELECT * FROM ticket_price WHERE destination='$from' and source='$to'";
          $query=mysqli_query($con,$show);
          if (mysqli_num_rows($query)!=0) {
        ?>
          <tr>
            <th>S.No</th>
            <th>Departure</th>
            <th>Duration</th>
            <th>Arrival</th>
            <th>Fare</th>
            <th>Bus Name</th>
            <th>Bus Type</th>
            <th>Action</th>
          </tr>
        <?php
            $num=1;
            while ($row=mysqli_fetch_assoc($query)) {

              $seat_id=$row['s_no'];
        ?>
              <tr>
                <td><?php echo $num; ?></td>
                <td>
                  <?php echo $row['departure']."<br>"."<span>".$row['departure_place']."<span>"; ?>
                    
                </td>
                <td><?php echo $row['duration']; ?></td>
                <td>
                  <?php echo $row['arrival']."<br>"."<span>".$row['arrival_place']."<span>"; ?> 
                </td>
                <td><?php echo $row['price']." "."INR"; ?></td>
                <td><?php echo $row['bus_name']; ?></td>
                <td><?php echo $row['bus_type']; ?></td>
                <td><a href="bus_serching_page_report.php?search_id=<?php  echo $row['s_no']; ?>" class="btn btn-primary">VIEW SEAT</a></td>                  
              </tr>

        <?php
              $num++;
            }
          }

        ?>
        
        
      </table>
    </div>
  </div>
  </section>

<!----------End Ticket Details------------->
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>