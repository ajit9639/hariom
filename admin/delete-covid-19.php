<?php

if(isset($_GET['delete'])){
    include 'connection.inc.php';
$id=$_GET['delete'];
$delete="delete from `covid-19` where id=$id";
$result=mysqli_query($connection,$delete);
if($result)
    {
    header('location:covid-19.php');
    }
else
    {
        echo "Some error occurred!!";
    }
}
?>