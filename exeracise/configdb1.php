<?php 
$db_name = "u543012022_tha12/word";
$my_username ="u543012022_9401";
$my_password ="ben641054";
$server_name ="mysql.hostinger.in.th";
$con =mysqli_connect($server_name,$my_username,$my_password,$db_name);
if($con){
echo "connection success";	
}else{
	}
?>