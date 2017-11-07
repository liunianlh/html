<?php
header('content-type:text/html;charset=utf-8');
function foo()
{
    $num = func_num_args(); //参数数量
    $arr=func_get_args();//返回一个数组给$arr
    echo "参数个数是: $num<br />\n";
    for ($i = 0; $i < $num; $i++) {
        echo "第{$i}个参数值:{$arr[$i]}<br />\n";
        
    }
}

  

foo(1,2,3,4,5,6);

//
//header("content-type:textml;charset=utf-8");
//function f1(){
//    $arr = func_get_args();
//    for($i=0;$i<count($arr);$i++){
//        $s = count($arr); 
//        echo "传参值一共有:{$s}个<br>";
//        echo "传参值为：$arr[$i]<br>";
//    }
//   
//}
//f1(1,2,3,4,5,6);

