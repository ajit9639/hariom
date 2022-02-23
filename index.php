<?php 
include "./include/header.php";
include "db.php";

$about_query = "SELECT * FROM `jag_about_us`";
$about_display = mysqli_query($connection,$about_query);
$about_result = mysqli_fetch_assoc($about_display);

$team_query = "SELECT * FROM `jag_ass_secretary`";
$team_display = mysqli_query($connection, $team_query);

$slider = "SELECT * FROM `jag_slider`";
$slider_query = mysqli_query($connection,$slider);




$mission_query = "SELECT * FROM `jag_about_us` where `title`='mission'";
$mission_display = mysqli_query($connection,$mission_query);
$mission_result = mysqli_fetch_assoc($mission_display);


$vission_query = "SELECT * FROM `jag_about_us` where `title`='vission'";
$vission_display = mysqli_query($connection,$vission_query);
$vission_result = mysqli_fetch_assoc($vission_display);

//$slider_result = mysqli_fetch_assoc($slider_query)
?>


<video class="b-lazy b-loaded" title="" autoplay="" loop="" muted="" style="width:100%;">
                        <source type="video/mp4" src="img/Untitled.mp4">
                    </video>


                      <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">

            <?php while($row=mysqli_fetch_assoc($slider_query)){?>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="Image" />
                    </div>
                    <!-- <div class="carousel-text">
                        <h3>Washing & Detailing</h3>
                        <h1>Keep your Car Newer</h1>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac
                        </p>
                        <a class="btn btn-custom" href="">Explore More</a>
                    </div> -->
                </div>
            <?php }?>

            </div>
        </div>
    </div>
    <!-- Carousel End -->

<!--<div data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
<img src="img/banner 5.jpg" style="width:100%"/>
</div>-->
<!-- About Start -->
<div class="about" style="">
    <div class="container">
        <div class="row align-items-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
           <div class="col-lg-6">
                <div class="section-header text-left">
                    <p><?php// echo $about_result['title'];?></p>
                    <!-- <h2>car washing and detailing</h2> -->
                </div>
                <div class="about-content">
                    <p>
                    <?php echo $about_result['description'];?>
                    </p>
                    
                    <a class="btn btn-custom" href="about.php" style="background:#0a0937!important">Read More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img text-center" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <!-- <img src="img/about.jpg" alt="Image"> -->
                    <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result['image']) . '"' ?> class="img-fluid mb-2" alt="" style=""/>
                </div>
            </div>
           
          
          
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<!-- <div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p>What We Do?</p>
            <h2>Premium Washing Services</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-car-wash-1"></i>
                    <h3>Exterior Washing</h3>
                    <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-car-wash"></i>
                    <h3>Interior Washing</h3>
                    <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-vacuum-cleaner"></i>
                    <h3>Vacuum Cleaning</h3>
                    <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-seat"></i>
                    <h3>Seats Washing</h3>
                    <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-car-service"></i>
                    <h3>Window Wiping</h3>
                    <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-car-service-2"></i>
                    <h3>Wet Cleaning</h3>
                    <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-car-wash"></i>
                    <h3>Oil Changing</h3>
                    <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-brush-1"></i>
                    <h3>Brake Reparing</h3>
                    <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Service End -->

<!--mission-->
<div class="container">
    <div class="row">
        <div class="col-md-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <div class="row">
            <div class="col-md-6">
                    <div class="mission-text">
                        <div class="price-item featured-item">
                            <div class="price-header" style="background: #0a0937;
      padding: 30px;
      color: #fff;">
                                <h3 class="text-center" style="color:#ff7701"><?php echo $mission_result['title'] ?></h3>
                                <p><?php echo $mission_result['description'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>   
            <div class="col-md-6" style="">
                    <div class="mission-image" style="
       background: url(img/mi.png);
      background-size: contain;
      background-position: center;
      height: 100%;
      background-repeat: no-repeat;">

                    </div>
                </div>
               
            </div>
        </div>


        <div class="col-md-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <div class="row">
                <div class="col-md-6" style=background-image: url(img/mi.png); background-size: cover; background-position: center;>
                    <div class="mission-image" style="
       background: url(img/vi.png);
      background-size: contain;
      background-position: center;
      height: 100%;
      background-repeat: no-repeat;">

                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mission-text">
                        <div class="price-item featured-item">
                            <div class="price-header" style="background: #0a0937;
      padding: 30px;
      color: #fff;">
                                <h3 class="text-center" style="color:#ff7701"><?php echo $vission_result['title'] ?></h3>
                                <p><?php echo $vission_result['description'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--//mission--><!--//mission-->
 <!--mission-->
  <!--  <div class="container">
        <div class="row">
            <div class="col-md-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
<img src="img/Mission.jpg" style="width:100%"/>
            </div>


            <div class="col-md-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="row">
<img src="img/Vision.jpg" style="width:100%"/>


                </div>
            </div>
        </div>
    </div>-->


    <!--//mission-->

<!-- Facts Start -->
<div class="facts price location" data-parallax="scroll" data-image-src="img/facts.jpg">
    <div class="container">
      <div class="section-header text-center">
            <p>Why Us ?</p>
            <!-- <h2>Choose Your Plan</h2> -->
        </div>
      
      <div class="row">
            
            <div class="col-lg-6 m-auto">
                <div class="location-form" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                  <ul class="text-light" style="list-style-type: none;">
                    <li><i class="far fa-check-circle"></i> Delivery on time</li>
                    <li><i class="far fa-check-circle"></i> Competitive rates </li>
                    <li><i class="far fa-check-circle"></i> Profound understanding of the product nuances.</li>
                    <li><i class="far fa-check-circle"></i> Experienced team</li>
                    <li><i class="far fa-check-circle"></i> Rigorous QAQC</li>
                    <li><i class="far fa-check-circle"></i> 100% customer oriented plant.</li>
                  </ul>                   
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-map-marker-alt"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">20</h3>
                        <p>Country Export</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-industry"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">50</h3>
                        <p>Products</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-users"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">500</h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-user"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">50</h3>
                        <p>Team</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Products</p>
            <!-- <h2>Latest news & articles</h2> -->
        </div>
        <div class="row" id="product">
      
           
        </div>
    </div>
</div>
<!-- Blog End -->

<!--certificate popup-->
<!-- The Modal -->
  <div class="modal fade" id="myModalcertificate1">
    <div class="modal-dialog">
      <div class="modal-content">      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">HARI OM CASTING COMPANY PVT. LTD. 9001</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
        <!-- Modal body -->
        <div class="modal-body">
          <img src="img/HARI OM CASTING COMPANY PVT. LTD. 9001.jpg" style="width:100%"/>
        </div>        
        <!-- Modal footer -->              
      </div>
    </div>
  </div>



<!-- The Modal -->
  <div class="modal fade" id="myModalcertificate2">
    <div class="modal-dialog">
      <div class="modal-content">      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">HARI OM CASTING COMPANY PVT. LTD. 14001</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
        <!-- Modal body -->
        <div class="modal-body">
          <img src="img/HARI OM CASTING COMPANY PVT. LTD. 14001.jpg" style="width:100%"/>
        </div>        
        <!-- Modal footer -->               
      </div>
    </div>
  </div>



<!-- The Modal -->
  <div class="modal fade" id="myModalcertificate3">
    <div class="modal-dialog">
      <div class="modal-content">      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">HARI OM CASTING COMPANY PVT. LTD. 45001</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
        <!-- Modal body -->
        <div class="modal-body">
          <img src="img/HARI OM CASTING COMPANY PVT. LTD. 45001.jpg"  style="width:100%"/>
        </div>        
       <!-- Modal footer -->               
      </div>
    </div>
  </div>
<!--//certificate popup-->


<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Certifications</p>
            <!-- <h2>Our Engineers & Workers</h2> -->
        </div>
        <div class="row">
        <?php
               // while($row1234 = mysqli_fetch_assoc($team_display)){
                ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-offset="300"  data-aos-easing="ease-in-sine">
                <div class="team-item">                    
                      	  <a  data-toggle="modal" data-target="#myModalcertificate1" style="cursor:pointer">
                            <div class="team-img">
                        	<img src="img/iso1.png" alt="Team Image">
                    	</div>                                        
                    <div class="team-text">
                      <h2>HARI OM CASTING COMPANY PVT. LTD. 9001</h2>
                        <p><?php //echo $row1234['description']?></p>
                     </div></a>
                </div>
            </div>
          
          
          
          <div class="col-lg-4 col-md-6" data-aos="fade-down"     data-aos-easing="linear"     data-aos-duration="1500">
                <div class="team-item">                    
                      	 <a  data-toggle="modal" data-target="#myModalcertificate2" style="cursor:pointer">
                           <div class="team-img">
                        	<img src="img/14001.png" alt="Team Image">
                    	</div>                                        
                    <div class="team-text">
                     <h2>HARI OM CASTING COMPANY PVT. LTD. 14001</h2>
                        <p><?php //echo $row1234['description']?></p>
                           </div></a>
                </div>
            </div>
          
          
          <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-offset="300"  data-aos-easing="ease-in-sine">
                <div class="team-item">                    
                      <a  data-toggle="modal" data-target="#myModalcertificate3" style="cursor:pointer">
                        <div class="team-img">
                        	<img src="img/45001.png" alt="Team Image">
                    	</div>                                        
                    <div class="team-text">
                      <h2>HARI OM CASTING COMPANY PVT. LTD. 45001</h2>
                        <p><?php //echo $row1234['description']?></p>
                     </div></a>
                </div>
            </div>
              
              
           <?php //}?>
        </div>
    </div>
</div>
<!-- Team End -->

<img src="img/banner 7.jpg" style="width:100%;" data-aos="fade-right" data-aos-offset="300"  data-aos-easing="ease-in-sine"/>
<?php include "./include/footer.php"?>
 <script>
        $(document).ready(function() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("product").innerHTML = this.responseText;
            }
            xhttp.open("GET", "ajaxindex.php", true);
            xhttp.send();
        });
    </script>
  
 <script>
        $(document).ready(function() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("slider").innerHTML = this.responseText;
            }
            xhttp.open("GET", "galleryindex.php", true);
            xhttp.send();
        });
    </script>
