<?php
	$db = mysqli_connect("localhost" , "root" , "" , "phoenix");	
	session_start();
	$T = $_SESSION["name"];
	echo $T;
	$sql = "SELECT Username,Name,Birth_Date,City FROM customer WHERE Username = '".$T."'";
	$result = mysqli_query($db,$sql);
	if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
	}
	$row = mysqli_fetch_row($result);
	
	$sql1 = "SELECT T_No,Theatre FROM tickets WHERE Username = '".$T."'";
	$result1 = mysqli_query($db,$sql1);
	if (!$result1) {
    echo 'Could not run query: ' . mysql_error();
    exit;
	}
	$row1 = mysqli_fetch_row($result1);
?>
<!Doctype Html>
<html>
<head>
	<title>PHOENIX-Profile</title>
	<style>
	div{display: block;}
		#wrapper{
			width: 100%;
			height: 100%;
			}
		#One{
			float:centre;
			width: 100%;
			height: 33%;
			}
		#Two{
			float:centre;
			width: 100%;
			height: 33%;
			}
		#Three{
			float:centre;
			width: 100%;
			height: 33%;
			}
		
	.button:hover{
		border: 1px solid #888;
		background-color: #000000;
		color:white;
	</style>	
</head>
<body bgcolor="#000000">
		
	<div id="All">
		<div id="One"></div>
		<div id="Two"></div>
		<div id="Three"></div>
	</div>

	<div id="One">
	<form action="Home.php" method="get" id="form1">
	</form>	
	<a href="Home.php" style="text-decoration:none; height:50px;width:750px;position:absolute;left:0px;top:0px;background-color:none;text-align:left;
	font-size:30px; 
	background-color: #000000;
    border: none;
    color: white;
	font:Courier New">P H O E N I X</a>
	<a href="TPD.html" style="text-decoration:none; background-color: #000000; height:50px;width:400px;position:absolute; left:750px; top:0px; background-color:none;color: white;
	font:Courier New">THE   PHOENIX   DIFFERENCE</a>
	<a href="Home.php" style="text-decoration:none; background-color: #000000; height:50px;width:215px;position:absolute; left:1150px; top:0px; background-color:none;color: white;
	font:Courier New">LOGOUT</a>
	</div>
	
	<div id="Two">
	<table>
	<tr>
	<td style="position:absolute;left:300px;top:85px;font-size:50px;font:Courier New;"><font color="white">P R O F I L E:</td>
	<td style="position:absolute;left:350px;top:200px;font-size:20px;font:Courier New;"><font color="White">Customer Name:</td>
	<input type="text" name="Movie" style="position:absolute;left:550px;top:200px;font-size:14px;font:Courier New;width:150px;"
	value="<?php echo $row[0]; ?>">
	<td style="position:absolute;left:350px;top:250px;font-size:20px;font:Courier New;"><font color="White">Email:</td>
	<input type="text" name="Movie" style="position:absolute;left:550px;top:250px;font-size:14px;font:Courier New;width:150px;"
	value="<?php echo $row[1]; ?>">
	<td style="position:absolute;left:350px;top:300px;font-size:20px;font:Courier New;"><font color="White">BirthDate:</td>
	<input type="text" name="Movie" style="position:absolute;left:550px;top:300px;font-size:14px;font:Courier New;width:150px;"
	value="<?php echo $row[2]; ?>">
	<td style="position:absolute;left:350px;top:350px;font-size:20px;font:Courier New;"><font color="White">City:</td>
	<input type="text" name="Movie" style="position:absolute;left:550px;top:350px;font-size:14px;font:Courier New;width:150px;"
	value="<?php echo $row[3]; ?>">
	<td style="position:absolute;left:350px;top:400px;font-size:20px;font:Courier New;"><font color="White">Ticket Info:</td>
	<input type="text" name="Movie" style="position:absolute;left:550px;top:400px;font-size:14px;font:Courier New;width:150px;"
	value="<?php echo $row1[0]; ?>">
	<td style="position:absolute;left:350px;top:450px;font-size:20px;font:Courier New;"><font color="White">Theatre Name:</td>
	<input type="text" name="Movie" style="position:absolute;left:550px;top:450px;font-size:14px;font:Courier New;width:150px;"
	value="<?php echo $row1[1]; ?>">
	
	<a href="Cancel.php" style="text-decoration:none; height:font:Courier New;font-size:30px;width:200px;position:absolute; left:1050px;top:450px; background-color:red; color:black;text-align:center;">Cancel Ticket</a>
		
	</tr>
	</table>
	</div>
	
	<div id="Three">
	<table>
	<caption style="position:absolute; left:600px; bottom:100px;font-size:11px;"><font color="white">SUSCRIBE TO US</caption>
	<tr>
		<a href="https://www.facebook.com"><img src = "facebook.png"width = "30" height = "30" style="position:absolute;left:550px;Bottom:62px;"></a>
		<a href="https://twitter.com"><img src = "twitter.png"width = "30" height = "30" style="position:absolute;left:610px;Bottom:62px;"></a>
		<a href="https://www.instagram.com/accounts/login"><img src = "instagram.png"width = "30" height = "30" style="position:absolute;left:670px;
		Bottom:62px;"></a>
		<a href="https://www.youtube.com"><img src = "youtube.jfif"width = "30" height = "30" style="position:absolute;left:730px;Bottom:62px;"></a>
		<td style="position:absolute; left:370px; bottom:45px;font-size:11px;"><font color="white">PHOENIX & THE PHOENIX EXPERIENCE ARE THE
		TRADEMARKS OF PHOENIX CORPORATION</td>
		<td style="position:absolute; right:200px; bottom:45px;font-size:11px;"><font color="white">Contact Us:</td>
		<td style="position:absolute; left:570px; bottom:30px;font-size:11px;"><font color="white"> Terms of use Privacy Policy </td>
		<td style="position:absolute; right:75px; bottom:30px;font-size:11px;"><font color="white"> Email:Coolbud124@gmail.com </td>
		<td style="position:absolute; left:600px; bottom:15px;font-size:11px;"><font color="white"> To The PHOENIX </td>
		<td style="position:absolute; right:100px; bottom:15px;font-size:11px;"><font color="white"> Phone no.: 0731-4730000</td>
		<a href="Theatre.html" style="text-decoration:none; height:font:Courier New;20px;width:200px;position:absolute; left:60px;  bottom:80px; background-color:black; color:white;">Theatres</a>
		<a href="About.html" style="text-decoration:none; height:font:Courier New;width:200px;position:absolute; right:15px;  bottom:80px; background-color:black; color:white;">About Developers</a>
		<a href="Feedback.html" style="text-decoration:none; height:20px;width:150px;font:Courier New;position:absolute; right:10px; bottom:55px; background-color:black; color:white;">Feedback</a>
	
	</tr>
	</table>
	</div>
</body>
</html>