<?php

require_once("appid.php");

$lat = 35.68381981;//緯度
$lon = 139.77456498;//経度

$uri = "http://reverse.search.olp.yahooapis.jp/OpenLocalPlatform/V1/reverseGeoCoder"
    . "?lat=" . $lat . "&lon=" . $lon . "&appid=" . appid . "&output=json";

$curl = curl_init($uri);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($curl);
curl_close($curl);

$res = json_decode($response,true);

$locationName = $res[Feature][0][Property][Address];

?>