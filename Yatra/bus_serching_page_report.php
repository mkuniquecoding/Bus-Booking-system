<?php
	include('connection.php');
	session_start();
	$email=$_SESSION['uname'];
	if (!isset($email)) {
		header('location:user_login.php');
	}
	$date= $_SESSION['date'];
	$search_id=$_GET['search_id'];
	$display="SELECT * FROM ticket_price where s_no='$search_id'";
	$query=mysqli_query($con,$display);
	$num=mysqli_num_rows($query);
	if ($num==1) {
		while ($row=mysqli_fetch_array($query)) {
			$destination=$row['destination'];
			$source=$row['source'];
			$price=$row['price'];
			$departure=$row['departure'];
			$arrival=$row['arrival'];
			$duration=$row['duration'];
			$bus_type=$row['bus_type'];
			$bus_name=$row['bus_name'];
			$departure_place=$row['departure_place'];
			$arrival_place=$row['arrival_place'];	
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket Booking</title>
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
		.bus_details{
			background: #D8D8D8;
		}
		.bus_details tr td{
			padding: 10px 20px;
		}
		#seat{
			color: #fff;
			text-decoration: none;
			background: red;
			padding: 5px 10px;
			font-weight: normal;
			font-size: 12px;
			border:none;
		}
		.seat_detail{
			padding: 10px;
			background: #f8ece0;
		}
		.seat_detail tr td{
			padding: 5px;
		}
		.seat_detail tr td input[type="button"]{
			font-size: 12px;
		}
		#hide_seat{
			position: relative;
			float: right;
			background: #0174df;
			padding: 0 5px;
			color: #fff;
			cursor: pointer;
			display: none;
		}
		.active{
			background: #333;
			color: #fff;
		}
		.ticket_content{
			background: #F9C7AD;
			width: 100%;
			height: auto;
			padding: 20px 30px;
			
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
      <li class="nav-item">
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
        <a class="nav-link" href="user_-login.php">Login</a>
      </li>
    </ul>
    
  </div>
</nav>
<!----------End Header------------------>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
		<div class="bus_details">
			<table>
				<tr>
					<td><?php echo $destination." "."-"." ".$source; ?></td>
					<td><?php echo $departure." "."-"." ".$arrival; ?></td>
					<td><?php echo $duration; ?></td>
				</tr>
				<tr>
					<td><?php echo $bus_type; ?></td>
					<td><?php echo $bus_name; ?></td>
					<td><?php echo "<b><span>".$price."</span> "."INR"."</b>"; ?></td>
				</tr>
				<tr>
					<td><?php echo $date; ?></td>
				</tr>
			</table>
		</div>
		<div class="seat_detail" id="reserve_seat">
			<form>
			
			<table>
				<tr>
					<td><input type="button" name="b1" value="S37"></td>
					<td><input type="button" name="b2" value="S33"></td>
					<td><input type="button" name="b1" value="S29"></td>
					<td><input type="button" name="b2" value="S25"></td>
					<td><input type="button" name="b1" value="S21"></td>
					<td><input type="button" name="b2" value="S17"></td>
					<td><input type="button" name="b1" value="S13"></td>
					<td><input type="button" name="b2" value="S9"></td>
					<td><input type="button" name="b1" value="S5"></td>
					<td><input type="button" name="b2" value="S1"></td>
				</tr>
				<tr>
					<td><input type="button" name="b1" value="S38"></td>
					<td><input type="button" name="b2" value="S34"></td>
					<td><input type="button" name="b1" value="S30"></td>
					<td><input type="button" name="b2" value="S26"></td>
					<td><input type="button" name="b1" value="S22"></td>
					<td><input type="button" name="b2" value="S18"></td>
					<td><input type="button" name="b1" value="S14"></td>
					<td><input type="button" name="b2" value="S10"></td>
					<td><input type="button" name="b1" value="S6"></td>
					<td><input type="button" name="b2" value="S2"></td>
				</tr>
				<tr>
					<td><input type="button" name="b1" value="S39"></td>
				</tr>
				<tr>
					<td><input type="button" name="b1" value="S40"></td>
					<td><input type="button" name="b2" value="S35"></td>
					<td><input type="button" name="b1" value="S31"></td>
					<td><input type="button" name="b2" value="S27"></td>
					<td><input type="button" name="b1" value="S23"></td>
					<td><input type="button" name="b2" value="S19"></td>
					<td><input type="button" name="b1" value="S15"></td>
					<td><input type="button" name="b2" value="S11"></td>
					<td><input type="button" name="b1" value="S7"></td>
					<td><input type="button" name="b2" value="S3"></td>
				</tr>
				<tr>
					<td><input type="button" name="b1" value="S41"></td>
					<td><input type="button" name="b2" value="S36"></td>
					<td><input type="button" name="b1" value="S32"></td>
					<td><input type="button" name="b2" value="S28"></td>
					<td><input type="button" name="b1" value="S24"></td>
					<td><input type="button" name="b2" value="S20"></td>
					<td><input type="button" name="b1" value="S16"></td>
					<td><input type="button" name="b2" value="S12"></td>
					<td><input type="button" name="b1" value="S8"></td>
					<td><input type="button" name="b2" value="S4"></td>
				</tr>
			</table>
			
		</form>
		</div>
	</div>
	<div class="col-lg-4 col-md-4">
		<form method="post">
			<div class="ticket_content">
				<div class="Ticket-Data">
					<?php
						echo "<span>".$destination."</span>"." "."to"." "."<span>".$source."</span>";
						echo "<h5>"."Seat no."."</h5>";

					?>

					<span id="holder"></span>
				</div>
				<div>
					<h5>Cost</h5>
					<span id="cost"></span>
					
				</div>
				<button id="confirm_booking">Confirm Booking</button>
			</div>	
		</form>
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



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript">	
			
			//---------------Selected bus ticket price-----------------//
			var price = "<?php echo $price; ?>";
			var destination = "<?php echo $destination; ?>";
			var source = "<?php echo $source; ?>";
			var departure = "<?php echo $departure; ?>";
			var duration = "<?php echo $duration; ?>";
			var arrival = "<?php echo $arrival; ?>";
			var bus_type = "<?php echo $bus_type; ?>";
			var bus_name = "<?php echo $bus_name; ?>";
			var departure_place = "<?php echo $departure_place; ?>";
			var arrival_place = "<?php echo $arrival_place; ?>";
			var dates = "<?php echo $date; ?>";


		$('input').on('click', function(){
				$(this).addClass('active');

				var seats = $("#holder").text();

				if(seats==''){
					$("#holder").text(seats+this.value);
				}else{
					$("#holder").text(seats+','+this.value);
				}

				var check =$('input[type="button"].active').length;

				//-----------Total Ticket price----------//
				var totalcost = parseInt(price) * parseInt(check);
				 $('#cost').text(totalcost);
		});

		$(document).ready(function(){
			$('#confirm_booking').click(function(e){
				e.preventDefault();
				var ticket_cost = $('#cost').text();
				var seats = $("#holder").text();

				$.ajax({
					url:'confirm_booking.php',
					method:'post',
					data: {destination:destination,
							source:source,
							departure:departure,
							arrival:arrival,
							duration:duration,
							bus_name:bus_name,
							bus_type:bus_type,
							departure_place:departure_place,
							arrival_place:arrival_place,
						    ticket_cost:ticket_cost,
							seats:seats,
							dates:dates},
					success: function(data){
						alert(data);
					}
				});
			});
			
		});

	</script>
</body>
</html>