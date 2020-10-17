<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
     <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Admin Login</title>
    <style type="text/css">
      body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-image: url(bg.jpg);
  background-size: cover;
}
.box{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 400px;
  padding: 40px;
  box-sizing: border-box;
  background-color: rgba(0, 0, 0, 0.8);
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
  border-radius: 15px;
}
.box h2
{
  text-align: center;
  color: #fff;
  font-weight: 600;
  font-size: 32px;
}
.box .Login-box
{
  position: relative;
}
.box .Login-box input
{
  margin-bottom: 10px;
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  margin-bottom: 30px;
  background: transparent;
  border: none;
  outline: none;
  color: #fff;
  border-bottom: 2px solid blue;
}
.box .Login-box label
{
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: 0.5s;
}
.box .Login-box input:focus ~ label,
.box .Login-box input:valid ~ label
{
  top: -18px;
  left: 0;
  color: #03a9f4;
  font-size: 12px;
}
.box input[type="submit"]
{
  margin: 30px 0px;
  height: 40px;
  width: 120px;
  color: #fff;
  background-color: blue;
  border: none;
  outline: none;
  border-radius: 15px;
}

    </style>
  </head>
  <body>
      <div class="box">
        <h2>Admin Login</h2>
        <form class="" action="#" method="post">
            <div class="Login-box">
              <input type="text" name="a1" value="" required>
              <label for="">Username</label>
            </div>
            <div class="Login-box">
              <input type="password" name="a2" value="" required>
              <label for="">password</label>
            </div>
            <input type="submit" name="admin_login" value="Login now">
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
  include('connection.php');
  session_start();
  if (isset($_POST['admin_login'])) {
    $admin_name=$_POST['a1'];
    $pass=$_POST['a2'];
    $check="SELECT * from admin where admin_name='$admin_name' && password='$pass'";
    $query=mysqli_query($con,$check);
    $row=mysqli_num_rows($query);
      if ($row==1) {
        $_SESSION['aname']=$admin_name;
        header('location:admin_index.php');
      }
      else{
        echo "<script>alert('email or password incorrect....!!')</script>";
      }
  }
    

?>

