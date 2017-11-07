<?php
/*
list():将下标连续的从0开始的索引数组赋值给相应的变量
each($array):得到当前指针所在位置的键值对，返回的是数组，包含4个部分；并且将指针向下移动一位
*/
// $arr=['a','b','c'];
// list($var1,$var2,$var3)=$arr;
// echo $var1,$var2,$var3;
// list(,$b,$c)=$arr;
// list(,,$c)=$arr;
// echo $b,$c;
// echo $c;
// echo '<hr/>';
// $arr=['a','b','c'];
// list($arr1[],$arr1[],$arr1[])=$arr;
// print_r($arr1);
// list() = [];
// list(,,) = [];
// list($x, list(), $y) = $a;

// $arr=[
//   [1,'king1',12],
//   [2,'king2',22],
//   [3,'king3',32]
// ];
// foreach($arr as list($id,$username,$age)){
//   echo $id,'-',$username,'-',$age,'<br/>';
// }

$arr=[
  'a'=>'aaaa',
  'b'=>'bbbb',
  'c',
  'username'=>'king',
  33=>'ddd'
];
print_r($arr);
/*
Array
(
    [a] => aaaa
    [b] => bbbb
    [0] => c
    [username] => king
    [33] => ddd
)
*/
// $res=each($arr);
// print_r($res);
/*
Array
(
    [1] => aaaa
    [value] => aaaa
    [0] => a
    [key] => a
)
*/
// echo key($arr),'-',current($arr);

// list($k,$v)=each($arr);
// echo $k,'-',$v,'<br/>';
// list($k,$v)=each($arr);
// echo $k,'-',$v,'<br/>';
// list($k,$v)=each($arr);
// echo $k,'-',$v,'<br/>';
// list($k,$v)=each($arr);
// echo $k,'-',$v,'<br/>';
// list($k,$v)=each($arr);
// echo $k,'-',$v,'<br/>';
// echo '<hr/>';
// var_dump(each($arr));

while(list($k,$v)=each($arr)){
  echo $k,'--',$v,'<br/>';
}
