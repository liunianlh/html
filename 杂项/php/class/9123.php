<?php
$sum= 0;
function f3() {
    static $a=1; 
    $a++;
    $flag=1;
    
    for ($b = 2; $b < $a; $b++) {
        if ($a % $b == 0) {
            $flag=0;
            break;
        }
    }
    if ($flag) {
        
        $GLOBALS["sum"]+=$a;
      `
        
    }
    if ($a < 100) {
        f3();
    }
}
f3();
echo $sum;

?>
