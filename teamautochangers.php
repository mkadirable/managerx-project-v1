<?php
for ($i=1; $i<=61; $i++) {

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
    "name": "nоne",
    "symbolId":"'.$i.'"
}',
  CURLOPT_HTTPHEADER => array(
    'content-type: application/json',
    'authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Imx1OXY5NjRwbnZubnUyMiIsInN1YiI6IjEwMzQ5MDczODg3NTA3MjMwMDE3MEBHT09HTEUiLCJjb3VudHJ5IjoiSUQiLCJleHBpcmVkIjoxNjI3MTUwMzMxNDA5LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI3MDYzOTMxNDA5LCJpZCI6MTY3NjUwNjAsInJlZ2lvbiI6IlNFQSIsImp0aSI6IjAzN2M3OWFhLWFmYTItNGMzOC1iNGM1LTQzNjdmYTA3ZGNhZCJ9.-aBg1TKCNHCpFXS56Z8lkbXyZY8Mim10M1SsCv06uB4',
    'user-agent: Hakuna/110 iOS/14.5/603 Alamofire/4.9.1',
    'Cookie: __cfruid=c5318bf6aa6126fbfbf3e6dc0d808b2f469fcef8-1625084477'
  ),
));

$response = curl_exec($curl);
curl_close($curl);
$aw=json_decode($response);
echo "CREATED   : TEAM $i \n";
echo "TEAMID    : {$aw->teamId}\n";
echo "TEAM NAME : {$aw->teamName}\n";
echo "-----------------------------------------";
echo "\n";
sleep(2);

$curls = curl_init();

curl_setopt_array($curls, array(
  CURLOPT_URL => 'https://api.hakuna.live/v2/teams',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'DELETE',
  CURLOPT_HTTPHEADER => array(
    'content-type: application/json',
    'authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Imx1OXY5NjRwbnZubnUyMiIsInN1YiI6IjEwMzQ5MDczODg3NTA3MjMwMDE3MEBHT09HTEUiLCJjb3VudHJ5IjoiSUQiLCJleHBpcmVkIjoxNjI3MTUwMzMxNDA5LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI3MDYzOTMxNDA5LCJpZCI6MTY3NjUwNjAsInJlZ2lvbiI6IlNFQSIsImp0aSI6IjAzN2M3OWFhLWFmYTItNGMzOC1iNGM1LTQzNjdmYTA3ZGNhZCJ9.-aBg1TKCNHCpFXS56Z8lkbXyZY8Mim10M1SsCv06uB4',
    'user-agent: Hakuna/110 iOS/14.5/603 Alamofire/4.9.1',
    'Cookie: __cfruid=c5318bf6aa6126fbfbf3e6dc0d808b2f469fcef8-1625084477'
  ),
));

$responses = curl_exec($curls);

curl_close($curls);
echo "DELETED TEAM $i \n";
echo "-----------------------------------------";
echo "\n";
//echo $responses;
if ($i==61){
    $i=0;
}
}
//echo $response;
