<?php
	include('connection.php');
	session_start();
    $from=$_POST['from'];
    $to=$_POST['to'];
    $date=$_POST['date'];
    $_SESSION['from']=$from;
    $_SESSION['to']=$to;
    $_SESSION['date']=$date;
    $query="SELECT * FROM ticket_price WHERE destination='$from' && source='$to'";
    $result=mysqli_query($con,$query);
    $num=mysqli_num_rows($result);
    if ($num!=0) {
      echo "success";
    }  
?>