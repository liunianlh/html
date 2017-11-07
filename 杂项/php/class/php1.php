<?php

//function testa(){
//$a=3;
//$a++;
//echo $a;
//}
//testa();
//testa();
//结果是44



//局部静态变量
function testb(){
static $b=3;
$b++;
echo $b;
}
testb();
testb();
//调用第二次是，内存中已有局部静态变量，所以从原来变量的基础上操作
//结果是45


