<?php
	session_start();
	$db = mysqli_connect("localhost" , "root" , "" , "phoenix");
	
	$sql = "SELECT feedback.Username,feedback.Comments FROM feedback ";
	$result = mysqli_query($db,$sql);
	if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
	
	}

?>
<!Doctype Html>
<html>
<head>
	<title>PHOENIX-Feedback</title>
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
	
	<div id="Two" style="top 150px;">
	<table width="260px" align="center" border="2" cellpadding="3" cellspacing="1" bgcolor="black" color="White" >
	<tr style="position:absolute; left:400px; top:100px;font-size:20px;">
              <th><font color="white">Username</th>
              <th><font color="white">Comments</th>
    </tr>
    <tr>
              <?php
                If(mysqli_num_rows($result)>0)
                {
                    while($row=mysqli_fetch_array($result))
                    {  
                ?>
				<tr style="position:absolute;left:400px;top:150px">
                  <td><input type="text" name="Username" style="font-size:14px;font:Courier New;width:150px;"
						value="<?php echo $row['Username']; ?>"></td> 
                  <td><input type="text" name="Username" style="font-size:14px;font:Courier New;width:150px;"
						value="<?php echo $row['Comments']; ?>"></td> 
                </tr>
				<?php
					}
                }
                 ?>
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

