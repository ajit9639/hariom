<?php include "./include/header.php";

include "db.php";



$about_query = "SELECT * FROM `jag_product`";
$about_display = mysqli_query($connection, $about_query);
// $about_result = mysqli_fetch_assoc($about_display);


?>

      
        
        
       <img src="img/Products.jpg" style="width:100%"/>  
        
        
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
                    <div class="col-md-4">
                        <div class="blog-item" style="background: #202c45;">
                            <div class="blog-img">
                           <a class="btn" target="_blank" href="pdf.php?id=<?php echo $row['id']?>">
                              <img height="100px" width="100px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                              </a> <!-- <img src="img/blog-1.jpg" alt="Image"> -->
                                <!-- <div class="meta-date">
                                    <span>01</span>
                                    <strong>Jan</strong>
                                    <span>2045</span>
                                </div> -->
                            </div>
                            <div class="blog-text">
                                <h3><a href="pdf.php?id=<?php echo $row['id']?>" class="text-light"><?php echo $row['title']?></a></h3>
                                <p>
                                <?php// echo $row['description']?>
                                
                                  <!--<a class="btn btn-custom" target="_blank" href="pdf.php?id=<?php echo $row['id']?>">Read More</a>-->
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