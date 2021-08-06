<?php
include "config.php";
session_start();
if (isset($_SESSION['username'])){
header ("location:index.php");
}
?>
<html>
<head>
<title>LOGIN</title>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
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
        <div class="col-12 text-center">
        <img src="img/logo_light.png" alt="judul" height="90px" width="100px" style="margin:7px">
          <h1><font face="Arial Black">PT. BUMI INTAN GEMILANG</h1>
        </div>
  </header> 
<div class="container-fluid">
<main class="container border">
<div class="row">
<div class="col-12">
<div id="card">
<div id="card-content">
<div class="text-center">
      <form class="form-horizontal" method="post" name="login" action="processlogin.php">
      <h3><font face="Century Gothic" color="black">LOGIN UNTUK AKSES BUKU TAMU</h3>
      <br>
        <div class="form-group">
            <label class="control-label col-sm-3" for="username">Username </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="password">Password </label>
            <div class="col-sm-9">          
                <input type="password" class="form-control"  placeholder="Enter password" name="password">
            </div>
        </div>
        <div class="form-group" >        
            <div class="col-sm-12  text-center">
            <button type="submit" class="btn btn-lg btn-primary btn-block" value="login">Login</button>
            </div>
        </div>
        <div class="col-12 text-center">
        <img src="img/logo_itk.png" alt="judul" height="60px" width="150px" style="margin:5px">
      </form>
  </div>
</div> 
</div>
</div>
<style>
#card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 380px;
        width: 325px;
        margin: 2rem auto 8.1rem auto;
}

#card-content {
      padding: 11px 30px 8px 30px;
}      
</style>
</body>
</html>