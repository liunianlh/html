<?php

header('content-type:image/jpeg');
$wenjian="1.txt";
$wenjian="img.jpg";
$wenjian='user1.csv';
$string1=file_get_contents($wenjian);//��ȡ�ļ�
echo $string1;
//echo strip_tags($string1);//����html��ǩ
//echo $string1;


