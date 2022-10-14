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
		
		<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db ,"SELECT `id`,`rno`, `name`, `phone`, `address`, `city`, `dis`, `state`, `email`, `coin`, `coout`, `members`,`username` FROM `customer` ;");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No customer found with that name. Try searching again.";
			}
			else
			{
				echo "<table class='table table-bordered table-hover' >";
			  echo "<tr style='background-color: red;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Room No";	echo "</th>";
				echo "<th>"; echo "Name";  echo "</th>";
				echo "<th>"; echo "Contact No";  echo "</th>";
				echo "<th>"; echo "Address";  echo "</th>";
				echo "<th>"; echo "City";  echo "</th>";
				echo "<th>"; echo "District";  echo "</th>";
				echo "<th>"; echo "State";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "Check-In";  echo "</th>";
				echo "<th>"; echo "Check-Out";  echo "</th>";
				echo "<th>"; echo "Members";  echo "</th>";
				echo "<th>"; echo "Username";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['id']; echo "</td>";
				echo "<td>"; echo $row['rno']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['phone']; echo "</td>";
				echo "<td>"; echo $row['address']; echo "</td>";
				echo "<td>"; echo $row['city']; echo "</td>";
				echo "<td>"; echo $row['dis']; echo "</td>";
				echo "<td>"; echo $row['state']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['coin']; echo "</td>";
				echo "<td>"; echo $row['coout']; echo "</td>";
				echo "<td>"; echo $row['members']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
			}
		}

		else
		{
			$res=mysqli_query($db,"SELECT `id`,`rno`, `name`, `phone`, `address`, `city`, `dis`, `state`, `email`, `coin`, `coout`, `members`,`username` FROM `customer`;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: aqua;' style='table-bordered= 4px'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Room No";	echo "</th>";
				echo "<th>"; echo "Name";  echo "</th>";
				echo "<th>"; echo "Contact No";  echo "</th>";
				echo "<th>"; echo "Address";  echo "</th>";
				echo "<th>"; echo "City";  echo "</th>";
				echo "<th>"; echo "District";  echo "</th>";
				echo "<th>"; echo "State";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "Check-In";  echo "</th>";
				echo "<th>"; echo "Check-Out";  echo "</th>";
				echo "<th>"; echo "Members";  echo "</th>";
				echo "<th>"; echo "Username";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				
				echo "<td>"; echo $row['id']; echo "</td>";
				echo "<td>"; echo $row['rno']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['phone']; echo "</td>";
				echo "<td>"; echo $row['address']; echo "</td>";
				echo "<td>"; echo $row['city']; echo "</td>";
				echo "<td>"; echo $row['dis']; echo "</td>";
				echo "<td>"; echo $row['state']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['coin']; echo "</td>";
				echo "<td>"; echo $row['coout']; echo "</td>";
				echo "<td>"; echo $row['members']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		}

	?>
	</table>
	</div>
</div>
</body>
</html>
