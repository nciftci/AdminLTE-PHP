<?php
  $active_menu = "dashboard";
  include_once "../layout/header.php";
?>

<body class="hold-transition skin-blue sidebar-mini">
  <link href="style.css" rel="stylesheet"/>
  <!-- Put Page-level css and javascript libraries here -->
  <!-- JQuery UI -->
  <!-- <link href="../../dist/css/jquery-ui.min.css" rel="stylesheet"/> -->

  <!-- DataTables -->
  <!-- <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script> -->

  <div class="wrapper">

    <?php include_once "../layout/topmenu.php"; ?>
    <?php include_once "../layout/left-sidebar.php"; ?>
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- <section class="content-header">
        <h1>
          Dashboard 
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section> -->

      <!-- Main content -->
      <section class="content">

        <?php include_once("main_header.php") ?>
        
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    
    <?php include_once "../layout/copyright.php"; ?>
    <?php include_once "../layout/right-sidebar.php"; ?>

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div><!-- ./wrapper -->

<?php include_once "../layout/footer.php" ?>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->
<script src="script.js"></script>