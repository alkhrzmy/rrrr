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
$err = array(
    'error'=>true,
    'msg'=>'Maaf, parameter input yang anda masukan salah. Ex: ./jadwal-airing.php?apikey=sbeve&key=one+punch'
);
if(in_array($keyword,$map_day)){
  if(in_array($apikey, $list)){
    echo json_encode($result, JSON_PRETTY_PRINT);
  }else{
    echo json_encode($err, JSON_PRETTY_PRINT);
  }
}else{
  echo json_encode($err, JSON_PRETTY_PRINT);
}
?>






