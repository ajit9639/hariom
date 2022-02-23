<?php 
include "include/header.php";
include "db.php";

$office = "SELECT * FROM `jag_legal_doc` WHERE 1";
$office_query = mysqli_query($connection,$office);


?>
<div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Office & Infrastructure </p>
                    
                </div>
                <div class="row">
                  <?php while($row = mysqli_fetch_assoc($office_query)){?>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['images']) . '"' ?> style="height:150px"/>
                            <h3 class="text-center"><?php echo $row['title']?></h3>
                            
                        </div>
                    </div>
                  <?php }?>
                  
                   
                </div>
            </div>
        </div>
<?php include include "include/footer.php"?>