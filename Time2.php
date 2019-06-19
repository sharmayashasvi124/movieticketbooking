	<?php
	session_start();
	$T = $_SESSION["M_Name"];
	echo $T;
	
	$Check = $_GET['Time'];	
	echo $Check;
	$_SESSION["T_Time1"]="10:20 AM";
	$_SESSION["T_Time2"]="5:10 PM";
		
	if($Check == "10:20 AM")
	{
		$_SESSION["T_Time"]=$_SESSION["T_Time1"];
	}elseif($Check == "5:10 PM")
	{
		$_SESSION["T_Time"]=$_SESSION["T_Time2"];
	}
	
	header('Location: Booking.html');
	echo $_SESSION["T_Time"];
	?>
