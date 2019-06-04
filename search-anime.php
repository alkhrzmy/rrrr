<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Anime search</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="https://apirzmy.000webhostapp.com/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <script src="https://apirzmy.000webhostapp.com/js/ie-emulation-modes-warning.js"></script>
    </head>
    <body>
        
        <?php
require('listapikey.php');
$apikey=rawurlencode($_GET['apikey']);
$keyword = rawurlencode($_GET['key']);
require_once('./unirest-php-master/src/Unirest.php');

$uri= 'https://api.jikan.moe/v3/search/anime?q='.$keyword.'&limit=10';
$respon = Unirest\Request::get("$uri");
$res = json_decode($respon->raw_body, true);

$result = array(
    'created by'=>'rzmy',
    'docs by'=>'jikan',
    'result'=> $res['results'],
);

if($keyword){
    if(in_array($apikey, $list)){
        echo json_encode($result, JSON_PRETTY_PRINT);
    }else{
        echo '<center><h2>Maaf, apikey tidak ditemukan. Silahkan kontak creator. <br/></h2><h1><a href="https://line.me/ti/p/~alkhoarizmy" color="green">LINE</a></h1></center>';
    }
}else{
  echo "<div class='container'><div class='card bg-danger text-red'>
    <div class='card-body'>Parameter yang anda masukan salah</div></div><br/>
  Maaf, input salah. Ex: <a href='./search-anime.php?key=hitori&apikey=contoh'>https://apirzmy.herokuapp.com/search-anime.php?key=hitori&apikey=contoh</a><br/>untuk mendapatkan apikey silahkan kontak creator atau langsung <a href='http://line.me/ti/p/~alkhoarizmy'>Klik disini</a></div>";
}
?>
        
    </body>
</html>
