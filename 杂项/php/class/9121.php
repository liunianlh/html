<?php
$a=0;
function dy(){
    global $a;
    $a++;
}
for($i=1;$i<=100;$i++)
{
    dy();
}
echo $a;