<?php

if(isset($_GET['delete'])){
    include 'connection.inc.php';
$id=$_GET['delete'];
$delete="delete from jag_volunteer where id=$id";
$result=mysqli_query($connection,$delete);
if($result)
    {
    header('location:volunteer.php');
    }
else
    {
        echo "Some error occurred!!";
    }
}
?>