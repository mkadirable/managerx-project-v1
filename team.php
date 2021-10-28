<?php
$file_handle =fopen("bearer.txt","rb");
$line_of_text=fgets($file_handle);
$part=explode($line_of_text);
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.hakuna.live/v2/teams',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "applyOn": true,
    "introduction": "",
    "name": "dsadsa",
    "symbolId":49
}',
  CURLOPT_HTTPHEADER => array(
    'content-type: application/json',
    'authorization: Bearer '.$part,
    'user-agent: Hakuna/110 iOS/14.5/603 Alamofire/4.9.1',
    'Cookie: __cfruid=09ed781723e7dacabbb3efe81a1a6cb9f6c59f0a-1625297014'
  ),
));

$response = curl_exec($curl);
curl_close($curl);
//echo $response;
$aw=json_decode($response);
echo "TEAMID    : {$aw->teamId}\n";
echo "TEAM NAME : {$aw->teamName}\n";
echo "-----------------------------------------";
echo "\n";