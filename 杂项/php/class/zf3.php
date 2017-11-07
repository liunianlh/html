<?php



$arr=array('my name is zhangsan', 'this is a title','mysql', 'myself');
$a=implode(" ",$arr);
  //implode(拆分标志, 数组); 将数组合并为字符串
echo str_replace(' ', '',$a);

