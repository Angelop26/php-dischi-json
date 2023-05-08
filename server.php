<?php
// header("Access-Control-Allow-Origin: http://localhost/booleanphp/php-dischi-json");
$string = file_get_contents("dischi.json");
// var_dump($string);
$dischi_array = json_decode($string, true);
// var_dump($dischi_array);

$response = [
    "results" => $dischi_array,
    "success" => true
];
header('Content-Type: application/json');
echo json_encode($response);
?>