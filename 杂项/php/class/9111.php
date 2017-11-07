<?php
header('content-type:text/html;charset=utf-8');
for($a=0;$a<=100;$a++) {
  for($b=0;$b<=100-$a;$b++) {
 
     for($c=0;$c<=100-$a-$b;$c++) {
 
      if(3*$a+5*$b+$c/3 == 100 && $a+$b+$c == 100) {
  
      echo "公鸡:".$a."母鸡:".$b."小鸡:".$c."<br/>";
   }
 
 
  }
 
 
  }

}