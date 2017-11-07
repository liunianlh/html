<?php
$filename='user.csv';
$handle=fopen($filename,'rb+');
// $row=fgetcsv($handle);
// print_r($row);
// $row=fgetcsv($handle);
// print_r($row);
// $row=fgetcsv($handle);
// print_r($row);
// echo '<hr/>';
// $row=fgetcsv($handle);
// var_dump($row);
// $rows=[];
// while($row=fgetcsv($handle)){
//   // print_r($row);
//   $rows[]=$row;
// }
// print_r($rows);
$handle=fopen('user1.csv','rb+');
while($row=fgetcsv($handle,0,'-')){
  print_r($row);
}
