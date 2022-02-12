<?php
$msg = "";
$cat = " ";
$status = " ";
include 'function.inc.php';


if (isset($_POST['insert'])) {
  $desig = simplename($_POST['desig']);
  $title = simplename($_POST['title']);
  $type = simplename($_POST['type']);
     if ($cat != null) {

        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['Image']['tmp_name'])) {

                $imgData = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
                //$imageProperties = getimageSize($_FILES['Image']['tmp_name']);

                $sql = "INSERT INTO `jag_trustee`(`title`,`description`,`type`,`image`) VALUES ('$title','$desig','$type','$imgData')";

                $current_id = mysqli_query($connection, $sql); 
                if (isset($current_id)) {
                    // header("Location: listImages.php");
                }
                if ($current_id) {

                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success</strong> Trustee inserted successfully!!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        
                    echo "<script>
                    setTimeout(function() {
                        window.location.replace('trustee.php');
        
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
// $selectid="SELECT * FROM `catagries_images` WHERE 1";

$select1 = "SELECT * FROM `jag_trustee`";
$result2 = mysqli_query($connection, $select1);
?>

<div class="modal fade" id="add_trustee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background: #e7cb44;">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" style="color: #f72000;"><u>Add Trustee Details</u></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body mx-10">
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Name</label>
                        <input type="text" name="title" class="form-control" id="title" >
                    </div> 
                    
                 	 <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Designation</label>
                        <select class="form-control" name="type" id="type">
                            <option value="" selected disabled>Select Designation</option>
                            <option value="committee member">committee member</option>
                            <option value="trustee">trustee</option>
                        </select>
                        <!-- <textarea  aria-describedby="emailHelp"></textarea> -->
		            </div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Designation</label>
                        <input type="text" name="desig" class="form-control" id="desig" >
                    </div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Upload Trustee Image</label>
                        <input name="Image" type="file" class="form-control" id="exampleFormControlSelect1">

                    </div>
                    </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button name="insert" class="btn btn-default" style="background:#f75b00;color:black;font-weight:700;">Add Trustee Details</button>
                </div>
            </form>
        </div>
    </div>
</div>

