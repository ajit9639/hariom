<?php
$msg = "";
$row = "";
include 'function.inc.php';
include 'connection.inc.php';

if (isset($_GET['edit']) && ($_GET['edit'] != '')) {
    $id = $_GET['edit'];

    $select_single_data = "SELECT * FROM `jag_site_info` WHERE id=$id";
    $result = mysqli_query($connection, $select_single_data);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        $address = $row['address'];
        //$status = $row['c_status'];

?>


        <!doctype html>
        <html lang="en">
        <!doctype html>
        <html lang="en">

        <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hariom Casting Company (P) Limited </title>
  <link rel="icon" href="./dist/img/favicon.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Exta css by dev -->
  <link rel="stylesheet" href="extra.css">
</head>

        <body class="hold-transition sidebar-mini">
            <?php
            include 'navbar.php';
            include 'aside.php';
            ?>
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Update Site Info</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Site Info</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <section class="content card ">
                    <div class="col-12">
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                                <div class="container">
                                    <div class="row">

                                        <div class="form-group col-sm-12">
                                            <label for="address">Address</label>
                                            <textarea name="address" class="form-control" id="address"><?php echo $row['address']; ?></textarea>
                                        </div>
                                        <div class="mb-3 col-sm-12">
                                            <label for="phone" class="form-label">Phone No</label>
                                            <input type="text" name="phone" value="<?php echo $row['phone1']; ?>" class="form-control" id="phone" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3 col-sm-12">
                                            <label for="other" class="form-label">Alternate Phone No</label>
                                            <input type="text" name="other" value="<?php echo $row['phone2']; ?>" class="form-control" id="other" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3 col-sm-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="email" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3 col-sm-12">
                                            <label for="facebook" class="form-label">Facebook</label>
                                            <input type="text" name="facebook" value="<?php echo $row['facebook']; ?>" class="form-control" id="facebook" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3 col-sm-12">
                                            <label for="linkedin" class="form-label">Linkedin</label>
                                            <input type="text" name="linkedin" value="<?php echo $row['linkedin']; ?>" class="form-control" id="linkedin" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3 col-sm-12">
                                            <label for="twitter" class="form-label">Twitter</label>
                                            <input type="text" name="twitter" value="<?php echo $row['twitter']; ?>" class="form-control" id="twitter" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3 col-sm-12">
                                            <label for="youtube" class="form-label">Youtube</label>
                                            <input type="text" name="youtube" value="<?php echo $row['youtube']; ?>" class="form-control" id="youtube" aria-describedby="emailHelp">
                                        </div>
                                                                              
                                        <div class="form-group col-sm-7">
                                        <button type="submit" name="Submit" class="btn btn-primary centre">Submit</button>
                                        <h3><?php echo $msg; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                </section>
            </div>
            </div>

            <?php include 'footer.php'; ?>
            <?php // include '../navfootersider/foot.php'; ?>
        </body>

        </html>
<?php

    } else {
        header('location: site_info.php');
    }
} else {
    header('location: site_info.php');
}
if (isset($_POST['Submit'])) {
    $address = simplename($_POST['address']);
    $phone1 = simplename($_POST['phone']);
    $phone2 = simplename($_POST['other']);
    $email = simplename($_POST['email']);
    $facebook = simplename($_POST['facebook']);
    $linkedin = simplename($_POST['linkedin']);
    $twitter = simplename($_POST['twitter']);
    $youtube = simplename($_POST['youtube']);
//     echo "<pre>";
// print_r($_FILES);
    // if (!empty($_FILES['img1']['tmp_name'])) {
    //     $images = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
    //     $update_img = "UPDATE `jag_about` SET `title`='$name',`description`='$description',`images`='$images' WHERE `id`='$id'";
    //     $result = mysqli_query($connection, $update_img);
    // }
    // else {
        // $images = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
        $update_img = "UPDATE `jag_site_info` SET `address`='$address',`phone1`='$phone1',`phone2`='$phone2',`email`='$email',`facebook`='$facebook',`linkedin`='$linkedin',`twitter`='$twitter',`youtube`='$youtube' WHERE `id`='$id'";
        $result = mysqli_query($connection, $update_img);
    // }
   
        if ($result > 0) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> Your Data Successfully Updated into the Database
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';

            echo "<script>
            setTimeout(function() {
                window.location.replace('site_info.php')
              }, 1000);

        </script>";
        } else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> Something went wrong please try again!!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
}
?>

<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    // Initialize CKEditor
    //CKEDITOR.inline( 'short_desc' );

    CKEDITOR.replace('description', {

        width: "100%",
        height: "200px"

    });
</script>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>