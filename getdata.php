<?php 

$headers = array(
    'Accept: application/json',
    'Content-type: application/json',
    "X-App-Token: " . 'O3T1DjmrsbTOMaqBwAFogk37I'
);        

$cliente = curl_init("https://www.datos.gov.co/resource/gt2j-8ykr.json?departamento=C%C3%B3rdoba&\$limit=50000");

curl_setopt($cliente, CURLOPT_HTTPHEADER, $headers);
curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($cliente);

echo "Total de Registros obtenidos: ".count(json_decode($response, true));

?>