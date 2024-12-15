<?php
include('koneksi.php');

$tgl_pemasukan = $_GET['tgl_pemasukan'];
$jumlah = $_GET['jumlah'];
$sumber = $_GET['sumber'];

// Validasi input
if (empty($tgl_pemasukan) || empty($jumlah) || empty($sumber)) {
    die("Error: Semua field harus diisi.");
}

//query insert
$query = mysqli_query($koneksi, "INSERT INTO `pemasukan` (`tgl_pemasukan`, `jumlah`, `id_sumber`) VALUES ('$tgl_pemasukan', '$jumlah', '$sumber')");

if ($query) {
    // Redirect ke page index
    header("location:pendapatan.php"); 
} else {
    echo "ERROR, data gagal diupdate: " . mysqli_error($koneksi);
}
?>
