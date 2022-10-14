<?php
include("connection.php");

$ci = isset($_POST['ci']) ? $_POST['ci'] : date('Y-m-d');
$co = isset($_POST['co']) ? $_POST['co'] : date('Y-m-d');
$calc_days = abs(strtotime($co) - strtotime($ci)) ; 
 $calc_days =floor($calc_days / (60*60*24)  );

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
        </div><br><br><br><br><br><br>
       <div class="row">
        <div class="col-md-12">
            <h2>Room Booking Page</h2>
        </div>
       
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"ak");
                $query = "select * from room where status='unbooked'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <form action="r1.php" method="GET">
                        <input type="number" name="room_no" class="card-header" value="<?php echo $row["rno"]?>" hidden>Room No: <?php echo $row["rno"]?></div><br>  
                        <input type="text" name="room_type" value="<?php echo $row["type"]?>" hidden>Room Type: </b><?php echo $row["type"]?></p>
                        <input type="text" name="room_price" value="<?php echo $row["p"]?>" hidden>Room Price: </b>₹ <?php echo $row["p"]?></p>
                        <input type="text" name="checkin_date" value="<?php echo $ci?>" hidden>Room Checkin Date: </b><?php echo $ci?></p>
                        <input type="text" name="checkout_date" value="<?php echo $co?>" hidden>Room Checkout Date: </b> <?php echo $co?></p>
                        <input type="text" name="cal_days" value="<?php echo $calc_days?>" hidden>Total Days: </b> <?php echo $calc_days?></p>
                        <input type="number" name="total_price" value="<?php echo $row["p"] * $calc_days?>" hidden>Effective Price: </b>₹ <?php echo $row["p"] * $calc_days?></p>
                        <input type="submit" name="submit"></td>      
                        <br><br><br>
                        </div>
                    </form> 
                    </div>
                    </div>      
                    <?php 
                }   
            ?>
          

        </div>
        <br><br><br><br><br><br>

        </div>
        </body>
</html>
        