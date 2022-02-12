<?php
$msg = "";
$cat = " ";
$status = " ";
include 'function.inc.php';


if (isset($_POST['insert'])) {
  	$name = simplename($_POST['name']);
 	$description = simplename($_POST['description']);
 	$donation_amount = simplename($_POST['donation_amount']);
     if ($cat != null) {

        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['Image']['tmp_name'])) {

                $imgData = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
               	$sql = "INSERT INTO `jag_member_type`(`name`,`description`,`donation_amount`,`image`) VALUES ('$name','$description','$donation_amount','$imgData')";

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
                        window.location.replace('member_types.php');
        
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

$select1 = "SELECT * FROM `jag_member_type`";
$result2 = mysqli_query($connection, $select1);
?>

<div class="modal fade" id="add_member_type" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background: #e7cb44;">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" style="color: #f72000;"><u>Add Member Type Details</u></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body mx-10">
                    
                 	<div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Type Name</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                   	<div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Upload Type Image</label>
                        <input name="Image" type="file" class="form-control" id="Image">

                    </div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Donation Amount</label>
                        <input name="donation_amount" type="text" class="form-control" id="donation_amount">
                    </div>

                     <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Type Description</label>
                        <textarea name="description" class="form-control" id="description" aria-describedby="emailHelp"></textarea></div>
                    </div>
               		<div class="modal-footer d-flex justify-content-center">
                    	<button name="insert" class="btn btn-default" style="background:#f75b00;color:black;font-weight:700;">Add Member Types Details</button>
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