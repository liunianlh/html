<?php
header('content-type:text/html;charset=utf-8');
echo '<pre>';
$userInfo=[
  'username'=>'king',
  'password'=>'123456',
  'email'=>'382771946@qq.com'
];
$keys=join(',',array_keys($userInfo));
// print_r($keys);
$vals="'".join("','",array_values($userInfo))."'";
// print_r($vals);
//INSERT user(username,password,email) VALUES('king','123456','382771946@qq.com')
$sql="INSERT user({$keys}) VALUES({$vals})";
echo $sql;
echo '<hr/>';
//in_array()
$allowExts=['jpg','jpeg','png','gif'];
$ext='jpg';
var_dump(in_array($ext,$allowExts));
echo '<hr/>';
//shuffle($array):打乱数组
$string='速,度,快,放,假,了,开,始,对,房,价,来,看,是,地,方,记,录,卡,维,尔';

$arr=explode(',',$string);
shuffle($arr);
// print_r($arr);
$arr=array_flip($arr);
$res=array_rand($arr,4);
echo join('',array_values($res));
print_r($res);
echo '<hr/>';
$sum='102,123,456,789,2345,535';
echo array_sum(explode(',',$sum));
echo '<br/>';
echo array_product(explode(',',$sum));






echo '</pre>';
