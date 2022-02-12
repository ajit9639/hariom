<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
 $connection=mysqli_connect('localhost','root',"","Hariom_db");
    //$connection=mysqli_connect('localhost','root',"","shreejagannathdh_db_new");
    //  $connection=mysqli_connect('localhost','shreejagannathdh_shreejagannathdham','Shree@123','shreejagannathdh_shreejagannathdham');
		/*if($connection){
     echo"Connection Establish successfully";
}
else{
    echo"Somthing is error";
} */

?>