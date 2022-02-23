<?php
include 'connection.inc.php';

if (isset($_SESSION['username']) && ($_SESSION['username'] != '')) {
  $select = "SELECT * FROM `quote` WHERE 1";
  $result = mysqli_query($connection, $select);
} else {
  header('location:./AdminLogin/super_Admin.php');
}



?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hariom Casting Company (P) Limited </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="icon" href="./dist/img/favicon.ico">
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
  <div class="wrapper">
    <!-- Navbar -->
    <?php
    include 'navbar.php';
    include 'aside.php';
    ?>
    <!-- end navbar -->
    <!-- Main Sidebar Container -->




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Quote</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Quote</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- /.card -->

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Quote</h3>
                </div>
                <!-- /.card-header -->
            
                <div class="card-body">
                <div class="table-responsive ">
                  <table id="example1" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Design</th>
                        <th>Load class</th>
                        <th>Tentative Quality</th>
                        <th>Frame height</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Company Name</th>
                        <th>Contact No</th>
                        <th>Address</th>
                        <th>Comments</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal<?php echo $rows['con_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Candidate Massages </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <?php echo $rows['con_query']; ?>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- massage end -->
                      
                      
                        <?php
                          $cnt=1;
                        while ($rows = mysqli_fetch_array($result)) 
                        {?>
                          <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $rows['design']; ?></td>
                            <td><?php echo $rows['load']; ?></td>
                            <td><?php echo $rows['tentative']; ?></td>
                            <td><?php echo $rows['frame']; ?></td>
                            <td><?php echo $rows['name']; ?></td>
                            <td><?php echo $rows['email']; ?></td>
                            <td><?php echo $rows['company']; ?></td>
                            <td><?php echo $rows['number']; ?></td>
                            <td><?php echo $rows['address']; ?></td>
                            <td><?php echo $rows['comments']; ?></td>
                            


                            <td> <a href="delete_quote.php?delete=<?php echo $rows['id']; ?>" class="btn btn-danger">Delete</a>
                          

                          </tr>
                     <?php 
                        $cnt++;
                        }  ?>
                    </tbody>
                    <tfoot>
                      <tr>
                      <tr>
                       <th>ID</th>
                        <th>Design</th>
                        <th>Load class</th>
                        <th>Tentative Quality</th>
                        <th>Frame height</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Company Name</th>
                        <th>Contact No</th>
                        <th>Address</th>
                        <th>Comments</th>
                        <th>Action</th>
                      </tr>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include 'footer.php';   ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="plugins/datatables/jquery.dataTables.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
</body>

</html>