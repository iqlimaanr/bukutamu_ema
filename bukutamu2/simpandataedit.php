<?php

include("config.php");
session_start();
if (!isset($_SESSION['username'])){
    header ("location:login.php");
}

$id      = $_POST['id'];
$nama       = $_POST['nama'];
$instansi     = $_POST['instansi'];
$notelp        = $_POST['notelp'];
$alamat       = $_POST['alamat'];
$kepentingan   = $_POST['kepentingan'];
$tanggal    = date('Y-m-d');
$jam_masuk  = $_POST['jam_masuk'];
$jam_keluar  = $_POST['jam_keluar'];

$foto  = $_POST['image'];

$data = mysqli_query($koneksi,"SELECT * FROM buku_tamu where id='$id'");
while($d = mysqli_fetch_array($data)){
    if ($foto ==  $d['camera']) {
        $fileName = $foto;
    }else{
        $img = $foto;
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
    }
    
}

if($_POST['submit']){
    $update = $koneksi->query("UPDATE buku_tamu SET tanggal='$tanggal', nama='$nama',instansi='$instansi',notelp='$notelp',alamat='$alamat',kepentingan='$kepentingan',camera='$fileName', jam_masuk='$jam_masuk', jam_keluar='$jam_keluar' WHERE id='$id'"); 
    if($update){
        echo "<script>alert('Data berhasil disimpan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    }
    else{
        echo "<script>alert('Gagal menyimpan data')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    }
}
?>  