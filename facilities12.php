
<?php include "./include/header.php";
include "db.php";

$about_query1 = "SELECT * FROM `jag_chairman`where `description`='MELTING'";
$about_display1 = mysqli_query($connection, $about_query1);


$about_query2 = "SELECT * FROM `jag_chairman`where `description`='MOULDING'";
$about_display2 = mysqli_query($connection, $about_query2);


$about_query3 = "SELECT * FROM `jag_chairman`where `description`='INSPECTION'";
$about_display3 = mysqli_query($connection, $about_query3);

$about_query4 = "SELECT * FROM `jag_chairman`where `description`='CARRIER MACHINES'";
$about_display4 = mysqli_query($connection, $about_query4);

$about_query5 = "SELECT * FROM `jag_chairman`where `description`='FETTLING & PAINTING'";
$about_display5 = mysqli_query($connection, $about_query5);

$about_query6 = "SELECT * FROM `jag_chairman`where `description`='AUXILLARY MACHINE'";
$about_display6 = mysqli_query($connection, $about_query6);

$about_query7 = "SELECT * FROM `jag_chairman`where `description`='POLLUTION CONTROL & RAIN WATER HARVESTING'";
$about_display7 = mysqli_query($connection, $about_query7);
//$about_result = mysqli_fetch_assoc($about_display);

?>
       <style>
.team {
    padding: 0px 0 15px 0!important;
}
         .price .price-header h3{
         color: #0a0937;
    font-size: 30px;
         }
</style> 
        
      <img src="img/facilities.jpg" style="width:100%"/>  
        
        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Facilities</p>
                    <!-- <h2>Premium Washing Services</h2> -->
                </div>
              
              
              
              
              			<div class="price" style="padding: 0px;">
            			  <div class="price-header" style="padding: 0px;">
                                <h3>MELTING</h3>
                          </div></div>
              
              
              
                <div class="row">
                  <?php while($about_result1 = mysqli_fetch_assoc($about_display1)){?>
                    <div class="col-md-4">
                        <div class="service-item team">
                               <img style="" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result1['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                          <div class="team-text">
                      <h2><?php echo $about_result1['title'];?></h2>                        
                     </div>   
                          <p></p>
                            <p><?php// echo $about_result['description'];?></p>
                        </div>
                    </div>
<?php }?>
                 
                </div>
              
              
              
              
              <div class="price" style="padding: 0px;">
            			  <div class="price-header" style="padding: 0px;">
                                <h3>MOULDING</h3>
                          </div></div>
              
              
              
                <div class="row">
                  <?php while($about_result2 = mysqli_fetch_assoc($about_display2)){?>
                    <div class="col-md-4">
                        <div class="service-item team">
                               <img style="" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result2['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                          <div class="team-text">
                      <h2><?php echo $about_result2['title'];?></h2>                        
                     </div>   
                          <p></p>
                            <p><?php// echo $about_result['description'];?></p>
                        </div>
                    </div>
<?php }?>
                 
                </div>
              
              
              
              
              
              
              
              
              <div class="price" style="padding: 0px;">
            			  <div class="price-header" style="padding: 0px;">
                                <h3>INSPECTION</h3>
                          </div></div>
              
              
              
                <div class="row">
                  <?php while($about_result3 = mysqli_fetch_assoc($about_display3)){?>
                    <div class="col-md-4">
                        <div class="service-item team">
                               <img style="" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result3['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                          <div class="team-text">
                      <h2><?php echo $about_result3['title'];?></h2>                        
                     </div>   
                          <p></p>
                            <p><?php// echo $about_result['description'];?></p>
                        </div>
                    </div>
<?php }?>
                 
                </div>
              
              
              
              
              
              
              
              
              <div class="price" style="padding: 0px;">
            			  <div class="price-header" style="padding: 0px;">
                                <h3>CARRIER MACHINES</h3>
                          </div></div>
              
              
              
                <div class="row">
                  <?php while($about_result4 = mysqli_fetch_assoc($about_display4)){?>
                    <div class="col-md-4">
                        <div class="service-item team">
                               <img style="" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result4['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                          <div class="team-text">
                      <h2><?php echo $about_result4['title'];?></h2>                        
                     </div>   
                          <p></p>
                            <p><?php// echo $about_result['description'];?></p>
                        </div>
                    </div>
<?php }?>
                 
                </div>
              
              
              
              
              
              
              
              <div class="price" style="padding: 0px;">
            			  <div class="price-header" style="padding: 0px;">
                                <h3>FINISHING</h3>
                          </div></div>
              
              
              
                <div class="row">
                  <?php while($about_result5 = mysqli_fetch_assoc($about_display5)){?>
                    <div class="col-md-4">
                        <div class="service-item team">
                               <img style="" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result5['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                          <div class="team-text">
                      <h2><?php echo $about_result5['title'];?></h2>                        
                     </div>   
                          <p></p>
                            <p><?php// echo $about_result['description'];?></p>
                        </div>
                    </div>
<?php }?>
                 
                </div>
              
              
              
              
              <div class="price" style="padding: 0px;">
            			  <div class="price-header" style="padding: 0px;">
                                <h3>AUXILLARY MACHINE</h3>
                          </div></div>
              
              
              
                <div class="row">
                  <?php while($about_result6 = mysqli_fetch_assoc($about_display6)){?>
                    <div class="col-md-4">
                        <div class="service-item team">
                               <img style="" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result6['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                          <div class="team-text">
                      <h2><?php echo $about_result6['title'];?></h2>                        
                     </div>   
                          <p></p>
                            <p><?php// echo $about_result['description'];?></p>
                        </div>
                    </div>
<?php }?>
                 
                </div>
              
              
              
              
              
              
              <div class="price" style="padding: 0px;">
            			  <div class="price-header" style="padding: 0px;">
                                <h3>POLLUTION CONTROL & RAIN WATER HARVESTING</h3>
                          </div></div>
              
              
              
                <div class="row">
                  <?php while($about_result7 = mysqli_fetch_assoc($about_display7)){?>
                    <div class="col-md-4">
                        <div class="service-item team">
                               <img style="" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result7['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                          <div class="team-text">
                      <h2><?php echo $about_result7['title'];?></h2>                        
                     </div>   
                          <p></p>
                            <p><?php// echo $about_result['description'];?></p>
                        </div>
                    </div>
<?php }?>
                 
                </div>
              
              
              
              
              
              
              
              
              
            </div>
        </div>
        <!-- Service End -->
        
        
<?php include "./include/footer.php"?>