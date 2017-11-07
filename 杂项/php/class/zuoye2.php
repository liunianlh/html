<?php


 
//$a = 3;
//$b = false;
//$c = $a or $b;
//var_dump($c);          // 这里的 $c 为 int 值3，而不是 boolean 值 true
//$d = $a || $b;
//var_dump($d);          //这里的 $d 就是 boolean 值 true 
$num=1;
$num1=2;
$num2=!$num&&$num1; 
var_dump($num2);    //这里的$num2是false，如果先执行&&则结果为false