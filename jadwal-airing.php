<?php
require('listapikey.php');
$apikey=rawurlencode($_GET['apikey']);
$keyword = rawurlencode($_GET['key']);
require_once('./unirest-php-master/src/Unirest.php');

$day_list = array(
  'sunday','monday','tuesday','wednesday','friday','saturday',
  'Sunday','Monday','Tuesday','Wednesday','Friday','Saturday'
);

$uri= 'https://api.jikan.moe/v3/schedule/'.$keyword;
$respon = Unirest\Request::get("$uri");
$res = json_decode($respon->raw_body, true);
$result = array(
    'created by'=>'rzmy',
    'docs by'=>'jikan',
    'result'=> $res[$keyword],
);
if(in_array($keyword,$day_list)&&in_array($apikey, $list)){
  echo json_encode($result, JSON_PRETTY_PRINT);
}else{
echo "Error: input salah atau apikey tidak ada\ncontoh => https://apirzmy.herokuapp.com/jadwal-airing.php?apikey=contoh&key=sunday";
}
?>
