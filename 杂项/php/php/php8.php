<?php
// array、对象、callable
//function test(array $a){
//print_r($a);
//}
//test([1,2]);
//传递参数必须传递相同类型的参数。


//
//function test(stdClass $a){
//print_r($a);
//}
//$obj=new stdClass();
//test($obj);


//function test(callable $a){
//$a();
//}


//function callBack(){
//echo 'hello world';
//}
//test('callBack');

//函数嵌套
//function foo(){
//function bar(){
//echo 'hello world';
//	}
//}
//foo();
//bar();

//嵌套定义
//function bar(){
//echo 'hello world';
//}
//function foo(){
//bar();
//}
//foo();



//递归调用
//n+(n+1)+...+m(n>0,m>n)

 
 //function sum($n,$m){
//if($m<=$n){
//return $n;
//	}
//	//$n+($n+1)+...+($m-1)+$m;
//	return sum($n,$m-1)+$m;
//}
//echo sum(1,100);
//
////调用过程sum(1,100)=>sum(1,99)=>sum(1,98)=>sum(1,1)


//1,1,2,3,5,8,13....
//function fbnq($n){
//if($n<=2){
//return 1;
//}
//return fbnq($n-1)+fbnq($n-2);
//}
//echo fbnq(6);
////调用过程fbnq(6)=>fbnq(5)=>fbnq(4)...=>fbnq(2)




//匿名函数
//function test(){
//$message='hello world';
//$say=function($str)use($message){
//	//use是为了把外层变量传进去
//echo $message;
//echo $str;
//	};
//	return $say;
//}
//$func=test();
//$func('nihao');


//汉罗塔算法
 



