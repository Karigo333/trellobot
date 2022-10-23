<?php


const TOKEN = '5304815756:AAGNcHP1QmZYL5FMUm5i0RWs_vbP9GQx0AY';

$url = 'https://api.telegram.org/bot' . TOKEN . '/getUpdates';


$response = json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);

var_dump($response);
