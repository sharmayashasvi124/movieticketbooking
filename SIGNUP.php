<?php
	$db = new mysqli("localhost" , "root" , "" , "phoenix");
	$username = $_GET["email"];
	$name = $_GET["name"];
	$password = $_GET['password'];
	$password2 = $_GET['password2'];
	$Birth_Date = $_GET['Birth_Date'];
	$city = $_GET['city'];
	
	if ($password == $password2){
	
		$sql = "INSERT INTO customer(Username,Name,Password,Birth_Date,City) VALUES('".$username."','".$name."','".$password."','".$Birth_Date."','".$city."')";
		echo $sql;
		if ($db->query($sql) === TRUE)
		{
			echo "<br>"."New record created successfully"."<br>";
			echo "<br>".$name;
		}else 
		{
			echo "Error: " . $sql . "<br>" . $db->error;
		}			

		header('Location: Home.php');
	}
	else
	{
		echo "The Two Passwords do not match";
	}
	$db->close();
?>