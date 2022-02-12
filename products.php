<?php include "./include/header.php";

include "db.php";



$about_query = "SELECT * FROM `jag_secretary`";
$about_display = mysqli_query($connection, $about_query);
// $about_result = mysqli_fetch_assoc($about_display);


?>

      
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Our Products</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Our Products</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Products</p>
                    <!-- <h2>Latest news & articles</h2> -->
                </div>
                <div class="row">

                <?php
                while($row = mysqli_fetch_assoc($about_display)){
                ?>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                            <img height="100px" width="100px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                                <!-- <img src="img/blog-1.jpg" alt="Image"> -->
                                <!-- <div class="meta-date">
                                    <span>01</span>
                                    <strong>Jan</strong>
                                    <span>2045</span>
                                </div> -->
                            </div>
                            <div class="blog-text">
                                <h3><a href="#"><?php echo $row['title']?></a></h3>
                                <p>
                                <?php echo $row['description']?>
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

<?php include "./include/footer.php"?>