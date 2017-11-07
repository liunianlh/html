<?php
header('content-type:text/html;charset=utf-8');
/*
给你这样的字符串2,3,5,19,39
*/
$string='2,3,5,19,39';
$arr=explode(',',$string);
echo array_sum($arr);
echo '<br/>';
echo array_product($arr);
echo '<hr/>';
/*
1.txt.php.jpg
截取文件扩展名，并且检测扩展名是否在['jpg','jpeg','gif','png']
*/
$allowExts=['jpg','jpeg','gif','png'];
$filename='1.txt.php.jpg';
$arr=explode('.',$filename);
$ext=end($arr);
var_dump(in_array($ext,$allowExts));
echo '<hr/>';
/*
array_push():
array_pop():
array_unshift():
array_shift():
*/
$arr=['a','b','c'];
$res=array_pop($arr);
echo $res;
print_r($arr);
echo '<hr/>';
array_push($arr,'hello world',123,324,23,345,'sdfs');
print_r($arr);
echo '<hr/>';
$arr=['a','b','c'];
echo array_shift($arr);
print_r($arr);
array_unshift($arr,'d','ef');
print_r($arr);
echo '<hr/>';
$filename='1.txt.jpg';
$allowExts=['jpg','jpeg','gif','png'];
$arr=explode('.',$filename);
$ext=array_pop($arr);
if(in_array($ext,$allowExts)){
  echo '文件类型合法';
}else{
  echo '非法文件类型';
}
/*
快速生成字符串

*/
$str1=join('',range(0,9));
$str2=join('',range('a','z'));
$str3=join('',range('A','Z'));
echo '<hr/>';
$arr1=range(0,9);
$arr2=range('a','z');
$arr3=range('A','Z');
$newArr=array_merge($arr1,$arr2,$arr3);
// print_r($newArr);
// $str='';
// for($i=1;$i<=4;$i++){
//   $str.=$newArr[mt_rand(0,count($newArr)-1)];
// }
// echo $str;
$res=array_rand(array_flip($newArr),4);
// print_r($res);
echo join('',$res);

$newArr=array_merge($arr1,$arr2,$arr3);
print_r($newArr);
shuffle($newArr);
print_r($newArr);
