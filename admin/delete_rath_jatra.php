<?php

if(isset($_GET['delete'])){
    include 'connection.inc.php';
$id=$_GET['delete'];
$delete="delete from jag_rath_jatra where id=$id";
$result=mysqli_query($connection,$delete);
if($result)
    {
    header('location:rath_jatra.php');
    }
else
    {
        echo "Some error occurred!!";
    }
}
?>