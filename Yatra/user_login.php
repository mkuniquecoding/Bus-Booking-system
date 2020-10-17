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

 <style type="text/css">
   .flip-container {
  perspective: 1000;
  width: 300px;
  height:320px;
  position: relative;
    background: #f5f5f5;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
  
  transition: 0.6s;
  transform-style: preserve-3d;
}
.loginBox{
  padding: 40px;
}
.flipper {
  padding: 30px;
  width: 300px;
  height:320px;
  position: relative;
    background: #f5f5f5;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
  
  transition: 0.6s;
  transform-style: preserve-3d;
}

.front, .back {
  /*background-color: rgba(0,0,0,.3);*/
  position: absolute;
    padding:10px 30px;
  top: 0;
  left: 0;
  right: 0;
  
  backface-visibility: hidden;
}

.front{
  z-index: 2;
  /* for firefox 31 */
  transform: rotateY(0deg);
}

.back{
    transform: rotateY(180deg);
}
.flip{
    transform: rotateY(180deg);
}
input{
    width:100%;
    margin-bottom:15px;
    height:40px;
    box-sizing: border-box;
    padding:10px;
}

.title{
  text-align: center;
}
.flipbutton{
    color:#4096ee;
    text-decoration:none;
    text-align:left !important;
}
input[type="submit"]{
  background: #4287f5;
  border: none;
  outline: none;
  color: #fff;
}
#error-msg{
  color: #e05a48;
  background: #eba298;
  border: 1px solid #e05a48;
  padding: 10px;
  height: 40px;
  border-radius: 20px 20px 0 0;
  display: none;
  box-sizing: border-box;

}
#error-login{
  color: #e05a48;
  background: #eba298;
  border: 1px solid #e05a48;
  padding: 10px;
  height: 40px;
  border-radius: 20px 20px 0 0;
  display: none;
  box-sizing: border-box;
}


 </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">BUS YATRA</a>
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
        <a class="nav-link" href="#">Booking</a>
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
<!-----------End Header Area-------->
<div class="container col-lg-4 m-auto">
  <div class="loginBox">
    <div class="flip-container">
      <div id="error-msg"></div>
      <div id="error-login"></div>
    <div class="flipper" id="flipper">
      <div class="front">
        <h1 class="title">Login</h1>
        <form method="post">
              <input type="email" placeholder="Email" name="login_email" id="email" />
              <input type="password" placeholder="Password" name="login_pass" id="pass" />
              <input type="submit" value="Login" id="user_login">
        </form>
        <a class="flipbutton" id="loginButton" href="#">Create my account →</a>
      </div>
      
      <div class="back">
        <h1 class="title">Register</h1>
        <form method="post">
          <input type="text" name="username" placeholder="Username" id="username">
            <input type="email" placeholder="Email" name="email" id="reg_email" />
            <input type="password" placeholder="Password" name="pass" id="reg_pass" />
            <input type="submit" name="submit" value="Sign up" id="user_register">
        <a class="flipbutton" id="registerButton" href="#">Login to my account →</a>
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

  <div id="error"></div>

  <!------------End Footer-------------->
  <div id="copyright">
    <p>Copyright <i class="fa fa-copyright"></i> 2020 Bus Yatra. All Rights reserved.</p>
  </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
  var loginButton = document.getElementById("loginButton");
var registerButton = document.getElementById("registerButton");

loginButton.onclick = function(){
  document.querySelector("#flipper").classList.toggle("flip");
}

registerButton.onclick = function(){
  document.querySelector("#flipper").classList.toggle("flip");
}


$(document).ready(function(){
  $('#user_register').click(function(e){
    e.preventDefault();
    if($('#error-msg').html(''))
    {
      $('#error-msg').hide();
    }
   if ($('#username').val()=='') {
          $('#error-msg').html('*username name is required...!!');
          $('#error-msg').show();
          return false;
        }
        else if ($('#username').val().length < 3) {
          $('#error-msg').html('*Should be more than 3 character..!!');
          $('#error-msg').show();
          return false;
        }
        else if(!isNaN($('#username').val())){
          $('#error-msg').html('*Numbers are not allowed..!!');
          $('#error-msg').show();
          return false;
        }
        else if($('#reg_email').val()==''){
          $('#error-msg').html('*Email name is required...!!');
          $('#error-msg').show();
          return false;
        }   
        else if(!validateEmail($('#reg_email').val())){
          $('#error-msg').html('*Invalid Email...!!');
          $('#error-msg').show();
          return false;
        }
        else if ($('#reg_pass').val()=="") {
           $('#error-msg').html('*Password Required...!!');
            $('#error-msg').show();
            return false;
        }
        else if ($('#reg_pass').val().length < 6) {
          $('#error-msg').html('*Pass Should be more than 6 digit...!!');
          $('#error-msg').show();
          return false;
        }
        else{
          $.ajax({
            url:'user_register.php',
            method:"post",
            data: $('form').serialize(),
            dataType: "text",
            success: function(strMessage){
              $('#error-msg').text(strMessage);
                $('#error-msg').show();
            }
          });
        }




        function validateEmail($email){
          var emailReg = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          return emailReg.test($email);
        }
  });


  $('#user_login').click(function(e){
    e.preventDefault();
        if($('#error-login').html(''))
        {
          $('#error-login').hide();
        }
       if($('#email').val()==''){
          $('#error-login').html('*Email name is required...!!');
          $('#error-login').show();
          return false;
        }   
        else if(!validateEmail($('#email').val())){
          $('#error-login').html('*Invalid Email...!!');
          $('#error-login').show();
          return false;
        }
        else if ($('#pass').val()=="") {
           $('#error-login').html('*Password Required...!!');
            $('#error-login').show();
            return false;
        }
        else if ($('#pass').val().length < 6) {
          $('#errorc').html('*Pass Should be more than 6 digit...!!');
          $('#error-login').show();
          return false;
        }
        else{
          $.ajax({
            url:'user_login_data.php',
            method:"post",
            data: $('form').serialize(),
            dataType: "text",
            success: function(strMessage){
              if (strMessage==='success') {
                window.location.replace("index.php");
              }
              else{
                $('#error-login').show();
                $('#error-login').text(strMessage);
              }
            }
          });
        }


        function validateEmail($email){
          var emailReg = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          return emailReg.test($email);
        }
  });
});
</script>
</body>
</html>

