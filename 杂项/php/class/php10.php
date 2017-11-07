<?php
//针对于二维数组的操作：增删改查操作
header('content-type:text/html;charset=utf-8');
$courses[]=['id'=>1,'courseName'=>'php','courseDesc'=>'PHP是最好的语言'];
$courses[]=['id'=>2,'courseName'=>'javascript','courseDesc'=>'javascript是最好的语言'];
$courses[]=['id'=>3,'courseName'=>'go','courseDesc'=>'go是最好的语言'];
print_r($courses);
echo $courses[0]['courseName'],'--',$courses[0]['courseDesc'],'<br/>';
$courses[1]['courseName']='js';
echo $courses[1]['courseName'],'<br/>';
unset($courses[2]['courseName']);
print_r($courses);
unset($courses[1]);
print_r($courses);
echo '<hr/>';
function test(){
  return ['a','b','c'];
}
$res=test();
echo $res[1];
echo '<br/>';
echo test()[1];
