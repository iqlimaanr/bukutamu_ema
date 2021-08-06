<?php
include("config.php");
session_start();
if (!isset($_SESSION['username'])){
header ("location:login.php");
}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Buku Tamu</title>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <link href="css/bootstrap.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    
<div class="container ">
<div class="row g-2">
    <div class="col-md-2 text-center">
    </div>
   <div class="col-md-8 text-center">
   <h1 ><font face="Century Gothic"><b>Data Terakhir</h1>
   <br>
        <?php 
            include 'config.php';
                $no = 1;
                $data = mysqli_query($koneksi,"select * from buku_tamu ORDER BY id DESC LIMIT 5");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <table class="table table-striped" style="background-color:white;" cellpadding="0">
                    <tr>
                    <th width="150px">Tanggal</th>
                    <th>:</th>
                    <th width="380px"><?php echo $d['tanggal']; ?></th>
                    <th align="center" rowspan="9"><?php echo "<img src='images/".$d['camera']."' width='320px' height='240px'/>"; ?></td>
                    </tr>
                    <tr>
                    <th width="150px">Nama</th>
                    <th>:</th>
                    <th width="380px"><?php echo $d['nama']; ?></th>
                    </tr>
                    <tr>
                    <th width="150px">Instansi</th>
                    <th>:</th>
                    <th width="380px"><?php echo $d['instansi']; ?></th>
                    </tr>
                    <tr>
                    <th width="150px">Nomor Telpon</th>
                    <th>:</th>
                    <th width="380px"><?php echo $d['notelp']; ?></th>
                    </tr>
                    <tr>
                    <th width="150px">Alamat</th>
                    <th>:</th>
                    <th width="380px"><?php echo $d['alamat']; ?></th>
                    </tr>
                    <tr>
                    <th width="150px">Kepentingan</th>
                    <th>:</th>
                    <th width="380px"><?php echo $d['kepentingan']; ?></th>
                    </tr>
                    <tr>
                    <th width="150px">Foto</th>
                    <th>:</th>
                    <th width="380px"><?php echo $d['camera']; ?></th>
                    </tr>
                    <tr>
                    <th width="150px">Jam masuk</th>
                    <th>:</th>
                    <th width="380px"><?php echo $d['jam_masuk']; ?></th>
                    </tr>
                    <tr>
                    <th width="150px">Jam keluar</th>
                    <th>:</th>
                    <th width="380px"><?php echo $d['jam_keluar']; ?></th>
                    </tr>
                    <tr>
                    <td colspan="4" align="center"><a href="update_time.php?id=<?php echo $d['id']; ?>"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-open"></span>&nbsp;&nbsp;UPDATE</button></a> &nbsp; &nbsp;
                    <a href="edit.php?id=<?php echo $d['id']; ?>"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;EDIT</button></a> &nbsp; &nbsp;   
                    <a href="data_terakhir.php?id=<?php echo $d['id']; ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;DELETE</button></a>
                    </td>
                    </tr>
                <?php 
                }
                ?>
            </table>
	</div>
    <div class="col-md-2 text-center">
    </div>
  </div>
 </div>   

<?php 
include 'config.php';
$id = $_GET['id'];
// menghapus data
mysqli_query($koneksi,"DELETE from buku_tamu where id='$id'");
?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>