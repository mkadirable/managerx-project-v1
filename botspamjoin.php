<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.hakuna.live/v1/live-room/list/search/region?cursor=&size=100',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
    'authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Im14ZnNnOWcyOHp0aG0yMiIsInN1YiI6IjEwODY0NTYzNzYwMzI1ODYwMTQ4MkBHT09HTEUiLCJjb3VudHJ5IjoiSUQiLCJleHBpcmVkIjoxNjI4NDE5MzQ4NTY3LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI4MzMyOTQ4NTY3LCJpZCI6MzE2NjU2OCwicmVnaW9uIjoiU0VBIiwianRpIjoiZWE0NTYyZTMtY2EzNS00N2QwLWIyYmItNTQ1YjEyYjk2ZTRlIn0.NvNPyCLCRPKu_XBuOx0FtHVOkg-fq9BGiMnqvkMPcvg',
    'content-type: application/json;charset=UTF-8',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36',
    'Cookie: __cfruid=3104c35ebff5fce5f2c75456b99fc1b1dce97efc-1624583014'
  ),
));
$response = curl_exec($curl);
curl_close($curl);

$dump=json_decode($response);
for ($i=0; $i <= 99; $i++) { 
  
  $idrooom=$dump->rooms[$i]->roomId;
  $idid= array (
    "$idrooom"
  );

 
  foreach ($idid as $diro){
  $curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL =>'https://api.hakuna.live/v1/live-room/'.$diro.'/enter',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
    'authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Im14ZnNnOWcyOHp0aG0yMiIsInN1YiI6IjEwODY0NTYzNzYwMzI1ODYwMTQ4MkBHT09HTEUiLCJjb3VudHJ5IjoiSUQiLCJleHBpcmVkIjoxNjI4NDE5MzQ4NTY3LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI4MzMyOTQ4NTY3LCJpZCI6MzE2NjU2OCwicmVnaW9uIjoiU0VBIiwianRpIjoiZWE0NTYyZTMtY2EzNS00N2QwLWIyYmItNTQ1YjEyYjk2ZTRlIn0.NvNPyCLCRPKu_XBuOx0FtHVOkg-fq9BGiMnqvkMPcvg',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36',
    'Cookie: __cfruid=56d61bd324a127e6a9e2c4d5bf46349d0cf6daeb-1624651435'
  ),
));

$response = curl_exec($curl);
curl_close($curl);

//hjkhjkhk
$aw=json_decode($response, true);
$idroom=($aw['liveRoom']['roomId']);
$hostname=($aw['liveRoom']['hostDisplayName']);
$listeners=($aw['liveRoom']['watching']);
$ranking=($aw['liveRoom']['liveRoomRanking']['roomRanking']);
$totalroom=($aw['liveRoom']['liveRoomRanking']['totalRoomCount']);
$createdat=($aw['liveRoom']['liveRoomRanking']['createdAt']);
//$device=$aw->participant->displayName;
//print_r($aw);
//------------------------------------------------------------------//
//------------------VARIABLE SEND MESSAGE FROOM JOIN ROOM-----------//
$messagex = array (
    "Hallo $hostname, your room curently ranked $ranking out of $totalroom, with $listeners listeners.",
    "Cheers for the broadcast, $hostname!"
);
//-----------------------------------------------------------------//
//---------------- SESSION SEND MESSAGE ---------------------------//
foreach($messagex as $messagexx){
$curls = curl_init();
curl_setopt_array($curls, array(
  CURLOPT_URL => 'https://api.hakuna.live/v1/live-room/'.$diro.'/messages',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>
  '{"message":"'.$messagexx.'"}',

  CURLOPT_HTTPHEADER => array(
    'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
    'authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Im14ZnNnOWcyOHp0aG0yMiIsInN1YiI6IjEwODY0NTYzNzYwMzI1ODYwMTQ4MkBHT09HTEUiLCJjb3VudHJ5IjoiSUQiLCJleHBpcmVkIjoxNjI4NDE5MzQ4NTY3LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI4MzMyOTQ4NTY3LCJpZCI6MzE2NjU2OCwicmVnaW9uIjoiU0VBIiwianRpIjoiZWE0NTYyZTMtY2EzNS00N2QwLWIyYmItNTQ1YjEyYjk2ZTRlIn0.NvNPyCLCRPKu_XBuOx0FtHVOkg-fq9BGiMnqvkMPcvg',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36',
    'Content-Type: application/json',
    'Cookie: __cfruid=56d61bd324a127e6a9e2c4d5bf46349d0cf6daeb-1624651435'
  ),
));

$responses = curl_exec($curls);
}
curl_close($curls);
foreach($messagex as $messagexx){
    echo "$messagexx\n";
    echo "--------------------------------------------------------------------";
    echo"\n";
}

$curla = curl_init();
curl_setopt_array($curla, array(
  CURLOPT_URL => 'https://api.hakuna.live/v1/live-room/'.$diro.'/leave',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
    'authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Im14ZnNnOWcyOHp0aG0yMiIsInN1YiI6IjEwODY0NTYzNzYwMzI1ODYwMTQ4MkBHT09HTEUiLCJjb3VudHJ5IjoiSUQiLCJleHBpcmVkIjoxNjI4NDE5MzQ4NTY3LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI4MzMyOTQ4NTY3LCJpZCI6MzE2NjU2OCwicmVnaW9uIjoiU0VBIiwianRpIjoiZWE0NTYyZTMtY2EzNS00N2QwLWIyYmItNTQ1YjEyYjk2ZTRlIn0.NvNPyCLCRPKu_XBuOx0FtHVOkg-fq9BGiMnqvkMPcvg',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36',
    'Cookie: __cfruid=fa191e272ff20628fa5d88a1e03e011599785b7c-1624692834'
  ),
));

$responsea = curl_exec($curla);

curl_close($curla);

  }
}
//print_r($dump);
//echo $response;
