<?php
header('content-type:text/html;charset=utf-8');
    $type = $_GET["type"];
    $host = "http://toutiao-ali.juheapi.com";
    $path = "/toutiao/index";
    $method = "GET";
    $appcode = "c5e54e963eb64ae885d3fd305cf3e2df";
    $headers = array();
    array_push($headers, "Authorization:APPCODE " . $appcode);
    $querys = "type=$type";
    $bodys = "";
    $url = $host . $path . "?" . $querys;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_FAILONERROR, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    if (1 == strpos("$".$host, "https://"))
    {
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    }
//  echo json_encode(curl_exec($curl),JSON_UNESCAPED_UNICODE);
    echo  curl_exec($curl) ;
?>