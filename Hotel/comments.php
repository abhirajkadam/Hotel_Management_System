<?php
include("connection.php");

if (isset($_POST['submit']))
{
    header('Location:Cindex.php');
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
    <div id="comment1">
        <h1>Mention Something About Your Stay!</h1>
    <div id="wrapper" class="wrapper">
        <form action="" method="post" class="form">
            <input id="name" type="text" class="name" name="name" placeholder="Name">
            <br>
            <textarea id="message" name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
            <br>
            <input id="button1" class="btn btn-default" type="submit" name="submit" value="Post Comment"></input>
        </form>
    </div>

    <div id="content1" class="content">
        <h3>Thank You Customer</h3>
        <p>Staff of Emerald Bay Inn have done their best to serve you better, We want you to give a review about your experience of stay. And please do stay in our hotel on your next trip.</p>
        <p><a href="Cindex.php">[Go To Main Page]</a></p>
    </div>
    </div>
</div>
    <?php 
            if (isset($_POST['submit']))
            {
                mysqli_query($db,"INSERT INTO `COMMENTS` VALUES ('$_POST[name]', '$_POST[message]');");
            }
    ?>
</body>
</html>