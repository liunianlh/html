<?php

 header('content-type:text/html;charset=utf-8');
$str="这是一个世界，但是我喜欢中国";
$count1=strlen($str);
$xin1=substr($str, 0,30);
$xin=str_pad($xin1,$count1,"……",STR_PAD_RIGHT);
// str_pad：字符串填充内容；
//STR_PAD_RIGHT：右侧填充;默认为两侧都填充
echo $xin;

