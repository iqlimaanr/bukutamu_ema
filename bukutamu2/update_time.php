<?php 
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
$update = $koneksi->query("UPDATE buku_tamu SET jam_keluar=NOW() WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_terakhir.php");
 
?>