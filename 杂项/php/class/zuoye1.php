<?php
header('content-type:text/html;charset=utf-8');
$a=10;
$b=2*$a*3.14;
$c=$a*$a*3.14;
echo "<html><br/></html>";
echo '直径为' . $a;
echo "周长为" . $b;
echo "<html><br/></html>";
echo "面积为" . $c;
//测试变量类型，var_dump();  gettype();