<?php
include "../include/connect.php";
include "../include/session.php"; 
?>
<!DOCTYPE html>
<html>
<head>
<title> Pegawai | Tersetujui dan Disimpan</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


  <!-- jQuery 2.1.4 -->
  <script src="../assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/app.min.js"></script>
    <!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../GGP.ico">
    <!-- Tell the browser to be responsive to screen width -->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/fa/css/font-awesome.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">

<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini ">
<div class="wrapper">

  <header class="main-header">
  <!-- Logo -->
<div class="logo">
<span class="logo-mini"><img src="../assets/images/logo.png" class="img-circle" alt="Logo" height="50" width="50"></span>
<span class="logo-lg"><b>Laporan Bulanan</b></span>
</div>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!--<img src="../assets/foto/<?php// echo "".$_SESSION["Foto"]."" ?>" class="user-image" alt="Foto">-->
              <img src="../assets/images/avatar0.jpg" class="user-image" alt="Foto">
              <span class="hidden-xs"><?php echo $_SESSION['role']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
	              <img src="../assets/images/avatar0.jpg" class="img-circle" alt="images">
                <p style="text-transform:capitalize;">Hi <?php echo $_SESSION['role'];?></p>
                <p>Selamat Datang Di Laporan Bulanan</p>
             </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default     btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-danger btn-flat">Log out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
</header>  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../assets/images/avatar0.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
				<p><?php echo $_SESSION['role']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
            <div class="pull-left image">
              <p></p>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">					
						<li class="header"><h4><b><center>Riwayat Aktifitas</center></b></h4></li>
            <li class="active"><a href="home.php"><i class="fa fa-home"></i><span>Kirim Laporan Bulanan</span></a></li>
            <li><a href="tersimpan.php"><i class="fa fa-users"></i><span>Laporan Bulanan Tersimpan</span></a></li>            
            <li><a href="riwayat.php"><i class="fa fa-medkit"></i><span>Riwayat</span></a></li>
          </ul>
        </section>
    <!-- /.sidebar -->
  </aside>  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Riwayat Aktifitas
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "detail_tunda.php";
						?>
                  </table>


		<footer class="main-footer">
    		<div class="pull-right hidden-xs"></div>
    		<strong><center><?php include "../include/footer.php";?></center></strong>
		</footer>

	</div><!-- ./wrapper -->


	

	
	
		<!-- Javascript Edit--> 
		<script type="text/javascript">
		$(document).ready(function () {
	
		
		// Pasien Edit
		$(".open_modal_edit").click(function(e) {
			var m = $(this).attr("nik");
				$.ajax({
					url: "pasien_modal_detail.php",
					type: "GET",
					data : {nik: m,},
					success: function (ajaxData){
					$("#ModalEditPasien").html(ajaxData);
					$("#ModalEditPasien").modal('show',{backdrop: 'true'});
					}
				});
			});
	
			
		// Pasien Detail
		$(".open_modal_detail").click(function(e) {
			var m = $(this).attr("nik");
				$.ajax({
					url: "pasien_modal_detail.php",
					type: "GET",
					data : {nik: m,},
					success: function (ajaxData){
					$("#ModalDetailPasien").html(ajaxData);
					$("#ModalDetailPasien").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jenjang
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jenjang_modal_edit.php",
					type: "GET",
					data : {Kode_Jenjang: m,},
					success: function (ajaxData){
					$("#ModalEditJenjang").html(ajaxData);
					$("#ModalEditJenjang").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jadwal
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jadwal_modal_edit.php",
					type: "GET",
					data : {Id_Jadwal: m,},
					success: function (ajaxData){
					$("#ModalEditJadwal").html(ajaxData);
					$("#ModalEditJadwal").modal('show',{backdrop: 'true'});
					}
				});


			});
		});
	</script>
	
	<!-- Javascript Delete -->
	<script>
		function confirm_delete(delete_url){
			$("#modal_delete").modal('show', {backdrop: 'static'});
			document.getElementById('delete_link').setAttribute('href', delete_url);
		}
	</script>
