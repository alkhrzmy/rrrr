<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Error</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="https://apirzmy.000webhostapp.com/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <script src="https://apirzmy.000webhostapp.com/js/ie-emulation-modes-warning.js"></script>
    </head>
    <body>

<?php
$halaman=rawurlencode($_GET['h']);
$error = rawurlencode($_GET['e']);

if($error=='nonev1'){
  echo "<br/><div class='container'><div class='card bg-danger text-warning'>
    <div class='card-body'>Parameter yang anda masukan salah</div></div><br/>
  Maaf, input salah. Ex: <a href='./".$halaman.".php?key=hitori&apikey=contoh'>https://apirzmy.herokuapp.com/".$halaman.".php?key=hitori&apikey=contoh</a><br/>untuk mendapatkan apikey silahkan kontak creator atau langsung <a href='http://line.me/ti/p/~alkhoarizmy'>Klik disini</a></div>";
}elseif($error=='nonev2'){
  echo "<br/><div class='container'><div class='card bg-danger text-warning'>
    <div class='card-body'>Parameter yang anda masukan salah</div></div><br/>
  Maaf, input salah. Ex: <a href='./".$halaman.".php?apikey=contoh'>https://apirzmy.herokuapp.com/".$halaman.".php?apikey=contoh</a><br/>untuk mendapatkan apikey silahkan kontak creator atau langsung <a href='http://line.me/ti/p/~alkhoarizmy'>Klik disini</a></div>";
}


?>


  </body>
</html>
