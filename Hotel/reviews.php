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
	</div>
<div id="banner1"><br><br><br><br><br>
	<h1 style="text-align: center;">Welcome Admin</h1>
	<div style="background-color: rgba(255, 255, 255, 0.7);">
	<table>
		<center>
		<?php

		if(isset($_POST['Check Out']))
		{

			$name=$row['name'];
			$message=$row['message'];
			

			$q=mysqli_query($db ,"SELECT `name`, `message` FROM `comments` ;");

			if(mysqli_num_rows($q)==0)
			{
				
			}
			else
			{
				echo "<table class='table table-bordered table-hover' >";
			  echo "<tr style='background-color: green;'>";
				//Table header
				echo "<th>"; echo "Name";	echo "</th>";
				echo "<th>"; echo "Message";  echo "</th>";
				echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['name']; echo "</td>";
				
				echo "<td>"; echo $row['message']; echo "</td>";
				echo "</tr>";
			}
		echo "</table>";

			}
		}

		else
		{
			$res=mysqli_query($db ,"SELECT `name`, `message` FROM `comments` ;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: aqua;' style='table-bordered= 4px'>";
				//Table header
				echo "<th>"; echo "Name";	echo "</th>";
				echo "<th>"; echo "Message";  echo "</th>";
				echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['message']; echo "</td>";
				echo "</tr>";
			}
		echo "</table>";
		}
		
	?>
		</center>
	</table>
	</div>
</div>
</body>
</html>
