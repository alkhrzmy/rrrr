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
    'result'=> array($res['results'][0]['url'],$res['results'][1]['url']),
);

if(in_array($apikey, $list) && $keyword){
    echo json_encode($result, JSON_PRETTY_PRINT);
}else{
  echo "maaf, input salah. Ex: <a href='./search-anime.php?key=hitori&apikey=contoh'>https://apirzmy.herokuapp.com/search-anime.php?key=hitori&apikey=contoh</a><br/>untuk mendapatkan apikey silahkan kontak creator atau langsung <a href='http://line.me/ti/p/~alkhoarizmy'>Klik disini</a>";
}
?>
