<?php

include 'koneksi.php';

$nama   = $_POST['nama'];
$id   = $_POST['id'];
$alamat = $_POST['alamat'];
$tipe   = $_POST['tipe'];
$event   = $_POST['alamat_event'];
$tanggal = $_POST['tanggal_event'];
    
mysqli_query($koneksi, "INSERT INTO info (nama, id, alamat, tipe, alamat_event, tanggal_event) VALUES ('$nama', '$id', '$alamat', '$tipe', '$event', '$tanggal')");

header("Location: info.php");
?>