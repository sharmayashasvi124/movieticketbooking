
<?php
	$db = mysqli_connect("localhost" , "root" , "" , "phoenix");	
	$username = $_GET['username'];
	$password = $_GET['password'];
	$sql = "SELECT * FROM customer WHERE Username='".$username."' AND Password='".$password."'";
	echo $sql;
	$result = mysqli_query($db,$sql);
	
	echo "123" . mysqli_num_rows($result);
	if(mysqli_num_rows($result) >0) 
	{
	session_start();
	$_SESSION['logged']=true;
	$_SESSION ['name']=$username;
	$_SESSION['success'] = "You are now logged in";
	echo $_SESSION ['name'];
	header('Location: Profile.php');
	}
	else
	{
	echo 'Username/password combination incorrect';
	}
?>