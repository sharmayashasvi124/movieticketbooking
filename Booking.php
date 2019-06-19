<?php
	session_start();
	
	$T = $_SESSION["T_Time"];
	echo $T;
	
	$db = new mysqli("localhost" , "root" , "" , "Phoenix");
	$T_Time = $_SESSION["T_Time"];
	$M_Name = $_SESSION["M_Name"];
	$Th_Name = $_SESSION["Th_Name"];
	$seat= $_REQUEST["seat"];
	$T_No=implode(",",$seat);
	$_SESSION["T_No"] = $T_No;
	echo $_SESSION["T_No"];
	echo $T_No;
	
	if ($_SESSION['logged']==true){
	$Username = $_SESSION ['name'];
	}
	else
	{
		echo 'Please Login First';
	}
	
	$T_Date = date("Y-m-d");
	
	$pqr = "SELECT * FROM tickets WHERE T_No = '".$T_No."' AND Theatre = '".$Th_Name."' AND T_Time = '".$T_Time."'";
	$result = mysqli_query($db,$pqr);
	if(mysqli_num_rows($result) >0)
	{
	$message = "This seat is already booked, Please try another one";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header('Location: Booking1.php');	
	}
	else
	{
	$sql = "INSERT INTO tickets(T_No,T_Date,T_Time,M_Name,Username,Theatre) VALUES('".$T_No."','".$T_Date."','".$T_Time."','".$M_Name."','".$Username."','".$Th_Name."')";
	if ($db->query($sql) === TRUE)
	{
		echo "<br>"."New record created successfully"."<br>";
		echo "<br>".$Username;
		header('Location: Booked.php');
	}else 
	{
		echo "Error: " . $sql . "<br>" . $db->error;
	}
	}
	
?>



