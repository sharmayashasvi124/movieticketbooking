	<?php
	session_start();
	$T = $_SESSION["M_Name"];
	echo $T;
	
	$Check = $_GET['Time'];	
	echo $Check;
	$_SESSION["T_Time1"]="11:30 AM";
	$_SESSION["T_Time2"]="2:50 PM";
		
	if($Check == "11:30 AM")
	{
		$_SESSION["T_Time"]=$_SESSION["T_Time1"];
	}elseif($Check == "2:50 PM")
	{
		$_SESSION["T_Time"]=$_SESSION["T_Time2"];
	}
	
	header('Location: Booking.html');
	echo $_SESSION["T_Time"];
	?>
