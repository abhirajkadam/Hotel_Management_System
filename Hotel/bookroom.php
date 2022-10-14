<?php
	include("connection.php");


	$test=mysqli_query($db,"INSERT INTO `CUSTOMER` ( `status`, `rno`, `name`, `phone`, `address`, `city`, `dis`, `state`, `email`, `coin`, `coout`, `members`, `username`, `password`) VALUES ('$_POST[status]','$_POST[room_number]','$_POST[name]','$_POST[phone]','$_POST[address]','$_POST[city]','$_POST[dis]','$_POST[state]','$_POST[email]','$_POST[coin]','$_POST[coout]','$_POST[members]','$_POST[username]','$_POST[password]');");
	echo($test);
	if ($test){
		header('Location:checkinlist.php');
	}
	else{
		header('Location:r1.php');
	}
?>