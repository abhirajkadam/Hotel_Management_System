<?php
include("connection.php");

$ci = isset($_POST['coin']) ? $_POST['coin'] : date('Y-m-d');
$co = isset($_POST['coout']) ? $_POST['coout'] : date('Y-m-d');

$calc_days = abs(strtotime($co) - strtotime($ci)) ; 
 $calc_days =floor($calc_days / (60*60*24));

$username = $_POST['username'];
$password = $_POST['password'];			
$rno = $_POST['room_number'];			
$test=mysqli_query($db,"INSERT INTO `CUSTOMER` ( `status`, `rno`, `name`, `phone`, `address`, `city`, `dis`, `state`, `email`, `coin`, `coout`, `members`, `username`, `password`) VALUES ('$_POST[status]','$_POST[room_number]','$_POST[name]','$_POST[phone]','$_POST[address]','$_POST[city]','$_POST[dis]','$_POST[state]','$_POST[email]','$_POST[coin]','$_POST[coout]','$_POST[members]','$_POST[username]','$_POST[password]')");
	$query = "update room set status='booked' where rno=".$rno.";";
	mysqli_query($db, $query);	
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
	{
		// $sql="SELECT customer.id,rno,name,phone,coin,coout,room.rno,type,p FROM customer inner join room WHERE username = $username and password = $password";
	
	$query = "SELECT C.id,C.rno,C.name,C.phone,C.coin,C.coout,R.type,R.p FROM `customer`AS C INNER JOIN `room` AS R ON C.rno = R.rno WHERE C.username = '".$username."' AND C.password = '".$password."';";
	$ans=mysqli_query($db, $query);	
	$res =  mysqli_fetch_assoc($ans);
		// $res = mysqli_query($db,$res);	
		$id = $res['id'];
		$rno = $res['rno'];
	}	
?>
<div id="checklist"><br><br><br><br><br>
	<p><b>Room : </b><?php echo $res["rno"]?></p>
	<p><b>Room Category : </b><?php echo $res["type"]?></p>
	<p><b>Room Price : </b>₹ <?php echo $res["p"]?></p>
	<p><b>Name : </b><?php echo $res["name"]?></p>
	<p><b>Contact No : </b><?php echo $res["phone"]?></p>
	<p><b>Check-in Date : </b><?php echo $ci ?></p>
	<p><b>Check-out Date : </b><?php echo $co ?></p>
	<p><b>Days : </b><?php echo $calc_days ?></p>
	<p><b>Total Amount : </b><?php echo $res["p"] * $calc_days?></p>
<?php
?>
	
		<div>
				<div>
					<a href="PaytmKit/TxnTest.php">
					<button type="payment" class="payment" name="payment" id="payment" value="payment">Payment</button>
				</a>
				</div>
				
		</div>
		<?php
			if (isset($_POST['payment']))
			{
				header('Location:PaytmKit/TxnTest.php');
			}
		?>
</div>
</body>
</html>