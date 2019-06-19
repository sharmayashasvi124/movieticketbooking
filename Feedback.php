<?php
	$db = new mysqli("localhost" , "root" , "" , "phoenix");
	$username = $_GET["username"];
	$Comments = $_GET["Comments"];
	$sql = "INSERT INTO feedback(Username,Comments ) VALUES('".$username."','".$Comments."')";
	if ($db->query($sql) == TRUE)
		{
			echo $username;
        }
	header('Location: Home.php');


?>