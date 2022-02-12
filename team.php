<?php include "./include/header.php";


include "db.php";

$about_query = "SELECT * FROM `jag_ass_secretary`";
$about_display = mysqli_query($connection, $about_query);
// $about_result = mysqli_fetch_assoc($about_display);


?>
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Team Member</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Team</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Team</p>
                    <!-- <h2>Our Engineers & Workers</h2> -->
                </div>
                <div class="row">
                <?php
                while($row = mysqli_fetch_assoc($about_display)){
                ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <!-- <img src="img/team-1.jpg" alt="Team Image"> -->
                                <img height="100px" width="100px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                            </div>
                            <div class="team-text">
                                <h2><?php echo $row['title']?></h2>
                                <p><?php echo $row['description']?></p>
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
        </div>
        <!-- Team End -->

<?php include "./include/footer.php"?>