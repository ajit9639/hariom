<?php include "./include/header.php";
include "db.php";

$contact_query_result = "SELECT * FROM `jag_site_info`";
$contact_data = mysqli_query($connection,$contact_query_result);
$result = mysqli_fetch_assoc($contact_data);
// print_r($result);


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $message = $_POST['message'];
    
    $date =  date("Y/m/d");

    $contact_query = "INSERT INTO `jag_contact`(`con_name`, `con_email`, `con_mobile`, `con_query`, `con_date`) VALUES ('$name','$email','$phone','$message','$date')";
    $contact_insert = mysqli_query($connection,$contact_query);
    // echo $contact_insert;
    // print_r($contact_insert);
    if($contact_insert){
        echo "<script>alert('Thank You for your query We\'ll call you soon')</script>";
    }
}
?>
        
        
        <!--<img src="img/contact-us.jpg" style="width:100%"/>-->
<video class="b-lazy b-loaded" controls="false" title="" autoplay="" loop="" muted="" style="width:100%;">
                        <source type="video/mp4" src="img/traffic.mp4">
                    </video>
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-info">
                            <!-- <h2>Contact Info</h2> -->
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-map-marker"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Address</h3>
                                    <p><?php echo $result['address']?></p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Call Us</h3>
                                    <p><?php echo $result['phone1']?> <br> <?php echo $result['phone2']?>
                                </p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Email Us</h3>
                                    <p><?php echo $result['email']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <!-- <div id="success"></div> -->
                            <form method="POST">
                                <div class="control-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" name="number" class="form-control" id="subject" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your number" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" name="message" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit" id="sendMessageButton" name="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.007269336602!2d86.11446191427811!3d22.802194530251967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5ef1702d3b159%3A0xe4d2e302545a734e!2sHari%20Om%20Casting%20Company%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1644662103355!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

<?php include "./include/footer.php"?>