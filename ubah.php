<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$id     = $_POST['id'];
$alamat     = $_POST['alamat'];
$tipe   = $_POST['tipe'];
$alamat_event   = $_POST['alamat_event'];
$tanggal_event   = $_POST['tanggal_event'];

// update data ke database
mysqli_query($koneksi, "UPDATE info SET nama='$nama', id='$id', alamat='$alamat', tipe='$tipe', alamat_event='$alamat_event', tanggal_event='$tanggal_event' WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("Location: info.php");
?>