
<?php
require_once 'cek-sesi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/duit.jpg">
  <title>E-Kas</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<?php
require ('koneksi.php');
require ('sidebar.php');

$karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan");
$karyawan = mysqli_num_rows($karyawan);

$pengeluaran_hari_ini = mysqli_query($koneksi, "SELECT jumlah FROM pengeluaran where tgl_pengeluaran = CURDATE()");
$pengeluaran_hari_ini = mysqli_fetch_array($pengeluaran_hari_ini);

$pemasukan_hari_ini = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan where tgl_pemasukan = CURDATE()");
$pemasukan_hari_ini = mysqli_fetch_array($pemasukan_hari_ini);

$pemasukan = mysqli_query($koneksi, "SELECT * FROM pemasukan");
$arraymasuk = [];
while ($masuk = mysqli_fetch_array($pemasukan)){
  $arraymasuk[] = $masuk['jumlah'];
}
$jumlahmasuk = array_sum($arraymasuk);

$pengeluaran = mysqli_query($koneksi, "SELECT * FROM pengeluaran");
$arraykeluar = [];
while ($keluar = mysqli_fetch_array($pengeluaran)){
  $arraykeluar[] = $keluar['jumlah'];
}
$jumlahkeluar = array_sum($arraykeluar);

$uang = $jumlahmasuk - $jumlahkeluar;

//untuk data chart area
$sekarang = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan WHERE tgl_pemasukan = CURDATE()");
$sekarang = mysqli_fetch_array($sekarang);

$satuhari = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan WHERE tgl_pemasukan = CURDATE() - INTERVAL 1 DAY");
$satuhari = mysqli_fetch_array($satuhari);

$duahari = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan WHERE tgl_pemasukan = CURDATE() - INTERVAL 2 DAY");
$duahari = mysqli_fetch_array($duahari);

$tigahari = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan WHERE tgl_pemasukan = CURDATE() - INTERVAL 3 DAY");
$tigahari = mysqli_fetch_array($tigahari);

$empathari = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan WHERE tgl_pemasukan = CURDATE() - INTERVAL 4 DAY");
$empathari = mysqli_fetch_array($empathari);

$limahari = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan WHERE tgl_pemasukan = CURDATE() - INTERVAL 5 DAY");
$limahari = mysqli_fetch_array($limahari);

$enamhari = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan WHERE tgl_pemasukan = CURDATE() - INTERVAL 6 DAY");
$enamhari = mysqli_fetch_array($enamhari);

$tujuhhari = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan WHERE tgl_pemasukan = CURDATE() - INTERVAL 7 DAY");
$tujuhhari = mysqli_fetch_array($tujuhhari);
?>
      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
<!-- <h1>Selamat Datang, <?=$_SESSION['nama']?></h1> -->
<h1>KEUANGAN DPM ITB STIKOM BALI</h1>

<?php require 'user.php'; ?>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="export-semua.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Laporan</a> -->
          </div>

          <!-- Content Row -->
          <!-- Content Row -->
<div class="row">
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pendapatan (Hari Ini)</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              Rp.<?= isset($pemasukan_hari_ini['jumlah']) ? number_format($pemasukan_hari_ini['jumlah'], 2, ',', '.') : '0,00'; ?>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div> 
      &nbsp Bulanan : Rp. 
      <?php
      echo number_format($jumlahmasuk, 2, ',', '.');
      ?>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pengeluaran (Hari Ini)</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              Rp.<?= isset($pengeluaran_hari_ini['jumlah']) ? number_format($pengeluaran_hari_ini['jumlah'], 2, ',', '.') : '0,00'; ?>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div>
      </div> 
      &nbsp Bulanan : Rp. 
      <?php
      echo number_format($jumlahkeluar, 2, ',', '.');
      ?>
    </div>
  </div>
</div>

<!-- Second Row -->
<div class="row">
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sisa Uang</div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                  Rp.<?=number_format($uang, 2, ',', '.');?>
                </div>
              </div>   
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Pengurus</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$karyawan?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-comments fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

          <!-- Content Row -->

         

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>