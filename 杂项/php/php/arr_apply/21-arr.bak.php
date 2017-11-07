<?php
$arr=['a','b','c'];
array_push($arr,'d','e','f');
print_r($arr);
$res=array_pop($arr);
echo $res;
print_r($arr);
$arr=['a','b','c'];
array_unshift($arr,'hello world');
print_r($arr);
echo array_shift($arr);
print_r($arr);
