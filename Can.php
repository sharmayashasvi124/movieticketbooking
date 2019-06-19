	<?php
	$db = mysqli_connect("localhost" , "root" , "" , "phoenix");	
	session_start();
	$T = $_SESSION["name"];
	echo $T;
	
	$sql = "DELETE FROM tickets WHERE Username = '".$T."'";
	$result = mysqli_query($db,$sql);
	if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
	}
	echo '<script language="javascript">';
	echo 'alert("Ticket Cancelled Successfully")';
	echo '</script>';
	header('Location: Profile.php');
	
	?>
