<?php
require('listapikey.php');
require('simple_html_dom.php');

$apikey=rawurlencode($_GET['apikey']);


$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'https://meownime.com/tag/ongoing/');
curl_setopt($ch, CURLOPT_URL, 'https://meownime.com/tag/ongoing/');
$data = curl_exec($ch);
curl_close($ch);

$output = array();

$html = str_get_html($data);
$bahan = $html->find('div[class=content-area]',0);
$kotak = $bahan->find('div[class=featured-thumb]');
foreach($kotak as $key => $val) {
  $title=$val->find('img[class=placeholder]',0)->alt;
  $url_img=$val->find('img[class=placeholder]',0)->src;
  $url=$val->find('a',0)->href;
  $output[]=array(
    'title'=>$title,
    'image'=>$url_img,
    'url'=>$url
  );
}
$result=array('created by'=>'rzmy','result'=>$output);
if(in_array($apikey, $list)){
  echo json_encode($result, JSON_PRETTY_PRINT);
}else{
  echo 'maaf, input salah. Ex: <a href="https://apirzmy.herokuapp.com/meownime-ongoing.php?apikey=contoh">https://apirzmy.herokuapp.com/meownime-ongoing.php?apikey=contoh</a><br/>untuk mendapatkan apikey silahkan kontak creator atau langsung <a href="http://line.me/ti/p/~alkhoarizmy">klik disini</a>';
}

?>
