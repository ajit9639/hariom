<?php
$msg = "";
$cat = " ";
$status = " ";
include 'function.inc.php';


if (isset($_POST['insert'])) {
  $description = simplename($_POST['description']);
  $title = simplename($_POST['title']);
  $category = simplename($_POST['category']);
  if ($cat != null) {

        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['Image']['tmp_name']) && is_uploaded_file($_FILES['brochure']['tmp_name'])) {

                $imgData = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
                $broData = addslashes(file_get_contents($_FILES['brochure']['tmp_name']));
                //$imageProperties = getimageSize($_FILES['Image']['tmp_name']);

                $sql = "INSERT INTO `jag_product`(`title`,`category`,`description`,`image`, `brochure`) VALUES ('$title','$category','$description','$imgData','$broData')";

                $current_id = mysqli_query($connection, $sql); 
                if (isset($current_id)) {
                    // header("Location: listImages.php");
                }
                if ($current_id) {

                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success</strong>Product inserted successfully!!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        
                    echo "<script>
                    setTimeout(function() {
                        window.location.replace('products.php');
        
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

$select1 = "SELECT * FROM `jag_product`";
$result2 = mysqli_query($connection, $select1);
?>

<div class="modal fade" id="add_product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" >
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" style="color: #f72000;">Add Products</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body mx-10">
                    <div class="form-group">
                        <label class="a-color" for="title">Enter Name</label>
                        <input type="text" name="title" class="form-control" id="title" >
                    </div> 
                    
                   <div class="form-group">
                        <label class="a-color" for="title">Enter Category</label>
                        <input type="text" name="category" class="form-control" id="category" >
                    </div> 	 
                  
                    <div class="form-group">
                        <label class="a-color" for="product">Upload Image</label>
                        <input name="Image" type="file" class="form-control" id="product">
					</div>
                    <div class="form-group">
                        <label class="a-color" for="brochure">Upload Brochure</label>
                        <input name="brochure" type="file" class="form-control" id="brochure">
					</div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Description</label>
                        <textarea name="description" class="form-control" id="description" aria-describedby="emailHelp"></textarea>
		            </div>
                    </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button name="insert" class="btn btn-success" >Add Products</button>
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