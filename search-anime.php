<?php
require('listapikey.php');
$apikey=rawurlencode($_GET['apikey']);
$keyword = rawurlencode($_GET['key']);
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'https://api.jikan.moe/v3/search/anime?q='.$keyword.'&limit=10');
curl_setopt($ch, CURLOPT_URL, 'https://api.jikan.moe/v3/search/anime?q='.$keyword.'&limit=10');
$data = curl_exec($ch);
curl_close($ch);
$res = json_decode($data->raw_body, true);
$result = array(
    'created by'=>'rzmy',
    'result'=> $res['results']
);

if(in_array($apikey, $list) && $keyword){
    echo json_encode($result, JSON_PRETTY_PRINT);
}else{
  echo "maaf, input salah. Ex: <a href='./search-anime.php?key=hitori&apikey=contoh'>https://apirzmy.herokuapp.com/search-anime.php?key=hitori&apikey=contoh</a><br/>untuk mendapatkan apikey silahkan kontak creator atau langsung <a href='http://line.me/ti/p/~alkhoarizmy'>Klik disini</a>";
}
?>
