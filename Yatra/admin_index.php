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
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet"href="adminstyle.css">
     </head>
     <body>
     	  <div id="wrapper">

  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <h2>Bus Yatra</h2>
    </div>
    <ul class="sidebar-nav">
      <li class="active">
        <a href="admin_index.php"><i class="fa fa-home"></i>Home</a>
      </li>
      <li>
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

  <section id="content-wrapper">
  	<div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-xs-12 col-12 col-lg-4 col-sm-6">
        	<div class="head">
        		<div class="head-item">
        		   <i class="fa fa-snowflake-o" aria-hidden="true"></i>
        			 <div class="head-item-in">
        				<p>Total Bus</p>
        				<p class="pg">700<sup>+</sup></p>
        			  </div>
        		 </div>
        	 </div>      
          </div>
          <div class="col-md-4 col-xs-12 col-12 col-lg-4 col-sm-6">
        	<div class="head">
        		<div class="head-item">
        		   <i class="fa fa-database" aria-hidden="true"></i>
        			 <div class="head-item-in">
        				<p>Today's Booking</p>
        				<p class="pg">150<sup>+</sup></p>
        			  </div>
        		 </div>
        	 </div>      
          </div>
           <div class="col-md-4 col-xs-12 col-12 col-lg-4 col-sm-6">
        	<div class="head">
        		<div class="head-item">
        		   <i class="fa fa-cubes" aria-hidden="true"></i>
        			 <div class="head-item-in">
        				<p>Total Booking</p>
        				<p class="pg">150<sup>+</sup></p>
        			  </div>
        		 </div>
        	 </div>      
          </div>
       </div>
       
     </div>
    </section>
    <section>
    	<div class="container">
			  <h2 style="color:purple">Bus Progress Bars</h2>
			  <div class="progress">
			    <div class="progress-bar progress-bar-striped" style="width:30%"><span>Total Bus</span></div>
			  </div>
			  <br>
			  <div class="progress">
			    <div class="progress-bar bg-success progress-bar-striped" style="width:40%"><span>Total Booking</span></div>
			  </div>
			  <br>
			  <div class="progress">
			    <div class="progress-bar bg-info progress-bar-striped" style="width:50%"><span>Todays Booking</span></div>
			  </div>
			  <br>
			  <div class="progress">
			    <div class="progress-bar bg-warning progress-bar-striped" style="width:60%"><span>Awaited Booking</span></div>
			  </div>
			  <br>
			  <div class="progress">
			    <div class="progress-bar bg-danger progress-bar-striped" style="width:70%"><span>Total Bus</span></div>
			  </div>
        </div>
      </section>
  </div>

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


     <script type="text/javascript">
     	const $button  = document.querySelector('#sidebar-toggle');
const $wrapper = document.querySelector('#wrapper');

$button.addEventListener('click', (e) => {
  e.preventDefault();
  $wrapper.classList.toggle('toggled');
});
</script>

     </body>
</html>