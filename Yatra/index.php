<?php
	include('connection.php');
  session_start();
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

<!---------------Slider Area------------------------------->
<div class="slider">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active image">
      <img class="d-block w-100" src="image/slider.jpg" alt="First slide" height="500px">
    </div>
    <div class="carousel-item image">
      <img class="d-block w-100" src="image/slider1.jpg"  alt="Second slide" height="500px">
    </div>
    <div class="carousel-item image">
      <img class="d-block w-100" src="image/slider2.jpg" alt="Third slide" height="500px">
    </div>
    <div class="carousel-item image">
      <img class="d-block w-100" src="image/slider3.png" alt="Third slide" height="500px">
    </div>
    <div class="carousel-item image">
      <img class="d-block w-100" src="image/slider.jpg" alt="Third slide" height="500px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div><!------------------End Slider----------------------->

 <!---------Bus Searching Area----------------------->
 	<section id="bus-search">
 		<div class="container">
 			<form method="post">
	 			<div class="row">
	 				<div class="col-lg-3 col-md-3 col-12 col-sm-12">
	 					<label>From</label>
	 					<select name="from" id="from" required="" class="form-control">
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
	 				<div class="col-lg-3 col-md-3 col-12 col-sm-12">
	 					<label>To</label>
	 					<select name="to" id="to" required="" class="form-control">
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
	 				<div class="col-lg-3 col-md-3 col-12 col-sm-12">
	 					<label>Date</label>
	 					<input type="date" name="date" required="" id="date" class="form-control">
	 				</div>
	 				<div class="col-lg-3 col-md-3 col-12 col-sm-12">
	 					<input type="submit" name="sub" class="btn-success" id="submit">
	 				</div>
	 			</div>
 			</form>
 		</div>
 	</section>

 <!--------End Bus Searching Area--------------------->

 <!------------Choose Us Area--------------------->
 	<section id="choose-us">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-lg-3 col-md-3 col-sm-12 col-12">
 					<div class="choose-content">
 						<img src="image/safety.jpg" height="50px" width="auto">
 						<p id="choose-content-head">SAFETY +</p>
 						<p>With Safety+ we have brought in a set of measures like Sanitized buses, mandatory masks etc. to ensure you travel safely.</p>
 					</div>
 				</div>
 				<div class="col-lg-3 col-md-3 col-sm-12 col-12">
 					<div class="choose-content">
 						<img src="image/service.png" height="50px" width="auto">
 						<p id="choose-content-head">SUPERIOR CUSTOMER SERVICE</p>
 						<p>We put our experience and relationships to good use and are available to solve your travel issues.</p>
 					</div>
 				</div>
 				<div class="col-lg-3 col-md-3 col-sm-12 col-12">
 					<div class="choose-content">
 						<img src="image/price.jpg" height="50px" width="auto">
 						<p id="choose-content-head">LOWEST PRICES</p>
 						<p>We always give you the lowest price with the best partner offers.</p>
 					</div>
 				</div>
 				<div class="col-lg-3 col-md-3 col-sm-12 col-12">
 					<div class="choose-content">
 						<img src="image/benefits.png" height="50px" width="auto">
 						<p id="choose-content-head">UNMATCHED BENEFITS</p>
 						<p>We take care of your travel beyond ticketing by providing you with innovative and unique benefits.</p>
 					</div>
 				</div>
 			</div>
 		</div>
 	</section>
 <!------------End Choose Us Area--------------------->

 <!--=====Testimonial Slider================-->
<section id="testimonial">
<div class="card col-md-6 mt-5 mb-5 my-0 mx-auto">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
    <div class="w-100 carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="carousel-caption">
          <div class="row">
            <div class="col-sm-3">
              <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid"/>
            </div>
            <div class="col-sm-9">
              <h3>I Loved It</h3>
              <small>Very good app.Easy to handle.Interface is quite simple every one can easily book tickets.Handsome cashback from signup to referral bonus.Everytime you booked tickets you will get huge discount.Service quality is very impressive.</small>
              <small class="smallest mute">- Arun kr. das</small>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <div class="row">
            <div class="col-sm-3">
              <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid">
            </div>
            <div class="col-sm-9">
              <h3>Perfect for travelling</h3>
              <small>In my experience Bus Yatra is the option if you book a bus and if you want take some discount or offer than it is also best option redbus provides more offer and refferal bonus.And the policies of redbus are very good like cancelation and refund.The behaviour of redbus agent is humanable.</small>
              <small class="smallest mute">- Mithun Kumar</small>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <div class="row">
            <div class="col-sm-3">
              <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid">
            </div>
            <div class="col-sm-9">
              <h3>Cheap rate and Air conditionar</h3>
              <small> I am always book my tickets in Bus Yatra .in wherever I will be go . It is very helpful to me . It is uses for saving our time and money also . Recently I am travelling ramachandrapuram to hyderabad .</small>
              <small class="smallest mute">- Chandan Modi</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="float-right navi">
    <a class="" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon ico" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon ico" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
  </div>
</div>
</section>

  <!--=====Testimonial Slider================-->


  <section id="choosing">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
  				<div class="choosing">
	  				<h4>WHY WE CHOOSE US</h4>
	  				<p>The online bus booking services of redBus offers a plethora of advantages than it’s offline prehistoric booking modes. Firstly, booking a bus ticket through a travel agent or at a counter is in the past. People have begun to recognize the advantages of making an online bus booking. At a counter, people would have to first stand in a queue in front of a particular bus operator. Once they reach the counter, they would have to book a seat among the seats that are available. If a seat isn’t available on the bus of their choice, the dejected customer would then have to stand in another queue in front of another bus operator. Online bus ticket booking with redBus has eliminated these problems that people used to face.</p>
	  			</div>
  			</div>
  			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
  				<div class="choosing">
	  				<h4>BENEFINTS</h4>
	  				<p>There are numerous benefits to booking a bus ticket online through redBus such as: 1) Book bus tickets with ease from the comfort of your home or workspace. 2) Quick and easy cancellation and rescheduling options. 3) Exclusive offers and cashback options. 4) M-ticket and e-ticket facilities are available. 4) Wide variety of bus operators, types of buses and routes to choose from. 5) Impeccable customer service. 5) Lower prices. Visit the redBus website or download the app to see the benefits of making a bus ticket booking.</p>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
  <section id="subscription">
  	<h2>Get In Touch</h2>
  	<div class="container col-lg-6 m-auto">
  		<form method="post">
  			<input type="email" name="subscribe" id="subscribe" placeholder="example@gmail.com">
  			<input type="submit" name="subscribe">
  		</form>
  	</div>
  </section>

  <!------------Features---------------->

  	<section id="features">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
  					<div class="features-content">
  						<h3>Features of Online Reservation Syatem :</h3>
  						<ul>
  							<li>Fast and Flexible Booking Engine</li>
  							<li>Secure, Scalable and robust reservation architecture</li>
  							<li>Fully customized booking engine</li>
  							<li>Cost-effective solutions</li>
  							<li>User friendly interface</li>
  							<li>Integrated Payment Gateway</li>
  						</ul>
  					</div>
  				</div>
  				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
  					<div class="features-content">
  						<iframe width="560" height="315" src="https://www.youtube.com/embed/eE1fdMwPgF4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  <!------------End Features------------->

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

    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#submit').click(function(e){
    			e.preventDefault();
    			$.ajax({
					url:'ticket_searching.php',
					method:"post",
					data: $('form').serialize(),
					dataType: "text",
					success: function(strMessage){
    					if (strMessage==='success') {
							window.location.replace("ticket_detail_page.php");
						}
    					else{
    						alert('something wrong....');
    					}	
    				}
    				
    			});
    		});
    	});
    </script>
  </body>
</html>

