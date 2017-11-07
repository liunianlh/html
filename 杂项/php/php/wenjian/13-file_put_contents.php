<?php
$filename='./2.txt';
//file_put_contents($filename,$data):向文件中写入内容
//$data是字符串格式
//
// file_put_contents($filename,'this is a test');
// file_put_contents($filename,'aaaa');
//如果不想覆盖之前的内容，可以先把文件中读取出来，接着再来写入
// $string=file_get_contents($filename);
// $data=$string.'this is a test';
// file_put_contents($filename,$data);

//如果文件不存在，file_put_contents()会创建这个文件
$filename='3.txt';
// file_put_contents($filename,'this is a test');
// $data=['a','b','c'];
// $data=[
//   ['a','b','c'],
//   ['d','e','f']
// ];
// file_put_contents($filename,$data);
//数组或者对象序列化之后写入文件
// $data=['a','b','c'];
// $data=serialize($data);
// file_put_contents($filename,$data);
// $res=file_get_contents($filename);
// print_r(unserialize($res));
// 将数组或者对象转换成json之后写入文件
// $data=[
//   ['a','b','c'],
//   ['d','e','f']
// ];
// $data=json_encode($data);
// file_put_contents($filename,$data);
// $res=json_decode(file_get_contents($filename));
// print_r($res);
