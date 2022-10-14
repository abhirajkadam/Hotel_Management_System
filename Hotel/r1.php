<?php
include("connection.php");
$days = $_GET["cal_days"];
$ci = $_GET["checkin_date"];
$co = $_GET["checkout_date"];
$rno = $_GET["room_no"];
if (isset($_POST['submit']))
{
	header('Location:checkinlist.php');
}			
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
						<li><h3><a href="Cindex.php">Home</a></h3></li>
						
						<li><h3><a href="ourhotel.php">Our Hotel</a></h3></li>
					 	<li><h3><a href="contact.php">Contact Us</a></h3></li>

						<li><h3><a href="Clogin.php">Customer Login</a></h3></li>
						<li><h3><a href="Alogin.php">Admin Login</a></h3></li>
					</ul>
				</div>
		</div>
		<div id="banner1">
			<div id="form"><br><br><br><br>
				<h2><center>Registration</h2></center>
				<form action="checkinlist.php" method="POST">			
				<table>

				<tr>
					<td>Status</td>
					<td><input type="text" name="status" value="Available" title="Status"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" placeholder="Enter Name" title="Name" required></td>
					<td>Contact No</td>
					<td><input type="text" name="phone" placeholder="Enter Contact No" title="Contact"  required></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="address" placeholder="Enter Address" title="Address" required></td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text" name="city" placeholder="Enter City" title="City" required></td>
				</tr>
				<tr>
					<td>District</td>
					<td><input type="text" name="dis" placeholder="Enter District" title="District" required></td>
				</tr>
				<tr>
					<td>State</td>
					<td><input type="text" name="state" placeholder="Enter State" title="State" required></td>
				</tr>
				<tr>
					<td>Enter Email</td>
					<td><input type="text" name="email" placeholder="Enter Email" title="E-mail" required></td>
				</tr>
				<tr>
					<td>Check-In Date</td>
					<td><input type="text" name="coin" title="Check-In" value="<?php echo $ci ?>"></td>
					<td>Check-Out Date</td>
					<td><input type="text" name="coout" title="Check-Out" value="<?php echo $co ?>"></td>
				</tr>
				<tr>
					<td>Days Of Stay</td>
					<td><input type="number" min ="1" name="days" id="days" class="form-control" value="<?php echo $days ?>" required></td>
				</tr>
				<tr>
					<td>Enter Members</td>
					<td><input type="text" name="members" placeholder="Enter Members" title="Members" required></td>
				</tr>
				<tr>
					<td>Room Number</td>
					<td><input type="number" name="room_number" title="Room Number" value="<?php echo $rno ?>" required></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" placeholder="Enter Username" title="Username" required></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" placeholder="Enter Password" id="myInput" title="Password"required>
						<input type="checkbox" onclick="myFunction()">Show Password
						
						<script>
						function myFunction() {
						  var x = document.getElementById("myInput");
						  if (x.type === "password") {
						    x.type = "text";
						  } else {
						    x.type = "password";
						  }
						}
						</script>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="submit" style=" width: 100px; height: 30px;">
					</td>
				</tr>			
				
			</table>
		</form>
			</div>

		</div>
	</div>
</body>
</html>
