<?php


/*
数组指针相关函数
key($array):得到当前指针所在位置的键名,如果不存在返回null
current($array):得到当前指针所在位置的键值，如果不存在返回false
next($array):将数组指针向下移动一位，并且返回当前指针所在位置的键值；如果没有，返回false
prev($array):将数组指针向上移动一位，并且返回当前指针所在位置的键值；如果没有，返回false
reset($array):将数组指针移动到数组开始，并且返回当前指针所在位置的键值；如果没有，返回false
end($array):将数组指针移动到数组的末尾，并且返回当前指针所在位置的键值；如果没有，返回false
*/
echo '<pre>';
$arr=[
  'a','b','c',
  35=>'test',
  'username'=>'king',
  'age'=>12
];

echo '当前指针所在位置元素的键名为：',key($arr),'<br/>';
echo '当前指针所在位置元素的键值为：',current($arr),'<br/>';
echo next($arr),'<br/>';
echo '当前指针所在位置元素的键名为：',key($arr),'<br/>';
echo '当前指针所在位置元素的键值为：',current($arr),'<br/>';
echo next($arr),'<br/>';
echo '当前指针所在位置元素的键名为：',key($arr),'<br/>';
echo '当前指针所在位置元素的键值为：',current($arr),'<br/>';
echo next($arr),'<br/>';
echo '当前指针所在位置元素的键名为：',key($arr),'<br/>';
echo '当前指针所在位置元素的键值为：',current($arr),'<br/>';
echo next($arr),'<br/>';
echo '当前指针所在位置元素的键名为：',key($arr),'<br/>';
echo '当前指针所在位置元素的键值为：',current($arr),'<br/>';
echo prev($arr),'<br/>';
echo '当前指针所在位置元素的键名为：',key($arr),'<br/>';
echo '当前指针所在位置元素的键值为：',current($arr),'<br/>';
echo '<hr/>';
echo end($arr),'<br/>';
echo '当前指针所在位置元素的键名为：',key($arr),'<br/>';
echo '当前指针所在位置元素的键值为：',current($arr),'<br/>';
var_dump(next($arr),key($arr),current($arr));
echo '<hr/>';
echo reset($arr),'<br/>';
echo '当前指针所在位置元素的键名为：',key($arr),'<br/>';
echo '当前指针所在位置元素的键值为：',current($arr),'<br/>';






echo '</pre>';
