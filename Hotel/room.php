<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Project (Hotel Management)</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
	<style><?php include "style.css" ?></style>
</head>
<body>
	<div id="full">
		<div id="header">
				<div id="logo">
					<h1><font color="whitesmoke">Emerald Bay Inn</font></h1>
				</div>
				<div id="nav">
					<ul>
						<li><h3><a href="room.php">Room Update</a></h3></li>
						<li><h3><a href="booking.php">Booking</a></h3></li>
						<li><h3><a href="rd.php">Room Details</a></h3></li>
						<li><h3><a href="reviews.php">Reviews</a></h3></li>
						<li><h3><a href="Cindex.php">Customer Home</a></h3></li>
					</ul>
				</div>
		</div>
		<div id="banner1">
			<center><div id="form"><br><br><br><br>			
			<table>
				<form action="" method="post">
				<tr>
					<td>Room Number</td>
					<td><input type="text" name="rno" placeholder="Enter Room Number" title="Enter Room Number"></td>
					
				</tr>
				<tr>
					<td>Room Type/Category</td>
					<td><input type="text" name="type" placeholder="Enter Room Type" title="Enter Room Type"></td>
				</tr>
				<tr>
					<td>Room Size(sq.ft)</td>
					<td><input type="text" name="size" placeholder="Enter Room Size" title="Enter Room Size"></td>
				</tr>
				<tr>
					<td>Room Price(₹)</td>
					<td><input type="text" name="p" placeholder="Enter Room Price" title="Enter Room Price"></td>
				</tr>
				<tr>
					<td>Status</td>
					<td><input type="text" name="status" placeholder="Enter Status" title="Enter Status"></td>
				</tr>
				<tr>
					<td>
						<input class="btn btn-default" type="submit" name="submit" value="Submit"></input>
					</td>
				</tr>
			</table> 
				</form>
			</div></center>
		</div>
	</div>
	<?php 
		if (isset($_POST['submit']))
		{
			mysqli_query($db,"INSERT INTO `room` VALUES ('$_POST[rno]', '$_POST[type]','$_POST[size]', '$_POST[p]', '$_POST[status]');");		
		}
	?>
</body>
</html>
