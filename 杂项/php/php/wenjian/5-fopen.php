<?php

header('content-type:image/jpeg');
$filename='1.txt';
$filename='king-1.jpg';
$handle=fopen($filename,'rb+');
// var_dump($handle);
$res=fread($handle,filesize($filename));
fclose($handle);
echo $res;
