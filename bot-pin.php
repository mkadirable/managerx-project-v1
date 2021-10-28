<?php
echo "Bearer : ";
$bearer = trim(fgets(STDIN));

echo "IdHakuna Target : ";
$idhk = trim(fgets(STDIN));

//echo "Pesan Fanboard : ";
//$pesan = trim(fgets(STDIN));
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.hakuna.live/fan-board/users/'.$idhk.'/posts',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
            "hostHakunaId": null,
            "contents": "𝗛𝗶 𝗜𝗺 𝗡𝗼𝗶𝘀𝗲",
            "pinned": true

}',
  CURLOPT_HTTPHEADER => array(
    'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
    'authorization: Bearer '.$bearer,
    'Content-Type: application/json',
    'Cookie: __cfruid=1eb97d8b07c4556cf228f8a9355ce9514be37c2c-1624425204'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$aw=json_decode($response);
echo "Pinned : {$aw->pinned}\n";
//echo $response;
