<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <head>
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
</head>
<style>
body{
font-family: "droid arabic kufi"!important;
}
</style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Kurd spotify</title>
  </head>
  <body class="bg-dark">
<br>

<center>
<?php
if (isset($_POST['expire'])) {
echo '<div style="width:300px" class="alert alert-danger" role="alert">ببورە ئيمەيڵ ھەڵەيە
</div>';
}
?>
</center>

<form method="POST">
<div class="form-row">
<div class="form-group">
<label style="color:white;margin-left:20px;">ئيمەيڵ داخل بكە بۆ زانينى كاتى بەسەرچوون</label>
<input style="font-family:arial;margin-left:20px" name="resutl" type="text" class="form-control" placeholder="name@spotify.com">
</div></div>
<input name="expire" style="margin-left:17px" type="submit" class="btn btn-success" value='ماوەى بەسەرچوون' />
    </div>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npmpopper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>