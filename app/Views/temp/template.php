<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>

<body>
  <div class="container-scroller">
    <?= $this->include('temp/navbar'); ?>
    <?= $this->renderSection('content'); ?>
    <!-- partial:partials/_footer.html -->
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 . TEAM IT.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->

  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?= base_url(); ?>/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url(); ?>/assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= base_url(); ?>/assets/js/off-canvas.js"></script>
  <script src="<?= base_url(); ?>/assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url(); ?>/assets/js/misc.js"></script>
  <script src="<?= base_url(); ?>/assets/js/settings.js"></script>
  <script src="<?= base_url(); ?>/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url(); ?>/assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>


</html>