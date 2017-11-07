<?php
header('content-type:text/html;charset=utf-8');
echo '<pre>';
$arr=[];
$arr='king';
//foreach遍历数组和对象，如果不是数组或者对象会报警告，通过@符号无法抑制错误
if(is_array($arr)){
  foreach($arr as $v){
    echo 'this is a test';
  }
}
$arr=[
  ['a','b','c'],
  ['d','e','f']
];
// print_r($arr);
/*
Array
(
    [0] => Array
        (
            [0] => a
            [1] => b
            [2] => c
        )

    [1] => Array
        (
            [0] => d
            [1] => e
            [2] => f
        )

)
*/
/*foreach($arr as $val){
  // print_r($val);
  foreach($val as $v){
    echo $v,'<br/>';
  }
  echo '<hr/>';
}
echo '<hr color="red"/>';
*/
//二维的索引+关联的数组(模拟数据)
$users=[
  ['id'=>1,'username'=>'king1','age'=>42],
  ['id'=>2,'username'=>'king2','age'=>32],
  ['id'=>3,'username'=>'king3','age'=>52],
  ['id'=>4,'username'=>'king4','age'=>12],
  ['id'=>5,'username'=>'king5','age'=>72]
];
// print_r($users);
foreach($users as $user){
  echo '编号：',$user['id'],'<br/>';
  echo '用户名：',$user['username'],'<br/>';
  echo '年龄：',$user['age'],'<br/>';
  echo '<hr/>';
}
/*
Array
(
    [0] => Array
        (
            [id] => 1
            [username] => king1
            [age] => 42
        )

    [1] => Array
        (
            [id] => 2
            [username] => king2
            [age] => 32
        )

    [2] => Array
        (
            [id] => 3
            [username] => king3
            [age] => 52
        )

    [3] => Array
        (
            [id] => 4
            [username] => king4
            [age] => 12
        )

    [4] => Array
        (
            [id] => 5
            [username] => king5
            [age] => 72
        )

)
*/














echo '</pre>';
