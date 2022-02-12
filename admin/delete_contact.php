<?php

if(isset($_GET['delete'])){
    include 'connection.inc.php';
$id=$_GET['delete'];
$delete="delete from jag_contact where con_id=$id";
$result=mysqli_query($connection,$delete);
if($result)
    {
    header('location:contact.php');
    }
else
    {
        echo "Some error occurred";
    }
}
?>