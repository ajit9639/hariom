<?php
include "db.php";
if(isset($_POST['submit'])){
  $design = $_POST['design'];
  $load = $_POST['load'];
  $tentative = $_POST['tentative'];
  $frame = $_POST['frame'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $company = $_POST['company'];
  $number = $_POST['number'];
  $address = $_POST['address'];
  $comments = $_POST['comments'];
  
$quote_query = "INSERT INTO `quote`(`design`, `load`, `tentative`, `frame`, `name`, `email`, `company`, `number`, `address`, `comments`) VALUES ('$design','$load','$tentative','$frame','$name','$email','$company','$number','$address','$comments')";
 $quote_data = mysqli_query($connection,$quote_query);
  if($quote_data){
    echo "<script>alert('Thank Your for your quote');</script>";
  }
}

$contact_query_result = "SELECT * FROM `jag_site_info`";
$contact_data = mysqli_query($connection,$contact_query_result);
$result = mysqli_fetch_assoc($contact_data);
// print_r($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hariom Casting Company (P) Limited </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
 <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
     <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  
  <!--animation-->
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
  <!--//animation-->
  
  <style>
    .float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    left: 20px;
    background-color: #016e3d;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    box-shadow: 2px 2px 3px #999;
    z-index: 9999;
      padding-top: 14px;
}
    .dropdown-menu{
      padding:0px;
    }
    
    /* mobile view navbar*/
    @media(min-width:576px){
    .mobile-view{
    display:none;
      }
    
    }
    
    @media(max-width:576px){
    .mobile-menu{
      display:none;
    }
      .nav-bar{
        background:#fff;
    }
    }
    
    
    .header-top-area::before {
    content: "";
    height: 100%;
    width: 28%;
    background: #fff;
    position: absolute;
    top: 0;
    left: -20px;
    transform: skew(-25deg);
}
    /* mobile view navbar */
    
    @media(min-width:576px){
     .feel-free{
       position: absolute;
    right: -450px;
      }
      
      
      .top-bar .logo img{
        position: absolute;
    top: -39px;
    left: -70px;
      }
      
      .header-top-area::before{
        position: absolute;
    top: 0;
    left: -65px;
    transform: skew(359deg);
    border-radius: 0px 45px 45px 0px;
      }
      
      .top-bar{
       height:85px; 
      }
    }
  </style>
</head>

<body>
  <!--popup -->
  <div class="container">
  <!-- Button to Open the Modal -->
  <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>-->
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content" style="
    background: #f07d22;
">      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-light">
Please share the following details</h4>
          <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
        </div>       
        <!-- Modal body -->
        <div style="background: white;
    text-align: center;"><img src="img/hariomcasting.png" alt="Logo" style="
    width: 50%;"></div>
        <div class="modal-body">
          
          <div class="container">
  
  <form action="" method="POST">
  <div class="row">
  <div class="col">
  <div class="form-group">      
      <input type="text" class="form-control" placeholder="Design (solid / Grating)" name="design" required>
    </div>
    </div>
     <div class="col">
  <div class="form-group">      
      <input type="text" class="form-control" id="load" placeholder="Load class (A15 - F1200)" name="load" required>
    </div>
    </div>
    </div>
    
     <div class="row">
  <div class="col">
  <div class="form-group">      
      <input type="number" class="form-control" id="tentative" placeholder="Tentative Quality" name="tentative" required>
    </div>
    </div>
     <div class="col">
  <div class="form-group">      
      <input type="number" class="form-control" id="frame" placeholder="Frame height in mm" name="frame" required>
    </div>
    </div>
    </div>
       
     <div class="row">
  <div class="col">
  <div class="form-group">      
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
    </div>
    </div>
     <div class="col">
  <div class="form-group">      
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
    </div>
    </div>
    </div>
    
      <div class="row">
  <div class="col">
  <div class="form-group">      
      <input type="text" class="form-control" id="company" placeholder="Enter Company Name" name="company" required>
    </div>
    </div>
     <div class="col">
  <div class="form-group">      
      <input type="number" class="form-control" id="number" placeholder="Contact No" name="number" required>
    </div>
    </div>
    </div>
    
    <div class="form-group">
      <textarea class="form-control" placeholder="Address" name="address" required></textarea>
    </div>
    
    <div class="form-group">
      <textarea class="form-control" placeholder="Comments" name="comments" required></textarea>
    </div>
               
    <button type="submit" class="btn btn-success" name="submit">Submit</button>
  </form>
</div>
        </div>                       
      </div>
    </div>
  </div>  
</div>
  <!--//popup-->
  
  <a href="https://api.whatsapp.com/send?phone=919661777066&amp;text=&amp;source=&amp;data=" class="float">
    <i class="fab fa-whatsapp my-float" style="font-size: 2rem;" aria-hidden="true"></i>
    </a>
  
   

    <!-- Nav Bar Start -->
    <div class="nav-bar header-top-area">
       <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-12">
                    <div class="logo">
                        <a href="index.php">
                            
                            <img src="img/hariomcasting.png" alt="Logo">
                        </a>
                    </div>
                </div>
              
                <!--<div class="col-lg-9 col-md-7 d-none d-lg-block">
                    <div class="row">                        
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Email Us</h3>
                                    <p><?php echo $result['email']?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-8">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="fas fa-map-marker"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Address</h3>
                                    <p><?php echo $result['address']?></p>
                                </div>
                            </div>
                        </div>

                    </div>-->
              
              <!--new navbar-->
              <nav class="navbar navbar-expand-lg navbar-dark mobile-menu">
                <a href="#" class="navbar-brand" >MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="index.php" class="nav-item nav-link">Home</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">About</a>
                            <div class="dropdown-menu">
                                <a href="about.php" class="dropdown-item">About Company</a>
                                <a href="about-directors.php" class="dropdown-item">Director Voice</a>
                                <a href="certificates.php" class="dropdown-item">Certificates</a>
                                <!-- <a href="booking.html" class="dropdown-item">Schedule Booking</a> -->
                              <!--<a href="office.php" class="dropdown-item">Office & Infrastructure</a>-->
                            </div>
                        </div>
                       
                      
                        <a href="facilities.php" class="nav-item nav-link">Facilites</a>
                        <a href="products.php" class="nav-item nav-link">Products</a>

                        <!-- <a href="" class="nav-item nav-link">About</a> -->
                        <!-- <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="price.html" class="nav-item nav-link">Price</a> 
                        <a href="location.html" class="nav-item nav-link">Washing Points</a>-->

                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Detail Page</a>
                                <a href="team.html" class="dropdown-item">Team Member</a>
                                <a href="booking.html" class="dropdown-item">Schedule Booking</a>
                            </div>
                        </div>  -->

                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="ml-auto feel-free">
                        <a class="btn btn-custom" href="" data-toggle="modal" data-target="#myModal">Feel Free to Contact us</a>
                    </div>
                </div>
            </nav>
              <!--// new navbar-->
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->
        <div class="container mobile-view" style="background: #ff7701;">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a href="#" class="navbar-brand" style="
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-size: 12px;
">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="index.php" class="nav-item nav-link">Home</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                            <div class="dropdown-menu">
                                <a href="about.php" class="dropdown-item">About Company</a>
                                <a href="about-directors.php" class="dropdown-item">Director Voice</a>
                                <a href="certificates.php" class="dropdown-item">Certificates</a>
                              <!--<a href="office.php" class="dropdown-item">Office & Infrastructure</a>-->
                                <!-- <a href="booking.html" class="dropdown-item">Schedule Booking</a> -->
                            </div>
                        </div>
                      
                        <a href="facilities.php" class="nav-item nav-link">Facilites</a>
                        <a href="products.php" class="nav-item nav-link">Products</a>

                        <!-- <a href="" class="nav-item nav-link">About</a> -->
                        <!-- <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="price.html" class="nav-item nav-link">Price</a> 
                        <a href="location.html" class="nav-item nav-link">Washing Points</a>-->

                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Detail Page</a>
                                <a href="team.html" class="dropdown-item">Team Member</a>
                                <a href="booking.html" class="dropdown-item">Schedule Booking</a>
                            </div>
                        </div>  -->

                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="ml-auto feel-free">
                        <a class="btn btn-custom" href="" data-toggle="modal" data-target="#myModal">Feel Free to Contact us</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->