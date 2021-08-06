<?php 
include("config.php");

if (isset($_POST['submit'])) {
 $date1 = $_POST['date1'];
 $date2 = $_POST['date2'];

 if (!empty($date1) && !empty($date2)) {
  // perintah tampil data berdasarkan range tanggal
  $q = mysqli_query($koneksi, "SELECT * FROM buku_tamu WHERE tanggal BETWEEN '$date1' and '$date2'"); 
 } else {
  // perintah tampil semua data
  $q = mysqli_query($koneksi, "SELECT * FROM buku_tamu"); 
 }
} else {
 // perintah tampil semua data
 $q = mysqli_query($koneksi, "SELECT * FROM buku_tamu");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
        <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script>
        <!--End Link yang langsung ke website nya -->
</head>
<body style="background-image: url(img/bg3.jpg); background-size: cover; no-repeat; background-attachment:fixed;">
<header class="container-fluid">
        <div class="row">
        <div class="col-12 py-3 text-left" style="background-color: #add8e6">
            <a href="#"><img src="img/logo.png" alt="judul" height="80px" width="500px">
        </div>
</header>  
<font face="Century Gothic">      
    <nav class="navbar navbar-default navbar-light bg-primary">
    <div class="container">
          <div class="col-12 py-3">
            <a class="navbar-brand" href="index.php">Halaman utama</a>
            </div>
            <div>
            <ul class="nav navbar-nav">
                    <li><a href="data_terakhir.php">Data Terakhir</a></li>
                    <li><a href="data1.php">Data Buku Tamu</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                    <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span>  Tambah User</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
            </ul>
            </div>
    </div>
    </nav>
    
  <div class="container">
   <div class="row g-2 g-md-4">
   <div class="col-12 py-2 text-center">
   <h1><b>Data Buku Tamu</b></h1>
    <form method="POST" action="" class="form-inline mt-3">
     &nbsp;
     <label for="date1">Tanggal mulai </label> 
     <input type="date" name="date1" id="date1" class="form-control mr-2">
     &nbsp;
     <label for="date2">Sampai </label>
     <input type="date" name="date2" id="date2" class="form-control mr-2">
     <button type="submit" name="submit" class="btn btn-primary">Cari</button>
    </form>
   </div>
   <br>
   <div class="col-12 text-center ">
    <table border="1" class="table-bordered" id="data1" style="background-color:white;" >
     <thead>
      <th style="border-color:black;" class="text-center">#</th>
      <th style="border-color:black;" class="text-center">Tanggal</th>
      <th style="border-color:black;" class="text-center">Nama</th>
      <th style="border-color:black;" class="text-center">Instansi</th>
      <th style="border-color:black;" class="text-center">No. Telp</th>
      <th style="border-color:black;" class="text-center">Alamat</th>
      <th style="border-color:black;" class="text-center">Kepentingan</th>
      <th style="border-color:black;" class="text-center">Jam masuk</th>
      <th style="border-color:black;" class="text-center">Jam keluar</th>
      <th style="border-color:black;" class="text-center">Foto Bukti</th>
        <th style="border-color:black;" class="text-center"> </th>
     </thead>
     <tbody>
     <?php
     
     $no = 1;

     while ($r = $q->fetch_assoc()) {
     ?>

     <tr>
        <td style="border-color:black;"><?= $no++ ?></td>
        <td style="border-color:black;"><?= date('d-M-Y', strtotime($r['tanggal'])) ?></td>
        <td style="border-color:black;"><?= ucwords($r['nama']) ?></td>
        <td style="border-color:black;"><?= ucwords($r['instansi']) ?></td>
        <td style="border-color:black;"><?= ucwords($r['notelp']) ?></td>
        <td style="border-color:black;"><?= ucwords($r['alamat']) ?></td>
        <td style="border-color:black;"><?= ucwords($r['kepentingan']) ?></td>
        <td style="border-color:black;"><?= ucwords($r['jam_masuk']) ?></td>
        <td style="border-color:black;"><?= ucwords($r['jam_keluar']) ?></td>
        <td style="border-color:black;"><?= ucwords($r['camera']) ?></td>
        <td style="border-color:black;">
        <a href="edit.php?id=<?php echo $r['id']; ?>"><button type="button" class="btn btn-warning" ><span class="glyphicon glyphicon-edit">&nbsp;EDIT</button></a>

        <a href="data1.php?id=<?php echo $r['id']; ?>"> <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;DELETE</button></a>
        </td>
     </tr>
     </tbody>
     <?php   
     }
     ?>
 <?php 
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from buku_tamu where id='$id'");
 

?>    
 <script type="text/javascript">
            $(function() {
                $('#data1').dataTable();
            });
        </script>
    </table>
   </div>
  </div>
 </div>

</body>
</html>