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
			<img src="img/swimming1.jpg" width="100%" height="500px">
		<div id="admin_login">
			<h1 style="text-align: center;">Welcome Admin</h1>
	<div style="background-color: rgba(255, 255, 255, 0.7);">
	<table>
			<form action="" method="post">
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
			</tr><br>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Login"></td>
			</tr>					
			</table>
			</form>
		</div>
		</div>
	</center>
	<?php 
		if (isset($_POST['submit']))
		{
			$count=0;
			$res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]' ;");
			$count=mysqli_num_rows($res);

			if($count==0)
			{
				?>
				<div class="alert alert-danger" style="width: 400px; margin-left: 550px; background-color: black; color: white">
					<strong>&nbsp &nbsp &nbsp &nbsp &nbspThe Username and Password doesn't match</strong>
				</div>
				<?php
			}	
			else
			{ 
				$_SESSION['login_user']=$_POST['username'];
				?>
					<script type="text/javascript">
						window.location="rd.php"
					</script>
				<?php
			}	
		}
	?>
</body>
</html>
