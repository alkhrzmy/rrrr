<?php
require('listapikey.php');
$apikey=rawurlencode($_GET['apikey']);
$keyword = rawurlencode($_GET['key']);

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'https://www.samehadaku.tv/?s='.$keyword);
curl_setopt($ch, CURLOPT_URL, 'https://www.samehadaku.tv/?s='.$keyword);
$data = curl_exec($ch);
curl_close($ch);
$output = array();
require('simple_html_dom.php');   // UBAH JADI DIREKTORI SIMPLE_HTML_DOM KAMU
$html = str_get_html($data);
$bahan = $html->find('ul[id=posts-container]', 0);
$kotak = $bahan->find('li[class=post-item]');
foreach($kotak as $key => $val) {
 $title = $val->find('div[class=post-details]', 0)->find('a', 0)->title;
 $url = $val->find('a[class=post-thumb]', 0)->href; 
 $date = $val->find('span[class=date meta-item]', 0)->find('span', 1)->innertext;
 $img = $val->find('img[class=attachment-jannah-image-large]', 0)->src;

  $output[] = array(
  'title' => str_replace(' ','',$title),
  'url' => $url,
  'date' => $date,
  'img' => $img
  );
}
$result=array('created by'=>'rzmy','result'=>$output);
if(in_array($apikey, $list) && $keyword){
    echo json_encode($result, JSON_PRETTY_PRINT);
}else{echo 'maaf, input salah. Ex: api.alkhrzmy.online/samehadaku.php?key=one+punch&apikey=contoh<br/>untuk mendapatkan apikey silahkan kontak creator atau langsung <a href="http://line.me/ti/p/~alkhoarizmy">Klik disini</a>';}

/*
if ($keyword) {
    // RESPON BERHASIL
 echo json_encode($result, JSON_PRETTY_PRINT);
} else {
    echo('maaf, input salah. Ex: api.alkhrzmy.online/samehadaku.php?key=one+punch&apikey=contoh');
 // RESPON ERROR
}*/
?>