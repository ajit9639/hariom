<?php

include "db.php";
$slider = "SELECT * FROM `jag_slider`";
$slider_query = mysqli_query($connection,$slider);
//$slider_result = mysqli_fetch_assoc($slider_query)

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