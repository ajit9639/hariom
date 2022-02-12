<?php
$msg = "";
$cat = " ";
$status = " ";
include 'function.inc.php';


if (isset($_POST['insert'])) {
  $name = simplename($_POST['name']);
  $designation = simplename($_POST['designation']);
  $type = simplename($_POST['type']);
     if ($cat != null) {

        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['Image']['tmp_name'])) {

                $imgData = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
                //$imageProperties = getimageSize($_FILES['Image']['tmp_name']);

                $sql = "INSERT INTO `jag_members`(`name`,`designation`,`type`,`image`) VALUES ('$name','$designation','$type','$imgData')";

                $current_id = mysqli_query($connection, $sql); 
                if (isset($current_id)) {
                    // header("Location: listImages.php");
                }
                if ($current_id) {

                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success</strong> Member inserted successfully!!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        
                    echo "<script>
                    setTimeout(function() {
                        window.location.replace('members.php');
        
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

$select1 = "SELECT * FROM `jag_member`";
$result2 = mysqli_query($connection, $select1);
?>

<div class="modal fade" id="add_member" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background: #e7cb44;">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" style="color: #f72000;"><u>Add Member Details</u></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body mx-10">
                    
                 <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Member Name</label>
                        <input name="name" type="text" class="form-control" id="name">

                    </div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Member Designation</label>
                        <input name="designation" type="text" class="form-control" id="designation">
                    </div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Select Member Type</label>
                        <select type="text" class="form-control" id="type" name="type">
                   			<option value="#" selected disabled>Select Member Type</option>
                   			<option value="trustee">Trustee</option>
                   			<option value="commitee member">Commitee Member</option>
                   			<option value="patron">Patron</option>
                   			<option value="pious">pious</option>
                   			<option value="devotee">Devotee</option>
                   			<option value="family">Family</option>
                   			<option value="life">Life</option>
                   		</select>
                   </div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Upload Member Image</label>
                        <input name="Image" type="file" class="form-control" id="exampleFormControlSelect1">

                    </div>
                    </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button name="insert" class="btn btn-default" style="background:#f75b00;color:black;font-weight:700;">Add Member Details</button>
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