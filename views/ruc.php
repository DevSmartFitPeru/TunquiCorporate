<?php
/*

$dni_colaborador = $_GET["DNI"];
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://apiperu.dev/api/dni/".$dni_colaborador."?api_token=9031634e2e95c585c2ef29fbd786bc0eedf3542a40c98c40b1adb3e15d125251",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_SSL_VERIFYPEER => false
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
   // echo $response;
} */

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://apiperu.dev/api/ruc/20331066703?api_token=9031634e2e95c585c2ef29fbd786bc0eedf3542a40c98c40b1adb3e15d125251",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_SSL_VERIFYPEER => false
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
?>