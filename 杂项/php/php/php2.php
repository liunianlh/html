//字符串说明

<?php
$a=111;
echo 'abcd,ss,$a';
//字符串，单引号不对变量进行解析。


$b=222;
echo "<br>"."abcd,ss,$b";
//字符串，双引号对变量就行解析
//小数点表示连接符
//如果变量复杂可以用{}包起来


$c=<<<STR
hello,word!
STR;
echo '<br>' . $c . $a;
//使用注意
//1.<<是固定的，STR是可以变化的，一般是大写字母，不过小写也可以。
//2.<<标示符 后面不能带任何内容，包括回车，意思就是写完标示符后必须敲回车
//3.结束的标示符 前面不能有任何内容，包括空格。
//4.hredoc 可以解析变量。