<?php
	session_start();
	$db = mysqli_connect("localhost" , "root" , "" , "phoenix");	
	
	$Th_Name = $_SESSION["Th_Name"];
	
	$sql = "SELECT COUNT(*) FROM tickets WHERE Theatre='".$Th_Name."' AND M_Name='Interstellar' AND T_Time='10:30 AM'";
	$result = mysqli_query($db,$sql);
	if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
	}
	$v1 = mysqli_fetch_row($result);
	$v11= implode(",",$v1);
	echo $v11;
	
	
	$sql1 = "SELECT COUNT(*) FROM tickets WHERE Theatre='".$Th_Name."' AND M_Name='Interstellar' AND T_Time='4:50 PM'";
	$result1 = mysqli_query($db,$sql1);
	if (!$result1) {
    echo 'Could not run query: ' . mysql_error();
    exit;
	}
	$v2 = mysqli_fetch_row($result1);
	$v21= implode(",",$v2);
	echo $v21;

	
	$sql2 = "SELECT COUNT(*) FROM tickets WHERE Theatre='".$Th_Name."' AND M_Name='Justice-League' AND T_Time='9:30 AM'";
	$result2 = mysqli_query($db,$sql2);
	if (!$result2) {
    echo 'Could not run query: ' . mysql_error();
    exit;
	}
	$v3 = mysqli_fetch_row($result2);
	$v31= implode(",",$v3);
	echo $v31;
	

	$sql3 = "SELECT COUNT(*) FROM tickets WHERE Theatre='".$Th_Name."' AND M_Name='Justice-League' AND T_Time='2:50 PM'";
	
	$result3 = mysqli_query($db,$sql3);
	if (!$result3) {
    echo 'Could not run query: ' . mysql_error();
    exit;
	}
	$v4 = mysqli_fetch_row($result3);
	$v41= implode(",",$v4);
	echo $v41;
	
	
	$sql4 = "SELECT COUNT(*) FROM tickets WHERE Theatre='".$Th_Name."' AND M_Name='Dr.Strange' AND T_Time='10:20 PM'";
	
	$result4 = mysqli_query($db,$sql4);
	if (!$result4) {
    echo 'Could not run query: ' . mysql_error();
    exit;
	}
	$v5 = mysqli_fetch_row($result4);
	$v51= implode(",",$v5);
	echo $v51;
	
	
	$sql5 = "SELECT COUNT(*) FROM tickets WHERE Theatre='".$Th_Name."' AND M_Name='Dr.Strange' AND T_Time='5:10 PM'";
	
	$result5 = mysqli_query($db,$sql5);
	if (!$result5) {
    echo 'Could not run query: ' . mysql_error();
    exit;
	}
	$v6 = mysqli_fetch_row($result5);
	$v61= implode(",",$v6);
	echo $v61;
	
	
	$sql6 = "SELECT COUNT(*) FROM tickets WHERE Theatre='".$Th_Name."' AND M_Name='Despicable Me-3' AND T_Time='11:30 PM'";
	
	$result6 = mysqli_query($db,$sql6);
	if (!$result6) {
    echo 'Could not run query: ' . mysql_error();
    exit;
	}
	$v7 = mysqli_fetch_row($result6);
	$v71= implode(",",$v7);
	echo $v71;
	
	
		$sql7 = "SELECT COUNT(*) FROM tickets WHERE Theatre='".$Th_Name."' AND M_Name='Despicable Me-3' AND T_Time='2:50 PM'";
	
	$result7 = mysqli_query($db,$sql7);
	if (!$result7) {
    echo 'Could not run query: ' . mysql_error();
    exit;
	}
	$v8 = mysqli_fetch_row($result7);
	$v81= implode(",",$v8);
	echo $v81;
?>
<!Doctype Html>
<html>
<head>
	<title>PHOENIX-Ticket Info</title>
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
		<a href="Home.html" style="text-decoration:none; height:50px;width:750px;position:absolute;left:0px;top:0px;background-color:none;text-align:left;
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
		<td style="position:absolute; left:150px; top:100px;font-size:40px;"><font color="white">Movies</td>
		<td style="position:absolute; left:550px; top:100px;font-size:35px;"><font color="white">Show Timings</td>
		<td style="position:absolute; left:950px; top:100px;font-size:35px;"><font color="white">No. of Tickets Booked</td>
		<td style="text-decoration:none; background-color:black;font-size:20px;color:White;position:absolute; left:150px; top:175px;">Interstellar</td>
		<td style="text-decoration:none; background-color:black;font-size:20px;color:White;position:absolute; left:600px; top:175px;">10:30 AM</td>
		<input type="text" name="Movie" style="position:absolute;left:1020px; top:175px;font-size:14px;font:Courier New;width:150px;"
		value="<?php echo $v11; ?>">
		<td style="text-decoration:none; background-color:black;font-size:20px;color:White;position:absolute; left:605px; top:200px;">4:50 PM</td>	
		<input type="text" name="Movie" style="position:absolute;left:1020px; top:200px;font-size:14px;font:Courier New;width:150px;"
		value="<?php echo $v21; ?>">
	
		<td style="text-decoration:none; background-color:black;font-size:20px;color:White;position:absolute; left:150px; top:250px;">Justice-League</td>
		<td style="text-decoration:none; background-color:black;font-size:20px;color:White;position:absolute; left:600px; top:250px;">9:30 AM</td>
		<input type="text" name="Movie" style="position:absolute;left:1020px; top:250px;font-size:14px;font:Courier New;width:150px;"
		value="<?php echo $v31; ?>">
		<td style="text-decoration:none; background-color:black;font-size:20px;color:White;position:absolute; left:605px; top:275px;">2:50 PM</td>	
		<input type="text" name="Movie" style="position:absolute;left:1020px; top:275px;font-size:14px;font:Courier New;width:150px;"
		value="<?php echo $v41; ?>">
		
		<td style="text-decoration:none; background-color:black;font-size:20px;color:White;position:absolute; left:150px; top:325px;">Dr. Strange</td>
		<td style="text-decoration:none; background-color:black;font-size:20px;color:White;position:absolute; left:600px; top:325px;">10:20 AM</td>
		<input type="text" name="Movie" style="position:absolute;left:1020px; top:325px;font-size:14px;font:Courier New;width:150px;"
		value="<?php echo $v51; ?>">
		<td style="text-decoration:none; background-color:black;font-size:20px;color:White;position:absolute; left:605px; top:350px;">5:10 PM</td>	
		<input type="text" name="Movie" style="position:absolute;left:1020px; top:350px;font-size:14px;font:Courier New;width:150px;"
		value="<?php echo $v61; ?>">
		
		<td style="text-decoration:none; background-color:black;font-size:20px;color:White;position:absolute; left:150px; top:400px;">Despicable Me- 3</td>
		<td style="text-decoration:none; background-color:black;font-size:20px;color:White;position:absolute; left:600px; top:400px;">11:30 AM</td>
		<input type="text" name="Movie" style="position:absolute;left:1020px; top:400px;font-size:14px;font:Courier New;width:150px;"
		value="<?php echo $v71; ?>">
		<td style="text-decoration:none; background-color:black;font-size:20px;color:White;position:absolute; left:605px; top:425px;">2:50 PM</td>	
		<input type="text" name="Movie" style="position:absolute;left:1020px; top:425px;font-size:14px;font:Courier New;width:150px;"
		value="<?php echo $v81; ?>">
	
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
		<a href="About.html" style="text-decoration:none; height:font:Courier New;width:200px;position:absolute; left:30px;  bottom:80px; background-color:black; color:white;">About Developers</a>
		<a href="Feedback.html" style="text-decoration:none; height:20px;width:150px;font:Courier New;position:absolute; left:30px; bottom:55px; background-color:black; color:white;">Feedback</a>

	</tr>
	</table>
	</div>
</body>
</html>

