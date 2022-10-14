<?php
include("connection.php");
if($_GET['id']);  
{
    $id = $_GET['id'];
    $qq = "SELECT rno FROM customer where id = ".$id.";";
    $q1 = mysqli_query($db, $qq);
    $res = mysqli_fetch_assoc($q1);
    $query = "UPDATE room SET status='unbooked' WHERE rno = ".$res['rno'];
    $query_run = mysqli_query($db, $query);
    $query = "DELETE FROM customer WHERE id='$id' "; 
    $query_run = mysqli_query($db, $query);

    if($query)
    {
        echo '<script> alert("You have checked out"); </script>';
        header('Location:comments.php');
    }   
    else
    {
       echo '<script> alert("You have not checked out"); </script>';
    } 
}
?>


