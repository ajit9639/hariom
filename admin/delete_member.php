<?php

if(isset($_GET['delete'])){
    include 'connection.inc.php';
$id=$_GET['delete'];
$delete="delete from jag_members where id=$id";
$result=mysqli_query($connection,$delete);
if($result)
    {
    header('location:members.php');
    }
else
    {
        echo "Some error occurred!!";
    }
}
?>