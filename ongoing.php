<?php
ini_set('display_errors',1); 
error_reporting(E_ALL);
require('listapikey.php');
require('simple_html_dom.php');
$apikey=rawurlencode($_GET['apikey']);

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'https://www.samehadaku.tv/');
curl_setopt($ch, CURLOPT_URL, 'https://www.samehadaku.tv');
$data = curl_exec($ch);
curl_close($ch);
$output = array();
$html = str_get_html($data);

$bahan = $html->find('ul[class=posts-items]',0)
$kotak = $bahan->find('li[class=post-item');

echo $kotak;

foreach($kotak as $key => $val) {
  $title = $val->find('h3[class=post-title]',0)->find('a',0)->innertext;
  $image = $val->find('img[class=attachment-jannah-image-small]',0)->src;
  $date = $val->find('span[class=date meta-item]',0)->find('span', 1)->innertext;
  $url = $val->find('a[class=post-thumb]',0)->href;
  
  $output[] = array(
    'title'=>$title,
    'image'=>$image,
    'date'=>$date,
    'url'=>$url
  );
}
$result = array(
  'created by'=>'rzmy',
  'result'=>$output
);

if(in_array($apikey, $list){
  echo json_encode($result, JSON_PRETTY_PRINT);
}else{
  echo 'maaf, input salah. Ex: https://apirzmy.herokuapp.com/ongoing.php?apikey=contoh';
}

?>
