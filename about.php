<?php include "./include/header.php";


include "db.php";

$about_query = "SELECT * FROM `jag_about_us` WHERE `title`='about us'";
$about_display = mysqli_query($connection, $about_query);
$about_result = mysqli_fetch_assoc($about_display);

$about_query1 = "SELECT * FROM `jag_about_us` WHERE `title`='Company Profile'";
$about_display1 = mysqli_query($connection, $about_query1);
$about_result1 = mysqli_fetch_assoc($about_display1);

$about_query2 = "SELECT * FROM `jag_about_us` WHERE `title`='Quality'";
$about_display2 = mysqli_query($connection, $about_query2);
$about_result2 = mysqli_fetch_assoc($about_display2);


$about_query3 = "SELECT * FROM `jag_about_us` WHERE `title`='Mission'";
$about_display3 = mysqli_query($connection, $about_query3);
$about_result3 = mysqli_fetch_assoc($about_display3);

$about_query4 = "SELECT * FROM `jag_about_us` WHERE `title`='Vission'";
$about_display4 = mysqli_query($connection, $about_query4);
$about_result4 = mysqli_fetch_assoc($about_display4);


?>



<img src="img/about-us.jpg" style="width:100%"/>

<!-- About Start -->
<div class="about" style="margin-top:70px;">
    <div class="container">
        <div class="row align-items-center">
            <!--<div class="col-lg-4">
                <div class="about-img text-center">
                  
                    <img style="width:290px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                </div>
            </div>-->
            <div class="col-lg-12">
                <div class="section-header text-left">
                    <p><?php echo $about_result1['title']; ?></p>
                    <!-- <h2>Hariom Casting Company (P) Limited</h2> -->
                </div>
                <div class="about-content">
                    <p>
                        <?php echo $about_result1['description']; ?>
                    </p>
                   
                </div>
            </div>


        </div>
    </div>
</div>
<!-- About End -->






<!-- Facts Start -->
<!-- <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
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
        </div> -->
<!-- Facts End -->


<!-- Team Start -->
<!-- <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Team</p>
                    <h2>Our Engineers & Workers</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Donald John</h2>
                                <p>Engineer</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Adam Phillips</h2>
                                <p>Engineer</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Thomas Olsen</h2>
                                <p>Worker</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>James Alien</h2>
                                <p>Worker</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!-- Team End -->

<?php include "./include/footer.php" ?>