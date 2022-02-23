<?php
$msg = "";
$row = "";
//include 'function.inc.php';
include 'connection.inc.php';


?>


        <!doctype html>
        <html lang="en">
        <!doctype html>
        <html lang="en">

        <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Shree Jagannathdham Temple</title>
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
                                <h1>Update About Temple</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">About Temple</li>
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

                                        <div class="mb-3 col-sm-12">
                                            <label for="exampleInputEmail1" class="form-label">Title</label>
                                            <input type="text" name="name" value="<?php echo $row['title']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                        </div>
                                        <div class="md-form col-sm-12">
                                            <label data-error="wrong" data-success="right" for="defaultForm-email">Existing Image</label><br>
                                            <img name="img" height="100px" width="100px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['images']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                                            <!-- <input  type="file" id="defaultForm-email" class="form-control validate" placeholder="Enter Caregorie Name"> -->

                                        </div>
                                        <div class="md-form col-sm-12">
                                            <label data-error="wrong" data-success="right" for="defaultForm-email">Image</label>
                                            <input name="img1" type="file" id="defaultForm-email" class="form-control validate" placeholder="Enter Caregorie Name">

                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label for="exampleFormControlSelect1">Description</label>
                                            <textarea name="description" class="form-control"><?php echo $row['description']; ?></textarea>
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

