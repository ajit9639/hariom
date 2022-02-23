  <?php

include "db.php";
$products_query = "SELECT * FROM `jag_product`";
$product_display = mysqli_query($connection, $products_query);

                while($row123 = mysqli_fetch_assoc($product_display)){
                ?>
            <div class="col-lg-4" data-aos="fade-right"     data-aos-offset="300"     data-aos-easing="ease-in-sine">
                <div class="blog-item" style="background: #0a0937;">
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
                        <h3><a href="pdf.php?id=<?php echo $row123['id']?>" style="color:#ff7701;"><?php echo $row123['title']?></a></h3>
                        <p>
                        <?php// echo $row123['description']?>
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