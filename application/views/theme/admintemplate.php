<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="MURIS STUDIO WEB SEKOLAH GRATIS PREMIUM">
  <meta name="author" content="MURIS STUDIO">

  <title><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('');?>style/img/tut-wuri-handayani-7759-32x32.ico">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('');?>admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('');?>admin/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo base_url('');?>admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('theme/adminnavigation'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        
        <?php $this->load->view($main_view); ?>
          

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <?php $this->load->view('theme/adminfooter'); ?>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
    
  <script src="<?php echo base_url('');?>admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('');?>admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('');?>admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('');?>admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('');?>admin/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('');?>admin/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url('');?>admin/js/demo/chart-pie-demo.js"></script>
    
    <script src="<?php echo base_url('');?>admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url('');?>admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('');?>admin/js/demo/datatables-demo.js"></script>
    
    <script src="<?php echo base_url().'theme/ckeditor/ckeditor.js'?>"></script>

</body>

</html>
