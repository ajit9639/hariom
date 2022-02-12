<?php 
include "./include/header.php";
include "db.php";

$about_query = "SELECT * FROM `jag_about_us`";
$about_display = mysqli_query($connection,$about_query);
$about_result = mysqli_fetch_assoc($about_display);


$slider = "SELECT * FROM `jag_slider`";
$slider_query = mysqli_query($connection,$slider);
// $slider_result = mysqli_fetch_assoc($slider_query);



$products_query = "SELECT * FROM `jag_secretary`";
$product_display = mysqli_query($connection, $products_query);


$team_query = "SELECT * FROM `jag_ass_secretary`";
$team_display = mysqli_query($connection, $team_query);

?>
<!-- Carousel Start -->
<div class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">
        <?php
                while($row12 = mysqli_fetch_assoc($slider_query)){
                ?>
            <div class="carousel-item">
                <div class="carousel-img">
                    <!-- <img src="img/carousel-1.jpg" alt="Image"> -->
                    <img height="100px" width="100px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row12['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                    
                </div>
                <div class="carousel-text">
                    <!-- <h3>Washing & Detailing</h3> -->
                    <h1><?php //echo $row12['title']?></h1>
                    <!-- <p>
                        Lorem ipsum dolor sit amet elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac
                    </p> -->
                    <!-- <a class="btn btn-custom" href="">Explore More</a> -->
                </div>
            </div>
<?php }?>

           


        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <!-- <img src="img/about.jpg" alt="Image"> -->
                    <img height="100px" width="100px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-header text-left">
                    <p><?php echo $about_result['title'];?></p>
                    <!-- <h2>car washing and detailing</h2> -->
                </div>
                <div class="about-content">
                    <p>
                    <?php echo $about_result['description'];?>
                    </p>
                    
                    <a class="btn btn-custom" href="about.php">Read More</a>
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


<!-- Facts Start -->
<div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-map-marker-alt"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">25</h3>
                        <p>Service Points</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-user"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">350</h3>
                        <p>Engineers & Workers</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-users"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">1500</h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-check"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">5000</h3>
                        <p>Projects Completed</p>
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
        <div class="row">
        <?php
                while($row123 = mysqli_fetch_assoc($product_display)){
                ?>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <!-- <img src="img/blog-1.jpg" alt="Image"> -->
                        <img height="100px" width="100px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row123['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                        <!-- <div class="meta-date">
                            <span>01</span>
                            <strong>Jan</strong>
                            <span>2045</span>
                        </div> -->
                    </div>
                    <div class="blog-text">
                        <h3><a href="#"><?php echo $row123['title']?></a></h3>
                        <p>
                        <?php echo $row123['description']?>
                        </p>
                    </div>
                    <!-- <div class="blog-meta">
                        <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                        <p><i class="fa fa-folder"></i><a href="">Web Design</a></p>
                        <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                    </div> -->
                </div>
            </div>
<?php }?>
           
        </div>
    </div>
</div>
<!-- Blog End -->

<!-- Price Start -->
<div class="price" style="background:#202c45;">
    <div class="container">
        <div class="section-header text-center">
            <p>Why Us ?</p>
            <!-- <h2>Choose Your Plan</h2> -->
        </div>
        <div class="row">
           

            <div class="col-md-12">
                <div class="price-item featured-item">
                <div class="location">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12">
                <div class="location-form">
                    <p style="color:#fff">Hariom casting co. pvt. ltd is a certified and leading company in the field of  manufacturing of casting. The company was Setup in 2010 at Large Sector,Gamharia the famous industrial hub of Eastern India near the 100 year old steel city of Jamshedpur.. The state of Jharkhand contains large deposits of iron-ore and coal. The main raw material-pig iron is available in large quantities in jharkhand and its neighbouring states .</p>
                   
                </div>
            </div>
        </div>
    </div>
</div>
                    <!-- <div class="price-body">
                        <ul>
                            <li><i class="far fa-check-circle"></i>Seats Washing</li>
                            <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                            <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                            <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                            <li><i class="far fa-times-circle"></i>Window Wiping</li>
                        </ul>
                    </div> -->
                    <!-- <div class="price-footer">
                        <a class="btn btn-custom" href="">Book Now</a>
                    </div> -->
                </div>
            </div>
           
        </div>
    </div>
</div>
<!-- Price End -->


<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Meet Our Team</p>
            <!-- <h2>Our Engineers & Workers</h2> -->
        </div>
        <div class="row">
        <?php
                while($row1234 = mysqli_fetch_assoc($team_display)){
                ?>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <!-- <img src="img/team-1.jpg" alt="Team Image"> -->
                        <img height="100px" width="100px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row1234['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                    </div>
                    <div class="team-text">
                        <h2><?php echo $row1234['title']?></h2>
                        <p><?php echo $row1234['description']?></p>
                        <!-- <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
           <?php }?>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="testimonial">
    <div class="container">
        <div class="section-header text-center">
            <p>Testimonial</p>
            <h2>What our clients say</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" alt="Image">
                <div class="testimonial-text">
                    <h3>Client Name</h3>
                    <h4>Profession</h4>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                    </p>
                </div>
            </div>
            <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" alt="Image">
                <div class="testimonial-text">
                    <h3>Client Name</h3>
                    <h4>Profession</h4>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                    </p>
                </div>
            </div>
            <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" alt="Image">
                <div class="testimonial-text">
                    <h3>Client Name</h3>
                    <h4>Profession</h4>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                    </p>
                </div>
            </div>
            <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" alt="Image">
                <div class="testimonial-text">
                    <h3>Client Name</h3>
                    <h4>Profession</h4>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->



<?php include "./include/footer.php"?>