<?php
header('content-type:text/html;charset=utf-8');

$sr=array("my","My","mY");
$str =array("mY name is zhangsan", "this is a title", "Mysql", "myself");
$str1=implode(" ",$str);
$xin= str_replace($sr,"myself", $str1,$i);
//函数顺序性的对数组中每个字符串进行替换，并返回替换后的字符串。
echo $xin;
echo "<br/>替换了"."$i"."个";
