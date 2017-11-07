<?php
header('content-type:text/html;charset=utf-8');
$filename='2.txt';
$handle=fopen($filename,'rb+');//进行读取，固定格式
// echo fgetc($handle),'<br/>';
// echo fgetc($handle),'<br/>';
// echo fgetc($handle),'<br/>';
// echo fgetc($handle),'<br/>';
// var_dump(fgetc($handle));
//feof():检测文件指针是否到了文件末尾
while(!feof($handle)){
  //一个字符一个字符读取
  // echo fgetc($handle);
  //一行一行读取
  // echo fgets($handle).'<br/>';
  //一行一行读取，并且过滤HTML标记
  // echo strip_tags(fgets($handle)).'<br/>';
  echo fgetss($handle);
}
