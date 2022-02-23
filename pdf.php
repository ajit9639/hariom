<?php

include "./include/header.php";
include "db.php";

$id = $_GET['id'];
//echo $id;


$about_query = "SELECT * FROM `jag_product` where id= '$id'";
$about_display = mysqli_query($connection, $about_query);
$about_result = mysqli_fetch_assoc($about_display);
?>

 
       <img src="img/Products.jpg" style="width:100%"/> 


        <!-- Single Post Start-->
        <div class="single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-content">
                            <!--<img src="img/single.jpg" />-->
                          	<!--<object type="application/pdf" <?php echo ' data="data:application/pdf;base64,' . base64_encode($about_result['brochure']) . '"' ?> style="width:100%; height:600px;"></object>-->
                         <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result['image']) . '"' ?> class="img-fluid mb-2" alt="Product" />                                                                                         
                                  <!--<a class="btn btn-custom" target="_blank" href="pdf_download.php?id=7">Donload Brochure</a>-->                                                                                             
                        </div>                                                                                           
                    </div>

                    <div class="col-lg-8">
                    <div class="single-content">
                            <!--<img src="img/single.jpg" />-->
                      		<img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result['brochure']) . '"' ?> class="img-fluid mb-2" alt="Product" />                     
                        </div>
                    </div>
                  <div classs="col-md-12">
                    <p> <?php echo $about_result['description']; ?></p>
                  </div>
                </div>
            </div>
        </div>
        <!-- Single Post End-->   

<?php include "./include/footer.php"?>
