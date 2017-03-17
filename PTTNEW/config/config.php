<?php 
$host="mysql.hostinger.in.th";
$username="u543012022_tha12";
$password="ben641054";
$database="u543012022_aa";
$con=mysqli_connect($host,$username,$password);
$db=mysqli_select_db($con,$database) or die("no database");
?>