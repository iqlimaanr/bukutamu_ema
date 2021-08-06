<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(img/bg3.jpg); background-size: cover; no-repeat; background-attachment:fixed;">


<div class="container-fluid">
<main class="container border">
<div class="row">
<div class="col-12">
<div id="card">
<div id="card-content">
<div class="text-center">
<form class="form-horizontal" method="post" name="login" action="prosesdaftar.php">
<div class="form-group">
<font face="Century Gothic">
<label class="control-label col-sm-3" for="nama">Name:</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="nama" placeholder="Enter your name" name="nama">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3" for="email">Email:</label>
<div class="col-sm-9">
<input type="email" class="form-control" id="email" placeholder="Enter email  " name="email">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3" for="username">Username:</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3" for="password">Password:</label>
<div class="col-sm-9">          
<input type="password" class="form-control"  placeholder="Enter password" name="password">
</div>
</div>
<div class="form-group" >        
<div class="form-group" >        
            <div class="col-sm-12  text-center">
            <button type="submit" class="btn btn-lg btn-primary btn-block" value="login">Buat User</button>
            </div>
        </div>
<p><a class="btn btn-primary btn-sm" href="index.php">Kembali</a></p>
</div>
</div>
</form>
</div>
</div> 
</div>
</div>
</div>
</div>
<style>
#card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 340px;
        width: 380px;
        margin: 12rem auto 8.1rem auto;
}

#card-content {
      padding: 25px 30px 8px 30px;
}      
</style>
</body>
</html>