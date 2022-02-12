<?php include "./include/header.php";

include "db.php";

$about_director = "SELECT * FROM `jag_patron`";
$about_director1 = mysqli_query($connection, $about_director);
$about_director2 = mysqli_fetch_assoc($about_director1);



?>
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Our Director</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Our Director</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <div class="single">
            <div class="container">
                <div class="row">
                    

                    <div class="col-lg-12">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <div class="single-bio">
                                    <div class="single-bio-img">
                                    <img height="100px" width="100px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_director2['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                                    </div>
                                    <div class="single-bio-text">
                                        <h3>Our Director's Message</h3>
                                        <p style="color:#fff!important;">
                                        <?php echo $about_director2['description']; ?>
                                        </p>
                                        <p style="text-align: right;font-weight: 600;">Managing director - <span style="color: #f07d22;"><?php echo $about_director2['title']; ?></span></p>
                                    </div>
                                    <!-- <div class="single-bio-social">
                                        <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                        <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div> -->
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
     

      

<?php include "./include/footer.php"?>