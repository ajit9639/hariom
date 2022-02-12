<?php
$msg = "";
$cat = " ";
$status = " ";
include 'function.inc.php';

if (isset($_POST['insert'])) {
   $description = simplename($_POST['description']);
   $title = simplename($_POST['title']);
      if ($cat != null) {

        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['Image']['tmp_name'])) {

                 $imgData = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
                $sql = "INSERT INTO `jag_patron`(`title`,`image`,`description`) VALUES ('$title','$imgData','$description')";
				$current_id = mysqli_query($connection, $sql); 
                if (isset($current_id)) {
                    // header("Location: listImages.php");
                }
                if ($current_id) {

                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success</strong>Patron Info is successfully inserted!!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        
                    echo "<script>
                    setTimeout(function() {
                        window.location.replace('board_of_director.php');    
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



$select1 = "SELECT * FROM `jag_patron`";
$result2 = mysqli_query($connection, $select1);

?>

<div class="modal fade" id="add_patron" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" >
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" style="color: #f72000;">Add Board Of Director</h4>
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
                        <label class="a-color" for="exampleFormControlSelect1">Upload Image</label>
                        <input name="Image" type="file" class="form-control" id="exampleFormControlSelect1">
	                 </div>
                     
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Description</label>
                        <textarea name="description" class="form-control" id="description" aria-describedby="emailHelp"></textarea>
		            </div>
                    
                    </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button name="insert" class="btn btn-success" style="">Add Board Of Director</button>
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