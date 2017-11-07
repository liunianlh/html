<?php
header('content-type:text/html;charset=utf-8');
/**
 * pathinfo():文件路径相关信息
 */
 $filename="./test1.txt";
 $pathinfo=pathinfo($filename);
 print_r($pathinfo);
 /*
 Array
(
   [dirname] => .
   [basename] => test1.txt
   [extension] => txt
   [filename] => test1
)
  */
  echo '文件扩展名：',pathinfo($filename,PATHINFO_EXTENSION),'<br/>';
  echo '<hr/>';
$filename=__FILE__;
// echo $filename;

echo pathinfo($filename,PATHINFO_DIRNAME),'<br/>';//路径
echo pathinfo($filename,PATHINFO_BASENAME),'<br/>';//主文件名
echo pathinfo($filename,PATHINFO_EXTENSION),'<br/>';//扩展名
echo pathinfo($filename,PATHINFO_FILENAME),'<br/>';//主文件名
//basename():返回路径中的文件名部分
echo basename($filename),'<br/>';

echo basename($filename,'.php'),'<br/>';
//dirname():返回文件名中路径部分
echo dirname($filename),'<br/>';
//file_exists():检测文件或者目录是否存在
$filename='1.txt';
var_dump(file_exists($filename));
touch('aa.txt');
