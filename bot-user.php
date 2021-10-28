<?php

echo "Bearer : ";
$bearer = trim(fgets(STDIN));

echo "JENIS KELAMIN : ";
$kel = trim(fgets(STDIN));

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.hakuna.live/user',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "displayName": null,
    "join": null,
    "birthYear": null,
    "gender": "'.$kel.'"
}',

  CURLOPT_HTTPHEADER => array(
    'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
    'authorization: Bearer '.$bearer,
    'user-agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Mobile Safari/537.36',
    'Content-Type: application/json',
    'Cookie: __cfruid=776eba89e2c170c8d71822ffa61a9af49c6c6679-1624419432'
  ),
));
$response = curl_exec($curl);
curl_close($curl);
$aw=json_decode($response);
//print_r ($aw);
echo "Nickname : {$aw->displayName}\n";
echo "IDHakuna : {$aw->hakunaId}\n";
echo "Gender : {$aw->gender}\n";
echo "Tahun Lahir : {$aw->birthYear}\n";
echo "Jumlah Stars : {$aw->receivedStars}\n";
echo "Jumlah Diamonds : {$aw->consumedDiamonds}\n";
//echo $response;
