<?php
//如果文件不存在会创建，
//如果文件存在，会先将文件内容截断为0，接着在开始写入
$filename="./1.txt";
$filename="2.txt";
$handle=fopen($filename,'ab+');
// fputs($handle,'this is a test'.PHP_EOL);//写入
// fputs($handle,'hello world');//写入
fwrite($handle,PHP_EOL.'hello king');//PHP_EOL是换行符//追加到末尾
fclose($handle);
