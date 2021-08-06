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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body style="background-image: url(img/bg3.jpg); background-size: cover; no-repeat; background-attachment:fixed;">
    <header class="container-fluid">
        <div class="row">
            <div class="col-12 py-3 text-left" style="background-color: #add8e6">
                <a href="#"><img src="img/logo.png" alt="judul" height="80px" width="500px">
                </a>
            </div>
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
    </font>
    <div class="container">
        <main class="container border">
            <form class="form-horizontal" method="post" action="simpandata.php" >
                <div class="row">
                    <div class="col-md-8 py-5">
                        <div id="card">
                            <div id="card-content">  
                                <h3>Form Buku Tamu</h3>
                                <br>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" class="form-control" required>
                                    </div>
                                </div>    
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Instansi</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="instansi" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nomor Telp</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="notelp" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="alamat" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kepentingan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="kepentingan" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-12 text-center">
                                    <br/>
                                    <input id="tombol_simpan" type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="SIMPAN">
                                </div>
                                

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 py-5">
                        <center>
                            <div class="row">
                                <div id="my_camera"></div>
                                <input type="hidden" name="image" class="image-tag">
                                <div id="results">
                                </div>
                                <br>
                                <div id="webcam" >
                                    <input type=button class="btn btn-warning" value="Take Snapshot" onClick="take_snapshot()">
                                </div>
                                <div id="batal" style="display:none">
                                    <input type=button class="btn btn-danger" value="Remove" onClick="batal()">
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </form>
        </main>
    </div>

    <style>
    #my_camera{        
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    }

    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 455px;
        width: 590px;
    }

    #card-content {
        padding: 15px 30px 12px 30px;
    }</style>

    <!-- Configure a few settings and attach camera -->
    <script language="JavaScript">
        document.getElementById('tombol_simpan').disabled = true;

        Webcam.set({
            width: 410,
            height: 308,
            image_format: 'jpeg',
            jpeg_quality: 90
        });

        Webcam.attach( '#my_camera' );

        function take_snapshot() {
            Webcam.snap( function(data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
            } );
            document.getElementById('my_camera').style.display = 'none';
            document.getElementById('webcam').style.display = 'none';
            document.getElementById('tombol_simpan').disabled = false;
            document.getElementById('batal').style.display = '';
            document.getElementById('results').style.display = '';
        }

        function batal() {
            document.getElementById('my_camera').style.display = '';
            document.getElementById('webcam').style.display = '';
            document.getElementById('tombol_simpan').disabled = true;
            document.getElementById('batal').style.display = 'none';
            document.getElementById('results').style.display = 'none';
        }

    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
