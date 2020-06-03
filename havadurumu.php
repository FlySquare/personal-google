<?php
$query2 = @unserialize (file_get_contents('http://ip-api.com/php/'));
$city = $query2['city'];

$link2 = "https://api.openweathermap.org/data/2.5/weather?q=".$city."&appid=b2ca859e57c7515f887df6c815e1a8f9&units=metric";
function get_content2($URL2){
      $ch2 = curl_init();
      curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch2, CURLOPT_URL, $URL2);
      $data2 = curl_exec($ch2);
      curl_close($ch2);
      return $data2;
}


$json2 = get_content2($link2);
$data2 = json_decode($json2, true);

$temp = $data2["main"]["temp"];

 ?>
