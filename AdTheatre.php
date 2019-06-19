	<?php
	session_start();	
	$Check = $_GET['Th'];	
	echo $Check;
	$_SESSION["Th_Name1"]="Theatre-A";
	$_SESSION["Th_Name2"]="Theatre-B";
	$_SESSION["Th_Name3"]="Theatre-C";
	
	if($Check == "Theatre-A")
	{
		$_SESSION["Th_Name"]=$_SESSION["Th_Name1"];
	}elseif($Check == "Theatre-B")
	{
		$_SESSION["Th_Name"]=$_SESSION["Th_Name2"];
	}elseif($Check == "Theatre-C")
	{
		$_SESSION["Th_Name"]=$_SESSION["Th_Name3"];
	}
	header('Location: AdDetails.php');
	echo $_SESSION["Th_Name"];
	?>