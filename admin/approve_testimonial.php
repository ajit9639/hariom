<?php
include 'function.inc.php';
include 'connection.inc.php';

    $id = $_GET['id'];
    $status = $_GET['status'];
   	if($status=='Approved')
    	{
    		$update = "UPDATE `jag_testimonial` SET `status`='Pending' WHERE `id`='$id'";
        }
     else
     	{
    		$update = "UPDATE `jag_testimonial` SET `status`='Approved' WHERE `id`='$id'";
        }
     $result = mysqli_query($connection, $update);
    if($result)
    {
        header('location: testimonials.php');
    }

    
?>
