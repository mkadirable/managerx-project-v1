<?php
$bearers= [
'eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Im1keGFzcm9idmg0cW0yMiIsInN1YiI6IjEwNjA3NzIyMTU4MDk4NDQxNzU5OEBHT09HTEUiLCJjb3VudHJ5IjoiWFgiLCJleHBpcmVkIjoxNjI0ODIwMDgyMjc2LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI0NzMzNjgyMjc2LCJpZCI6MTY1NTE4MDgsInJlZ2lvbiI6IlNFQSIsImp0aSI6ImM5MGYwZDNjLTBmODMtNDlhNC1hMzgzLWFjNDNlMmMwODQ4MCJ9.dojvOPQht0XOjpSemFNWIrXEPIRr1ArxUrxp8qRXJ8o'
//'eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Im1pMmp3MGI0N3U1eG0yMiIsInN1YiI6IjEwNjYyMjkxMjM2ODAwOTg3OTY5MEBHT09HTEUiLCJjb3VudHJ5IjoiSUQiLCJleHBpcmVkIjoxNjI0NjAzNzA5MTQ3LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI0NTE3MzA5MTQ3LCJpZCI6MTUxNzYxNzMsInJlZ2lvbiI6IlNFQSIsImp0aSI6ImQzNTY0M2UyLWY2ZDgtNDI4NS05MzZkLTJiZjYyNzMxZTgzNiJ9.2hkbHv9XzjUCH6zBwyAVl7M__orcBsX1gGzSVeYZ2FY',
//'eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Im9zdWtvMmdxNGN5MzgyMiIsInN1YiI6IjExNzUxODM0MzY3OTQxMTYxMDUxNkBHT09HTEUiLCJjb3VudHJ5IjoiSUQiLCJleHBpcmVkIjoxNjI0NjAzODkyOTExLCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI0NTE3NDkyOTExLCJpZCI6MTUxNzYzMjQsInJlZ2lvbiI6IlNFQSIsImp0aSI6IjJmN2QzMGZhLTRmYjQtNDhjYS1hOTI4LWNkZDdlMzI0Nzc4NiJ9.fhbO1m-PjP97r695YYDlEaY6SlB5q7QX6JydAiOeNpg',
//'eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Im9tZmQ3dnRqMTluNXYyMiIsInN1YiI6IjExNjY3MzAxNDUwMTYyMjQzMDMzOUBHT09HTEUiLCJjb3VudHJ5IjoiSUQiLCJleHBpcmVkIjoxNjI0NjAzOTk1NTg5LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI0NTE3NTk1NTg5LCJpZCI6MTUxNzY0NDksInJlZ2lvbiI6IlNFQSIsImp0aSI6IjVhZDk5YWQxLTNkOTgtNDlmZC04ZGNmLTRkZjYzOWJmZDMxOCJ9.Gjrs-wb5227DcchtiEhyg-uCakFQDj2FysM62vEz9HA',
//'eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Im1keGFzcm9idmg0cW0yMiIsInN1YiI6IjEwNjA3NzIyMTU4MDk4NDQxNzU5OEBHT09HTEUiLCJjb3VudHJ5IjoiSUQiLCJleHBpcmVkIjoxNjI0NjA0MDkzNTM3LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI0NTE3NjkzNTM3LCJpZCI6MTY1NTE4MDgsInJlZ2lvbiI6IlNFQSIsImp0aSI6IjY4MTczZjVlLTg4YjMtNDZkYy04MzJjLTQ2MmUxOWJjMzI2OCJ9.kGt7tcbB_cXjstOsTzLR2aLmDg_qRELkwvWbyOHMFXw'
];
foreach ($bearers as $bearer){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.hakuna.live/v1/live-room/make',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',

  CURLOPT_POSTFIELDS =>'{
        "cameraOn":false,
        "name":"test",
        "keywordId":"live_room.keyword.challenge",
        "notice":"",
        "invitedUserHakunaIds":[],
        "guestSlotOpen":false,
        "slotLayout":"SLOT_LAYOUT_ONE_GUEST"
    }',
  CURLOPT_HTTPHEADER => array(
    'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
    'content-type: application/json',
    'authorization: Bearer '.$bearer,
    'Cookie: __cfruid=7397c9320a446e503649da583ab2ab65f7294e74-1624510273'
  ),
));
$response = curl_exec($curl);
$aw=json_decode($response,true);
//print_r ($aw);
//echo "Nickname : {$aw->roomId}\n";
echo "hostname : sukses \n";
//$nickname = $aw['liveRoom']['hostDisplayName'];
//print_r ($hostDisplayName);



}