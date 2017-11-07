<?php
$arr=[0,1,2];
foreach($arr as $val){
  echo $val,'<br/>';
}
echo '<hr/>';
//可以通过:和endforeach代替{}
foreach($arr as $val):
  echo $val,'<br/>';
endforeach;
echo '<hr/>';
//foreach不再改变内部数组指针
$arr=[0,1,2];
foreach($arr as &$val){
  var_dump(current($arr));
}
echo '<hr/>';
// foreach 通过值遍历时，操作的值为数组的副本
$arr=[0,1,2];
$ref=&$arr;
//老版本会跳过1
foreach($arr as $val){
  echo $val,'<br/>';
  unset($arr[1]);
}
var_dump($arr,$ref);
echo '<hr/>';
// foreach通过引用遍历时，有更好的迭代特性
//按照引用进行循环的时候，对数组的修改会影响循环

$arr=['a'];
foreach($arr as &$val){
  echo $val,'<br/>';
  $arr[1]='b';
}
