<?php
header('content-type:text/html;charset=utf-8');
$wenjian='user1.csv';
$wenjian1=fopen($wenjian,'wb+');
$date=[
['id'=>1,'Name1'=>'����','coures'=>'PHP1'],
['id'=>2,'Name1'=>'ȫ��','coures'=>'PHP2'],
['id'=>3,'Name1'=>'����','coures'=>'PHP3']
];
foreach($date as $val)
{
	fputcsv($wenjian1,$val,'-����');
}
	fclose($wenjian1);