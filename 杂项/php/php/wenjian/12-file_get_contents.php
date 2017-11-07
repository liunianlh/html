<?php
header('content-type:text/html;charset=utf-8');
// header('content-type:image/jpeg');
//fopen fread fgetc fgets fgetss fgetcsv
//file_get_contents():
$filename="./2.txt";
$filename="king-1.jpg";
$filename="http://blog.phpfamily.org";
$filename='user3.csv';
$string=file_get_contents($filename);
echo $string;
// echo $string;
// echo strip_tags($string);


