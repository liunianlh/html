<?php
function jisuan($num1,$num2,$oper)
{
$num=0;
if($oper=="+")
{ $num=$num1+$num2;}
else if($oper=="-")
{ $num=$num1-$num2;}
else if($oper=="*")
{ $num=$num1*$num2;}
else if($oper=="/")
{ $num=$num1/$num2;}
return $num;
}