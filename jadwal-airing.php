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

$day_list = array(
  'sunday','monday','tuesday','wednesday','friday','saturday',
  'Sunday','Monday','Tuesday','Wednesday','Friday','Saturday'
);
$map_day= array_map('strtolower',$day_list);

$uri= 'https://api.jikan.moe/v3/schedule/'.$keyword;
$respon = Unirest\Request::get("$uri");
$res = json_decode($respon->raw_body, true);
$result = array(
    'created by'=>'rzmy',
    'docs by'=>'jikan',
    'result'=> $res[$keyword],
);
if(in_array($keyword,$map_day)){
  if(in_array($apikey, $list)){
    echo '<pre style="word-wrap: break-word; white-space: pre-wrap;">'.json_encode($result, JSON_PRETTY_PRINT).'</pre>';
  }else{
    echo "<br/><div class='container'><div class='card bg-danger text-red'>
    <div class='card-body'>Parameter yang anda masukan salah</div></div><br/>Maaf, input salah. Ex: <a href='./jadwal-airing.php?key=sunday&apikey=contoh'>https://apirzmy.herokuapp.com/jadwal-airing.php?key=sunday&apikey=contoh</a><br/>untuk mendapatkan apikey silahkan kontak creator atau langsung <a href='http://line.me/ti/p/~alkhoarizmy'>Klik disini</a></div>";
  }
}else{
echo "<br/><div class='container'><div class='card bg-danger text-red'>
    <div class='card-body'>Parameter yang anda masukan salah</div></div><br/>Error: input salah atau apikey tidak ada<br/>
contoh => https://apirzmy.herokuapp.com/jadwal-airing.php?apikey=contoh&key=sunday</div>";
}
?>
        
    </body>
</html>






