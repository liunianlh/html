<?php
//针对于二维数组的操作：增删改查操作
$courses[]=['id'=>1,'courseName'=>'php','courseDesc'=>'PHP是最好的语言'];
$courses[]=['id'=>2,'courseName'=>'javascript','courseDesc'=>'javascript是最好的语言'];
$courses[]=['id'=>3,'courseName'=>'go','courseDesc'=>'go是最好的语言'];
//$courses[]=['键名'=值,'键名'=值];


$a=print_r($courses);//输出$courses[]数组
//////echo $a;   print_r()函数，返回值是1

echo $courses[0]['courseName'],'--',$courses[0]['courseDesc'],'<br/>';//php--PHP是最好的语言

$courses[1]['courseName']='js';//通过下标把下标为1的courseName修改为js
echo $courses[1]['courseName'],'<br/>';


unset($courses[2]['courseName']); //利用courseName键名删除
print_r($courses);
//unset($courses[1]);
//print_r($courses);






echo '<hr/>';

//return返回值
function test(){
  return ['a','b','c'];
}
$res=test();
echo $res[1];//因为函数test()的返回值为return的返回值，所以输出b
echo '<br/>';
echo test()[0];//输出a
