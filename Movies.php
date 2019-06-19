<?php
	session_start();
	$Check = $_GET['Movie'];	
	echo $Check;
	$_SESSION["M_Name1"]="Interstellar";
	$_SESSION["M_Name2"]="Justice-League";
	$_SESSION["M_Name3"]="Dr.Strange";
	$_SESSION["M_Name4"]="Despicable Me-3";	
	
	if($Check == "Interstellar")
	{
		$_SESSION["M_Name"]=$_SESSION["M_Name1"];
			header('Location: Time.html');
	}elseif($Check == "Justice-League")
	{
		$_SESSION["M_Name"]=$_SESSION["M_Name2"];
		header('Location: Time1.html');
	}elseif($Check == "Dr.Strange")
	{
		$_SESSION["M_Name"]=$_SESSION["M_Name3"];
		header('Location: Time2.html');
	}elseif($Check == "Despicable Me-3")
	{
		$_SESSION["M_Name"]=$_SESSION["M_Name4"];
		header('Location: Time3.html');
	}

	echo $_SESSION["M_Name"];
?>