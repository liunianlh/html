<?php

header('content-type:image/jpeg');
$wenjian="1.txt";
$wenjian="img.jpg";
$wenjian='user1.csv';
$string1=file_get_contents($wenjian);//读取文件
echo $string1;
//echo strip_tags($string1);//过滤html标签
//echo $string1;


