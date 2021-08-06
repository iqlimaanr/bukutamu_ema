<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$nama       = $koneksi->real_escape_string($_POST['nama']);
$instansi     = $koneksi->real_escape_string($_POST['instansi']);
$notelp        = $koneksi->real_escape_string($_POST['notelp']);
$alamat       = $koneksi->real_escape_string($_POST['alamat']);
$kepentingan   = $koneksi->real_escape_string($_POST['kepentingan']);
$tanggal    = date('Y-m-d');
$camera =  time() . '.jpg';
$filepath = 'images/';
$jam_masuk  = $koneksi->real_escape_string($_POST['jam_masuk']);
$jam_keluar  = $koneksi->real_escape_string($_POST['jam_keluar']);
 
if($_POST['submit']){
    $input = $koneksi->query("UPDATE buku_tamu(tanggal, nama,instansi,notelp,alamat,kepentingan, camera, jam_masuk, jam_keluar) VALUES('$tanggal','$nama','$instansi','$notelp','$alamat','$kepentingan','$camera','$jam_masuk','$jam_keluar')") or die($koneksi->error);
    if($input){
        echo '<div class="alert alert-success">Pesan anda berhasil di simpan!</div>';
    }
    else{
        echo '<div class="alert alert-warning">Gagal menyimpan pesan!</div>';
    }
}
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>