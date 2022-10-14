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

		if(isset($_POST['Check Out']))
		{

			$rno=$row['rno'];
			$type=$row['type'];
			$p=$row['p'];
			$status=$row['status'];

			$q1="select * from room where status='unbooked'";
			$run=mysqli_query($db,$q1);
			$row=mysqli_fetch_array($run);
			$rno=$row['rno'];

			$q=mysqli_query($db ,"SELECT `rno`, `type`,`size`, `p`, `status` FROM `room` ;");
			mysqli_query($db,"update room set status='unbooked' where rno=$rno");

			if(mysqli_num_rows($q)==0)
			{
				
			}
			else
			{
				echo "<table class='table table-bordered table-hover' >";
			  echo "<tr style='background-color: green;'>";
				//Table header
				echo "<th>"; echo "Room";	echo "</th>";
				echo "<th>"; echo "Room Type/Category";  echo "</th>";
				echo "<th>"; echo "Room Size(sq.ft)";  echo "</th>";
				echo "<th>"; echo "Price(₹)";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
		?>
			<th width="25%" height="50px">Options</th>
		<?php
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['rno']; echo "</td>";
				echo "<td>"; echo $row['type']; echo "</td>";
				echo "<td>"; echo $row['size']; echo "</td>";
				echo "<td>"; echo $row['p']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";

			?>
			<td><a style="color: black;" href=" rno=<?php echo $rno; ?>"></a></td>
		<?php
		
				echo "</tr>";
			}
		echo "</table>";

			}
		}

		else
		{
			$res=mysqli_query($db,"SELECT `rno`, `type`,`size`, `p`, `status` FROM `room`;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: aqua;' style='table-bordered= 4px'>";
				//Table header
				echo "<th>"; echo "Room";	echo "</th>";
				echo "<th>"; echo "Room Type/Category";  echo "</th>";
				echo "<th>"; echo "Room Size(sq.ft)";  echo "</th>";
				echo "<th>"; echo "Price(₹)";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
		?>
			
		<?php

			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				
				echo "<td>"; echo $row['rno']; echo "</td>";
				echo "<td>"; echo $row['type']; echo "</td>";
				echo "<td>"; echo $row['size']; echo "</td>";
				echo "<td>"; echo $row['p']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";

			?>
			
			<?php
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
