<?php
$msg = "";
$cat = " ";
$status = " ";
include 'function.inc.php';
//include 'connection.inc.php';


if (isset($_POST['add'])) {
  $title = simplename($_POST['title']);
      
        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['Image']['tmp_name'])) {

                $imgData = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
                $sql = "INSERT INTO `jag_legal_doc`(`title`,`images`) VALUES ('$title','$imgData')";

                $current_id = mysqli_query($connection, $sql); 
                
                if ($current_id) {

                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> Uploaded Successfully Added
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
// $selectid="SELECT * FROM `catagries_images` WHERE 1";



$select1 = "SELECT * FROM `jag_legal_doc`";
$result2 = mysqli_query($connection, $select1);


?>

<div class="modal fade" id="add_legal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Add New</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body mx-3">
                    <!-- <div class="md-form mb-5">
                        <label class="a-color" data-error="wrong" data-success="right" for="defaultForm-email">Gallery Image title</label>
                        <select name="cat" type="text" id="defaultForm-email" class="form-control validate" placeholder="Enter Caregorie Name">
                            <option selected disabled>Choose Categries..</option>
                            <?php

                            if (mysqli_num_rows($result2) > 0) {
                                while ($row = mysqli_fetch_array($result2)) {

                            ?>
                                    <option value="<?php echo $row['c_id']; ?>"><?php echo $row['c_name']; ?></option>

                            <?php }
                            } ?>
                        </select>

                    </div> -->

                 <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Title</label>
                        <input name="title" type="text" class="form-control" id="title">


                    </div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Upload Image</label>
                        <input name="Image" type="file" class="form-control" id="image">


                    </div>
                    </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button name="add" class="btn btn-default">Add Data</button>
                </div>
            </form>
        </div>
    </div>
</div>