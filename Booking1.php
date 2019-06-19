<?php
	session_start();
	$T = $_SESSION["T_Time"];
	echo $T;
	$message = "This seat is already booked, Please try another one";
	echo "<script type='text/javascript'>alert('$message');</script>";
	?>
<!Doctype Html>
<html>
<head>
	<title>PHOENIX-Select Seats</title>
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
	<a href="Home.html" style="text-decoration:none; background-color: #000000; height:50px;width:215px;position:absolute; left:1150px; top:0px; background-color:none;color: white;
	font:Courier New">LOGOUT</a>
	
	</div>
	
	<div id="Two">
	
	<form action="Booking.php" method="POST" id="form2">
	
		<table>
		<td style="position:absolute; left:70px; top:100px;font-size:40px;background-color:none;"><font color="white">A</td>
		<td style="position:absolute; left:70px; top:200px;font-size:40px;background-color:none;"><font color="white">B</td>
		<td style="position:absolute; left:70px; top:300px;font-size:40px;background-color:none;"><font color="white">C</td>
		<td style="position:absolute; left:70px; top:400px;font-size:40px;background-color:none;"><font color="white">D</td>
		
		<td style="position:absolute; left:310px; top:70px;font-size:18px;"><font color="white">A: Platinum</td>
		<td style="position:absolute; left:310px; top:180px;font-size:18px;"><font color="white">B C D: Standard</td>
		
		<input type="checkbox" name="seat[]" class="checkbox" value="1" style="position:absolute; left:300px; top:100px;"><br>
		<td style="position:absolute; left:320px; top:100px;font-size:40px;background-color:none;"><font color="white">1</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="2" style="position:absolute; left:450px; top:100px;"><br>
		<td style="position:absolute; left:470px; top:100px;font-size:40px;background-color:none;"><font color="white">2</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="3" style="position:absolute; left:600px; top:100px;"><br>
		<td style="position:absolute; left:620px; top:100px;font-size:40px;background-color:none;"><font color="white">3</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="4" style="position:absolute; left:750px; top:100px;"><br>
		<td style="position:absolute; left:770px; top:100px;font-size:40px;background-color:none;"><font color="white">4</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="5" style="position:absolute; left:900px; top:100px;"><br>
		<td style="position:absolute; left:920px; top:100px;font-size:40px;background-color:none;"><font color="white">5</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="6" style="position:absolute; left:1050px; top:100px;"><br>
		<td style="position:absolute; left:1070px; top:100px;font-size:40px;background-color:none;"><font color="white">6</td>
		
		<button class="button"  
		style="height:0px;width:1016px;position:absolute; left:200px; top:170px; background-color:Black; color:black;">
		<b></button>
		
		<input type="checkbox" name="seat[]" class="checkbox" value="7" style="position:absolute; left:200px; top:200px;"><br>
		<td style="position:absolute; left:220px; top:200px;font-size:40px;background-color:none;"><font color="white">7</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="8" style="position:absolute; left:300px; top:200px;"><br>
		<td style="position:absolute; left:320px; top:200px;font-size:40px;background-color:none;"><font color="white">8</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="9" style="position:absolute; left:500px; top:200px;"><br>
		<td style="position:absolute; left:520px; top:200px;font-size:40px;background-color:none;"><font color="white">9</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="10" style="position:absolute; left:600px; top:200px;"><br>
		<td style="position:absolute; left:620px; top:200px;font-size:40px;background-color:none;"><font color="white">10</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="11" style="position:absolute; left:700px; top:200px;"><br>
		<td style="position:absolute; left:720px; top:200px;font-size:40px;background-color:none;"><font color="white">11</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="12" style="position:absolute; left:800px; top:200px;"><br>
		<td style="position:absolute; left:820px; top:200px;font-size:40px;background-color:none;"><font color="white">12</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="13" style="position:absolute; left:1050px; top:200px;"><br>
		<td style="position:absolute; left:1070px; top:200px;font-size:40px;background-color:none;"><font color="white">13</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="14" style="position:absolute; left:1150px; top:200px;"><br>
		<td style="position:absolute; left:1170px; top:200px;font-size:40px;background-color:none;"><font color="white">14</td>

		<input type="checkbox" name="seat[]" class="checkbox" value="15" style="position:absolute; left:200px; top:300px;"><br>
		<td style="position:absolute; left:220px; top:300px;font-size:40px;background-color:none;"><font color="white">15</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="16" style="position:absolute; left:300px; top:300px;"><br>
		<td style="position:absolute; left:320px; top:300px;font-size:40px;background-color:none;"><font color="white">16</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="17" style="position:absolute; left:500px; top:300px;"><br>
		<td style="position:absolute; left:520px; top:300px;font-size:40px;background-color:none;"><font color="white">17</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="18" style="position:absolute; left:600px; top:300px;"><br>
		<td style="position:absolute; left:620px; top:300px;font-size:40px;background-color:none;"><font color="white">18</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="19" style="position:absolute; left:700px; top:300px;"><br>
		<td style="position:absolute; left:720px; top:300px;font-size:40px;background-color:none;"><font color="white">19</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="20" style="position:absolute; left:800px; top:300px;"><br>
		<td style="position:absolute; left:820px; top:300px;font-size:40px;background-color:none;"><font color="white">20</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="21" style="position:absolute; left:1050px; top:300px;"><br>
		<td style="position:absolute; left:1070px; top:300px;font-size:40px;background-color:none;"><font color="white">21</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="22" style="position:absolute; left:1150px; top:300px;"><br>
		<td style="position:absolute; left:1170px; top:300px;font-size:40px; background-color:none;"><font color="white">22</td>
		
		<input type="checkbox" name="seat[]" class="checkbox" value="23" style="position:absolute; left:200px; top:400px;"><br>
		<td style="position:absolute; left:220px; top:400px;font-size:40px;background-color:none;"><font color="white">23</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="24" style="position:absolute; left:300px; top:400px;"><br>
		<td style="position:absolute; left:320px; top:400px;font-size:40px;background-color:none;"><font color="white">24</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="25" style="position:absolute; left:500px; top:400px;"><br>
		<td style="position:absolute; left:520px; top:400px;font-size:40px;background-color:none;"><font color="white">25</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="26" style="position:absolute; left:600px; top:400px;"><br>
		<td style="position:absolute; left:620px; top:400px;font-size:40px;background-color:none;"><font color="white">26</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="27" style="position:absolute; left:700px; top:400px;"><br>
		<td style="position:absolute; left:720px; top:400px;font-size:40px;background-color:none;"><font color="white">27</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="28" style="position:absolute; left:800px; top:400px;"><br>
		<td style="position:absolute; left:820px; top:400px;font-size:40px;background-color:none;"><font color="white">28</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="29" style="position:absolute; left:1050px; top:400px;"><br>
		<td style="position:absolute; left:1070px; top:400px;font-size:40px;background-color:none;"><font color="white">29</td>
		<input type="checkbox" name="seat[]" class="checkbox" value="30" style="position:absolute; left:1150px; top:400px;"><br>
		<td style="position:absolute; left:1170px; top:400px;font-size:40px; background-color:none;"><font color="white">30</td>

		<button class="button"   value="Submit"
		style="height:20px;width:1016px;position:absolute; left:200px; bottom:180px; background-color:black; color:white;font-size:18px;">
		<b>S C R E E N</button>
		</table>
		<input name="Seat" type="Submit" value="Confirm Booking" style="text-decoration:none; height:30px;width:170px;position:absolute; left:1050px; bottom:120px; align:center; font-size:20px; background-color:red; color:black;
		font:Courier New;border:0px">Confirm Booking</input>

	
	</form>
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
		<a href="Feedback.php" style="text-decoration:none; height:20px;width:150px;font:Courier New;position:absolute; left:30px; bottom:55px; background-color:black; color:white;">Feedback</a>

	</tr>
	</table>
	</div>
</body>
</html>