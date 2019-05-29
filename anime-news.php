<?php
require('listapikey.php');
require('simple_html_dom.php');
$apikey=rawurlencode($_GET['apikey']);

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'https://www.animenewsnetwork.com/');
curl_setopt($ch, CURLOPT_URL, 'https://www.animenewsnetwork.com/');
$data = curl_exec($ch);
curl_close($ch);
$output = array();
$html = str_get_html($data);

$bahan=$html->find('div[class=mainfeed-section]',0);
$kotak=$bahan->find('div[class=herald box news preview-only]',0);
foreach($kotak as $key => $val) {
  $title = $val->find('div[class=warp]',0)->find('a',0)->innertext;
  $date = $val->find('div[class=byline]',0)->find('time',0)->title;
  $image = $val->find('div[class=thumbnail]',0)->data-src;
  
  $output[]=array(
    'title'=>$title,
    'date'=>$date,
    'image'=>'https://cdn.animenewsnetwork.com'.$image
  );
}
$result = array(
  'created by'=>'rzmy',
  'result'=>$output
);
if(in_array($apikey, $list)){
  echo json_encode($result, JSON_PRETTY_PRINT);
}else{
  echo 'maaf, input salah. Ex: <a href="https://apirzmy.herokuapp.com/anime-news.php?apikey=contoh">https://apirzmy.herokuapp.com/anime-news.php?apikey=contoh</a>';
}
?>
