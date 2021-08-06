<?php

include("config.php");
session_start();
if (!isset($_SESSION['username'])){
    header ("location:login.php");
}

$img = $_POST['image'];
$folderPath = "images/";

if(!is_dir($folderPath))
    mkdir($folderPath);

$image_parts = explode(";base64,", $img);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];

$image_base64 = base64_decode($image_parts[1]);
$fileName = $_SESSION['username'] . time() . '.jpg';

$file = $folderPath . $fileName;
file_put_contents($file, $image_base64);

$nama       = $koneksi->real_escape_string($_POST['nama']);
$instansi     = $koneksi->real_escape_string($_POST['instansi']);
$notelp        = $koneksi->real_escape_string($_POST['notelp']);
$alamat       = $koneksi->real_escape_string($_POST['alamat']);
$kepentingan   = $koneksi->real_escape_string($_POST['kepentingan']);
$tanggal    = date('Y-m-d');
$jam_masuk  = date('H:i:sa');
$jam_keluar  = $koneksi->real_escape_string($_POST['jam_keluar']);

if($_POST['submit']){
    $input = $koneksi->query("INSERT INTO buku_tamu(tanggal, nama, instansi, notelp, alamat, kepentingan, camera, jam_masuk, jam_keluar) VALUES('$tanggal','$nama','$instansi','$notelp','$alamat','$kepentingan','$fileName','$jam_masuk','$jam_keluar')") or die($koneksi->error);
    if($input){
        echo "<script>alert('Data berhasil disimpan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    }
    else{
        echo "<script>alert('Gagal menyimpan data')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    }
}
?>