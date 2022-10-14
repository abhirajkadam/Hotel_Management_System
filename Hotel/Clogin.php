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
						<li><h3><a href="Cindex.php">Home</a></h3></li>
						
						<li><h3><a href="ourhotel.php">Our Hotel</a></h3></li>
					 	<li><h3><a href="contact.php">Contact Us</a></h3></li>

						<li><h3><a href="Clogin.php">Customer Login</a></h3></li>
						<li><h3><a href="Alogin.php">Admin Login</a></h3></li>
					</ul>
				</div>
			</div>
	</div>
	<center>
			<img src="img/bed1.jpg" width="100%" height="500px">
		<div id="c_login">
			<h1 style="text-align: center;">Welcome Customer</h1>
	<div style="background-color: rgba(255, 255, 255, 0.7);">
	<table>
			<form action="checkoutlist.php" method="POST">
			<table>
			<tr>
				<td width="50%" height="50px">Username</td>
				<td width="50%" height="50px"><input type="text" name="username" placeholder="Enter Username" title="Enter Username" name="" required></td>
			</tr><br>
			<tr>
				<td width="50%" height="50px">Password</td>
				<td width="50%" height="50px"><input type="password" name="password" id="myInput" placeholder="Enter Password" title="Enter Password" required><br>
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
						</script></td>
					</td>
			</tr><br>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Login"></td>
			</tr>					
			</table>
			</form>
		</div>
		</div>
	</center>
</body>
</html>
