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
$err = array(
    'error'=>true,
    'msg'=>'Maaf, parameter input yang anda masukan salah. Ex: ./search-anime.php?apikey=sbeve&key=one+punch'
);

if($keyword){
    if(in_array($apikey, $list)){
        echo json_encode($result, JSON_PRETTY_PRINT);
    }else{
        echo json_encode($err, JSON_PRETTY_PRINT);
    }
}else{
 echo json_encode($err, JSON_PRETTY_PRINT);
}
?>
