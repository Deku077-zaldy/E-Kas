<?php

session_start();

include('koneksi.php');

define('LOG', 'log.txt');

function write_log($log) {  
    $time = @date('[Y-d-m:H:i:s]');
    $op = $time . ' ' . $log . "\n" . PHP_EOL;
    $fp = @fopen(LOG, 'a');
    $write = @fwrite($fp, $op);
    @fclose($fp);
}

$id = (int) $_GET['id_pemasukan'];
$tgl = $_GET['tgl_pemasukan']; // Ambil sebagai string
$jumlah = abs((int) $_GET['jumlah']);
$sumber = abs((int) $_GET['id_sumber']);

// Validasi format tanggal
$date_format = 'Y-m-d';
$d = DateTime::createFromFormat($date_format, $tgl);
if (!$d || $d->format($date_format) !== $tgl) {
    die("Error: Format tanggal tidak valid. Gunakan format YYYY-MM-DD.");
}

//query update
$query = mysqli_query($koneksi, "UPDATE pemasukan SET tgl_pemasukan='$tgl', jumlah='$jumlah', id_sumber='$sumber' WHERE id_pemasukan='$id'");

$namaadmin = $_SESSION['nama'];
if ($query) {
    write_log("Nama Admin : " . $namaadmin . " => Edit Pemasukan => " . $id . " => Sukses Edit");
    // Redirect ke page index
    header("location:pendapatan.php"); 
} else {
    write_log("Nama Admin : " . $namaadmin . " => Edit Pemasukan => " . $id . " => Gagal Edit");
    echo "ERROR, data gagal diupdate: " . mysqli_error($koneksi);
}

//mysql_close($host);
?>
