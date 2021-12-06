<?php
    $ch=curl_init('https://niasha.ch/');
    curl_setopt(  $ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $f_json = 'https://niasha.ch/products.json';
    $json = file_get_contents("$f_json");
    //$array = json_decode($f_json);
    //print_r($array);
?>