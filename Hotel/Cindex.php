<?php
if (isset($_POST['submit']))
{
	header('Location:availableroom.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Project (Hotel Management)</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
<style><?php include "style.css" ?></style>
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn').click(function(){
				$('#nav').slideToggle();
			});
		});
	</script>

</head>
<body>
	<div id="full">

			<div id="header">
				<div id="logo">
					<h1><font color="whitesmoke">Emerald Bay Inn</font></h1>
				</div>
				<div  id="btn"><button>|||</button></div>
				<div id="nav">
					<ul>
						<li><h3><a href="Cindex.php">Home</a></h3></li>
						
						<li><h3><a href="ourhotel.php">Our Hotel</a></h3></li>
					 	<li><h3><a href="contact.php">Contact Us</a></h3></li>

						<li><h3>&nbsp<a href="Clogin.php">Customer Login</a></h3></li>
						<li><h3><a href="Alogin.php">Admin Login</a></h3></li>
					</ul>
				</div>
			</div>
		
			<img src="img/entrance.jpg" width="100%" height="600px" >
	</div>
		<div id="f1">
			<form action="availableroom.php" method="POST">
			<center><table>
				<tr>
					<th width="20%" height="50px">Destination</th>
					<th width="20%" height="50px">Check In Date</th>
					<th width="20%" height="50px">Check Out Date</th>
					<th width="20%" height="50px">Room</th>
					<td rowspan="2"><input type="submit" value="Check" name="submit"></td>
				</tr>
				<tr>
					<td width="20%" height="50px"><center><input type="text" name="d1" placeholder="Enter Destination" required></center></td>
					<td width="20%" height="50px"><center><input type="date" class="form-control datepicker" name="ci" required></center></td>
					<td width="20%" height="50px"><center><input type="date" class="form-control datepicker" name="co" required></center></td>
					<td width="20%" height="50px">
						<center><select name="room">
							<option>1</option>
							<option>2</option>
							
							<option>3</option>
						</select></center>
					</td>
				</tr>
			</table></center>
			</form>
		</div>
	<div id="welcome">
		<h1 align="center">Welcome To My Hotel</h1>
		<center><font size="4">
			We are delighted that you have selected our hotel.On behalf of the entire team at the Hotel Emerald Bay Inn, I extend you a very warm
			welcome and trust your stay with us will be both enjoyable and comfortable.
			At Emerald Bay Inn, we promise to serve you better. We want to be attentive
			and sensitive to your needs. We also seek to be innovative in meeting and also
			exceeding your expectations.<br> May I take this opportunity to thank you for having
			chosen the Hotel Emerald Bay Inn and we look forward to serving you again in the near 
			future.
		</font>
		<h2 style="color: black;">Our Facilities</h2>
	</center>
	</div>
	<div id="g1">
		<div id="one"><img src="img/parking.jpg" width="100%" >
			<center>
				<h2>Basement Parking</h2>
				People in a rush can also block others<br> in when they don't have time to look for a space. After<br> doing so, they spend the day unfocused and unproductive<br> worrying about who might be blocked in by their car.<br> It makes much more land available for<br> non-parking uses.<br>
				<font color="red">Read More</font>
			</center>
		</div>
		<div id="two"><img src="img/breakfast2.jpg" width="100%">
			<center>
				<h2>Healthy Breakfast</h2>
				Breakfast provides a lot of your day's total nutrient<br> intake. In fact, people who eat breakfast are more likely<br> to meet their recommended daily intakes of vitamins <br>and minerals than people who don't.<br>
				<font color="red">Read More</font>
			</center>
		</div>
		<div id="three"><img src="img/bed2.jpg" width="100%" height="278px">
			<center>
				<h2>Clean Rooms</h2>
				The bedroom is the place where you start and end each day<br> and you’ll see how important it is to keep it neat and<br> organized.Cleaned and organized room will bring some health<br> benefits. Clean room just helps you sleep better.<br>
				<font color="red">Read More</font>
			</center>
		</div>
	</div>


</body>
</html>
