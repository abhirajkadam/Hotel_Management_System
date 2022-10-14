<?php
include("connection.php");



$count=0;
$res=mysqli_query($db,"SELECT * FROM `customer` WHERE username='$_POST[username]' && password='$_POST[password]' ;");
$count=mysqli_num_rows($res);

if($count==0)
{
	echo '<script>alert("The Username and Password doesnt match")</script>';
}	
else
{
	$_SESSION['login_user']=$_POST['username'];
}	
$username = $_POST['username'];		
$password = $_POST['password'];
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
<?php


	$query = "SELECT C.id,C.rno,C.name,C.phone,C.coin,C.coout,R.type,R.p FROM `customer`AS C INNER JOIN `room` AS R ON C.rno = R.rno WHERE C.username = '".$username."' AND C.password = '".$password."';";
	$ans=mysqli_query($db, $query);	
	$row =  mysqli_fetch_assoc($ans);
		$id = $row['id'];
		$rno=$row['rno'];
		$ci = $row['coin'];
		$co = $row['coout'];

$calc_days = abs(strtotime($co) - strtotime($ci)) ; 
$calc_days =floor($calc_days / (60*60*24)  );

?>
<div id="checklist"><br><br><br><br><br>
	<p><b>Room : </b><?php echo $row["rno"]?></p>
	<p><b>Room Category : </b><?php echo $row["type"]?></p>
	<p><b>Room Price : </b>₹ <?php echo $row["p"]?></p>
	<p><b>Name : </b><?php echo $row["name"]?></p>
	<p><b>Contact No : </b><?php echo $row["phone"]?></p>
	<p><b>Check-in Date : </b><?php echo $ci ?></p>
	<p><b>Check-out Date : </b><?php echo $co ?></p>
	<p><b>Days : </b><?php echo $calc_days ?></p>
	<p><b>Total Amount Paid : </b><?php echo $row["p"] * $calc_days?></p>	
		<div>
			<div>
				<a href="checkoutpage.php?id=<?php echo $id; ?>">
				<button type="button" name="checkout" class="btn btn-primary" id="checkout">Checkout</button>
			</a>
			
			</div>
				
		</div>

</div>
</body>
</html>