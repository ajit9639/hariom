<?php include "./include/header.php";

include "db.php";



$about_query = "SELECT * FROM `jag_product`";
$about_display = mysqli_query($connection, $about_query);
$num_row = mysqli_num_rows($about_display);

$contact_query = "SELECT * FROM `contact`";
$contact_display = mysqli_query($connection, $contact_query);
$num_row_contact =mysqli_num_rows($contact_display);


if (isset($_SESSION['username']) && ($_SESSION['username'] != '')) {

    $totalorder = "SELECT * FROM `user_order_history` WHERE 1";
    $totaluser = "SELECT * FROM `users` WHERE 1";
    $uniquevisiter = "SELECT * FROM `users` WHERE con_date = '<script>
  var a=new Date();
  document.write(a.toLocaleDateString());
  </script>'";

    $totaluser = mysqli_query($connection, $totaluser);
    $totalorder = mysqli_query($connection, $totalorder);
    $uniquevisiter = mysqli_query($connection, $uniquevisiter);

?>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php //echo mysqli_num_rows($totalorder); ?></h3>

                            <p>Total Products : <?php echo $num_row; ?></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i> 
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
              
                <!--<div class="col-lg-3 col-6">
                  
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>-->
                <!-- ./col -->
                <!--<div class="col-lg-3 col-6">
                  
                    <div class="small-box bg-warning">
                        <div class="inner">
                           

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="./pages/product/product.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>-->
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php // echo mysqli_num_rows($totalorder); ?></h3>

                            <p>Unique Visitors : <?php echo $num_row_contact; ?></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
           
        </div><!-- /.container-fluid -->
    </section>
<?php } else {
    header('location:./AdminLogin/super_Admin.php');
} ?>