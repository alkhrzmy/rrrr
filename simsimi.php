<?php
require('listapikey.php');
$apikey=rawurlencode($_GET['apikey']);
$keyword = rawurlencode($_GET['key']);
require_once('./unirest-php-master/src/Unirest.php');

$uri = "https://secureapp.simsimi.com/v1/simsimi/talkset?uid=271898762&av=6.8.7.1&lc=id&cc=ID&tz=Asia%2FJakarta&os=a&ak=alofKTlYS08reLe4gzCD2W7mijs%3D&message_sentence=".$keyword."&normalProb=2&isFilter=1&talkCnt=1&talkCntTotal=1&reqFilter=0&session=udu6auK1LfyAQwLzupMPbdKVYDX9HkLnkYkU4jPWFmX6MysmRf6uFqg5RhqqVzVjKixAJaoNuxLi1YNFjLrs2Qu3&triggerKeywords=%5B%5D";

$respon = Unirest\Request::get("$uri");
$res = json_decode($respon->raw_body, true);
$result = array(
    'created by'=>'rzmy',
    'origin' => 'secureapp.simsimi.com',
    'result'=> array(
      'text'=>$res['simsimi_talk_set']['answers'][0]['origin_answerSentence'],
      'timestamp'=>$res['simsimi_talk_set']['answers'][0]['timestamp']
    ),
);
$err = array(
    'error'=>true,
    'msg'=>'Maaf, parameter input yang anda masukan salah. Ex: ./simsimi.php?apikey=sbeve&key=aku%20hamil'
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
