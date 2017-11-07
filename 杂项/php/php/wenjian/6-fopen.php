<?php
$filename=__DIR__.'/1.txt';
// echo $filename;
// $handle=fopen($filename,'rb');
// echo fread($handle,filesize($filename));//读取数据 
// fclose($handle);
$handle=fopen($filename,'rb+');
//fwrite()/fputs():写入内容
//注意：fwrite向文件写入内容，如果之前有内容，会产生覆盖
// fwrite($handle,'test');
// fwrite($handle,'123');
fwrite($handle,'abcdef',3);//只写三个
fclose($handle);
