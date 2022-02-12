<?php

if(isset($_GET['delete'])){
    include 'connection.inc.php';
$id=$_GET['delete'];
$delete="delete from jag_seva_booking where con_id=$id";
$result=mysqli_query($connection,$delete);
if($result)
    {
    header('location:seva_booking.php');
    }
else
    {
        echo "Some error occurred";
    }
}
?>