<?php
$header = array(
  "User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0.1; ASUS_A007 Build/MMB29P)",
  "Host: secureapp.simsimi.com",
  "Connection: Keep-Alive",
  "Accept-Encoding: gzip"
);

$url = "https://secureapp.simsimi.com/v1/simsimi/talkset?uid=271898762&av=6.8.7.1&lc=id&cc=ID&tz=Asia%2FJakarta&os=a&ak=alofKTlYS08reLe4gzCD2W7mijs%3D&message_sentence=aku%20suka%20loli&normalProb=2&isFilter=1&talkCnt=1&talkCntTotal=1&reqFilter=0&session=udu6auK1LfyAQwLzupMPbdKVYDX9HkLnkYkU4jPWFmX6MysmRf6uFqg5RhqqVzVjKixAJaoNuxLi1YNFjLrs2Qu3&triggerKeywords=%5B%5D";

$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_POST,           1 );
		curl_setopt($ch, CURLOPT_FAILONERROR, 0);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
curl_close($ch);


echo $result;
?>
