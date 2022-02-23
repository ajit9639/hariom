<?php
$msg = "";
$cat = " ";
$status = " ";
include 'function.inc.php';


if (isset($_POST['insert'])) {
  $event = simplename($_POST['event']);
  $year = simplename($_POST['year']);
     if ($cat != null) {

        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['Image']['tmp_name'])) {

                $imgData = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
                //$imageProperties = getimageSize($_FILES['Image']['tmp_name']);

                $sql = "INSERT INTO `jag_gallery`(`event`,`year`,`image`) VALUES ('$event','$year','$imgData')";

                $current_id = mysqli_query($connection, $sql); 
                if (isset($current_id)) {
                    // header("Location: listImages.php");
                }
                if ($current_id) {

                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success</strong> inserted successfully!!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        
                    echo "<script>
                    setTimeout(function() {
                        window.location.replace('office.php');
        
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

$select1 = "SELECT * FROM `jag_gallery`";
$result2 = mysqli_query($connection, $select1);
?>

<div class="modal fade" id="add_gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" style="color: #f72000;">Add Images</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body mx-10">
                    
                 <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Name</label>
                        <input name="event" type="text" class="form-control" id="event">

                    </div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Upload Image</label>
                        <input name="Image" type="file" class="form-control" id="exampleFormControlSelect1">

                    </div>
                   <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Description</label>
                        <input name="year" type="text" class="form-control" id="event">

                    </div>
                    </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button name="insert" class="btn btn-success">Add Image</button>
                </div>
            </form>
        </div>
    </div>
</div>