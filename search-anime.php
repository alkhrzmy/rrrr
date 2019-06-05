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
        header('Location: https://apirzmy.herokuapp.com/error.php?e=nonev1.2&h=search-anime');
    }
}else{
 header('Location: https://apirzmy.herokuapp.com/error.php?e=nonev1&h=search-anime');
}
?>
