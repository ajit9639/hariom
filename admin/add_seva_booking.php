<?php
$msg = "";
$cat = " ";
$status = " ";
include 'function.inc.php';


if (isset($_POST['insert'])) {
  $title = simplename($_POST['title']);
  $amount = simplename($_POST['amount']);
  $days = simplename($_POST['days']);
      if ($cat != null) {

        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['Image']['tmp_name'])) {

                $imgData = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
                //$imageProperties = getimageSize($_FILES['Image']['tmp_name']);

                $sql = "INSERT INTO `jag_seva_booking`(`name`,`days`,`image`,`amount`) VALUES ('$title','$days','$imgData','$amount')";

                $current_id = mysqli_query($connection, $sql); 
                if ($current_id) {

                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success</strong> Seva Booking Details inserted successfully!!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        
                    echo "<script>
                    setTimeout(function() {
                        window.location.replace('seva_booking.php');
        
                      }, 1000);
        
                </script>";
                } else {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Alert!</strong>  '.$connection->error.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                }
            }
        }
    }
}


$select1 = "SELECT * FROM `jag_seva_booking`";
$result2 = mysqli_query($connection, $select1);


?>

<div class="modal fade" id="add_seva_booking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background: #e7cb44;">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" style="color: #f72000;"><u>Add Temple Seva Booking</u></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body mx-10">
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Title</label>
                        <input name="title" type="text" class="form-control" id="title">
					</div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Upload Image</label>
                        <input name="Image" type="file" class="form-control" id="Image">
                    </div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Amount</label>
                        <input name="amount" type="text" class="form-control" id="amount">
					</div>
                     <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Title</label>
                        <select name="days" class="form-control" id="days">
                        	<option value="#" selected disabled>Select Days</option>
                        	<option value="Daily">Daily</option>
                        	<option value="Weekly">Weekly</option>
                        </select>
					</div>
                    </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button name="insert" class="btn btn-default" style="background:#f75b00;color:black;font-weight:700;">Add Temple Facilities</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    // Initialize CKEditor
    //CKEDITOR.inline( 'short_desc' );

    CKEDITOR.replace('description', {

        width: "100%",
        height: "200px"

    });
</script>