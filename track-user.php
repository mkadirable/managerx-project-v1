<?php
echo "ID HAKUNA TARGET: ";
$idhk=trim(fgets(STDIN));

//--------------------------------------------------//
//-----------------TOTAL ROOMS LISTENERS------------------//
$curls = curl_init();
curl_setopt_array($curls, array(
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
    'authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Imx1OXY5NjRwbnZubnUyMiIsInN1YiI6IjEwMzQ5MDczODg3NTA3MjMwMDE3MEBHT09HTEUiLCJjb3VudHJ5IjoiWFgiLCJleHBpcmVkIjoxNjI1NTE0NzY0OTg5LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI1NDI4MzY0OTg5LCJpZCI6MTY3NjUwNjAsInJlZ2lvbiI6IlNFQSIsImp0aSI6IjA0ZWU4MDdlLWQ4MzMtNDczMi1hM2JiLWRiNWM4YjA5N2Q2ZCJ9.kFOxKV4i54a4ynkS77JB6ETRS84wlwYc6CuRRmVFfDU',
    'content-type: application/json;charset=UTF-8',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36',
    'Cookie: __cfruid=3104c35ebff5fce5f2c75456b99fc1b1dce97efc-1624583014'
  ),
));

$responses = curl_exec($curls);
curl_close($curls);
$aws=json_decode($responses);

for ($i=0; $i <= 2; $i++) { 
  $idrooom=$aws->rooms[$i]->roomId;
  $idid= array (
    "$idrooom"
  );
foreach ($idid as $diro) {
  //echo "idroom : $diro \n";
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.hakuna.live/v1/live-room/'.$diro.'/participants',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{"maxListLen":100}',
    CURLOPT_HTTPHEADER => array(
      'content-type: application/json;charset=UTF-8',
      'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
      'authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Imx1OXY5NjRwbnZubnUyMiIsInN1YiI6IjEwMzQ5MDczODg3NTA3MjMwMDE3MEBHT09HTEUiLCJjb3VudHJ5IjoiWFgiLCJleHBpcmVkIjoxNjI1NTE0NzY0OTg5LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI1NDI4MzY0OTg5LCJpZCI6MTY3NjUwNjAsInJlZ2lvbiI6IlNFQSIsImp0aSI6IjA0ZWU4MDdlLWQ4MzMtNDczMi1hM2JiLWRiNWM4YjA5N2Q2ZCJ9.kFOxKV4i54a4ynkS77JB6ETRS84wlwYc6CuRRmVFfDU',
      'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36',
      'Cookie: __cfruid=9b368df351839b63235320128f44b4646e78ee43-1625344656'
    ),
  ));
  
  $response = curl_exec($curl);
  $aw=json_decode($response);
  $jumlah=count($aw->participants);
  $rank=($i+1);
 // echo "jumlah : $jumlah \n";
  //echo "listeners: $listeners \n";
  echo "RANK ROOM : $rank \n";
  echo "-----------------------------------";
  echo "\n";
  for ($j=0; $j<=($jumlah-1); $j++){
    $nickname=$aw->participants[$j]->displayName;
    $idacc=$aw->participants[$j]->hakunaId;
    $dataroom= array (
      "ROOMID    : $diro \n",
      "NOMOR     : $j \n",
      "JUMLAH    : $jumlah \n",
      "NICKNAME  : $nickname \n",
      "ID HAKUNA : $idacc \n",
      "-----------------------------------",
      "\n"
    );
    foreach ($dataroom as $datar) {
      echo "$datar";
    }
  }
}
 
}
