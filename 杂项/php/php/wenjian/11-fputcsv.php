<?php
$filename='user3.csv';
$handle=fopen($filename,'wb+');
// $data=[
//   [1,'php','php是最好的语言'],
//   [2,'javascript','javascript很火啊'],
//   [3,'meteor','meteor anywhere']
// ];
// foreach($data as $val){
//   fputcsv($handle,$val);
// }
$data=[
  ['id'=>1,'courseName'=>'ios','courseDesc'=>'this is ios'],
  ['id'=>2,'courseName'=>'android','courseDesc'=>'this is android'],
  ['id'=>3,'courseName'=>'swift','courseDesc'=>'this is swift']
];
foreach($data as $val){
  fputcsv($handle,$val,'-');
}
fclose($handle);
