<?php


header('content-type:text/html;charset=utf-8');
//数组
//定义数组的四种方式
///通过arrat()形式
///通过[]动态创建
///通过range()和compact()快速创建
///通过define()定义常量数组



//通过array()
//空数组
$arr=array();
//检测是否为数组
var_dump($arr);
//gettype();得到变量的类型
echo gettype($arr);
//通过is_array();检测变量是否为数组
var_dump(is_array($arr));
echo '<hr/>';
//通过array()下标连续的索引数组
$arr=array(2,3.4,'king',ture);
print_r($arr);
/*
Array ( [0] => 2 [1] => 3.4 [2] => king [3] => ture ) 
*/