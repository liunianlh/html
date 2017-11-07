<?php
/*
文件内容相关操作
*/
$filename='111.txt';
//fopen():打开指定文件，以指定的方式来打开
$handle=fopen($filename,'r');//还有r+的方式
// var_dump($handle);
//fread():读取文件内容 
// $res=fread($handle,3);
// echo $res,'<br/>';
// $res=fread($handle,3);
// echo $res;
 $res=fread($handle,filesize($filename));
echo $res;
//全部读取
/*
 

// echo ftell($handle),'<br/>';
// fread($handle,3);
// echo ftell($handle),'<br/>';
fread($handle,filesize($filename));
echo ftell($handle);//当前指针位置
echo '<hr/>';
var_dump(fread($handle,21));
//fseek($handle,$num):重置指针
echo '<hr/>';
fseek($handle,0);
var_dump(fread($handle,21));
//fclose($handle):关闭文件句柄
fclose($handle);
var_dump(fread($handle,21));
*/