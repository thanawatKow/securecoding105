<meta charset="utf-8">
<?php
include("config/config.php");
//1
//------choice------
$sex=@$_POST["sex"];  
$age=@$_POST["age"];  
$education=@$_POST["education"];
$career=@$_POST["career"];
$career_other=trim(@$_POST["career_other"]);


//------choice------
$useFacebook=@$_POST["useFacebook"];  					//2
$useFacebook_other=@$_POST["useFacebook_other"];		
$timeuseFacebook=@$_POST["timeuseFacebook"];			//3

//------value-------
$interest1=@$_POST["interest1"];						//4
$interest2=@$_POST["interest2"];
$interest3=@$_POST["interest3"];
$interest4=@$_POST["interest4"];
$interest5=@$_POST["interest5"];
$interest6=@$_POST["interest6"];
$interest7=@$_POST["interest7"];
$interest=$interest1.",".$interest2.",".$interest3.",".$interest4.",".$interest5.",".$interest6.",".$interest7;
$interest_other=@$_POST["interest_other"];				

//------value-------
$feel1=@$_POST["feel1"];								//5
$feel2=@$_POST["feel2"];
$feel3=@$_POST["feel3"];
$feel4=@$_POST["feel4"];
$feel5=@$_POST["feel5"];
$feel6=@$_POST["feel6"];
$feel7=@$_POST["feel7"];
$feel=$feel1.",".$feel2.",".$feel3.",".$feel4.",".$feel5.",".$feel6.",".$feel7;

//------value-------
$feel_other=@$_POST["feel_other"];
$page1=@$_POST["page1"];								//6
$page2=@$_POST["page2"];
$page3=@$_POST["page3"];
$page=$page1.",".$page2.",".$page3;
$page_other=@$_POST["page_other"];

//------value-------
$event1=@$_POST["event1"];								//7
$event2=@$_POST["event2"];
$event3=@$_POST["event3"];
$event=$event1.",".$event2.",".$event3;

//------choice------
$location=@$_POST["location"];						//8
$location_other=@$_POST["location_other"];


//----choice---------
$timelocation=@$_POST["timelocation"];					//9
$suggest=@$_POST["suggest"];							//10
$suggest_other=@$_POST["suggest_other"];

//----textarea-------
$sing=@$_POST["sing"];									//11
$actity=@$_POST["actity"];								//12

//------value-------
$satisfact1=@$_POST["satisfact1"];						//13
$satisfact2=@$_POST["satisfact2"];
$satisfact3=@$_POST["satisfact3"];
$satisfact4=@$_POST["satisfact4"];
$satisfact=$satisfact1.",".$satisfact2.",".$satisfact3.",".$satisfact4;

//------value-------
$ptt1=@$_POST["ptt1"];									//14
$ptt2=@$_POST["ptt2"];
$ptt3=@$_POST["ptt3"];
$ptt4=@$_POST["ptt4"];
$ptt5=@$_POST["ptt5"];
$ptt6=@$_POST["ptt6"];
$ptt=$ptt1.",".$ptt2.",".$ptt3.",".$ptt4.",".$ptt5.",".$ptt6;


//----textbox--------
$name=trim(@$_POST["name"]);
//----textarea-------
$address=trim(@$_POST["address"]);

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

//echo $user_ip;



$sql="INSERT INTO `pttnews_survey2016`  
	 VALUES (NULL, now(), '$user_ip', '$name', '$sex','$age', '$address', '$education', '$career'
	, '$career_other'	
 	,'$useFacebook','$useFacebook_other', '$timeuseFacebook', '$interest', '$interest_other', '$feel', 
 	'$feel_other', '$page', '$page_other', '$event', '$location',
  	'$location_other', '$timelocation', '$suggest', '$suggest_other', '$sing',
   	'$actity', '$satisfact', '$ptt');";

//echo $sql;

$r=mysqli_query($con,$sql);
if($r){

	echo "<script>window.location.replace('success.html');</script>";
}else{
	echo "error add <br>".$sql;
}

?>