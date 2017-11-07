<?php
header('content-type:text/html;charset=utf-8');
/*
  文件相关操作
  文件创建、删除、剪切、重命名、拷贝
 */
//touch($filename):创建文件
$filename='test1.txt';
// var_dump(touch($filename));






//unlink($filename):删除指定文件
 //var_dump(unlink($filename));
//检测文件存在则删除
// if(file_exists($filename)){
//   if(unlink($filename)){
//     echo '文件删除成功';
//   }else{
//     echo '文件删除失败';
//   }
// }else{
//   echo '要删除的文件不存在';
// }
// touch($filename);



//rename($filename,$newname):重命名或者剪切文件
/* $newname='test111.txt';
 if(rename($filename,$newname)){
   echo '重命名成功';
 }else{
   echo '重命名失败';
 }
 //报错，有警告
 */



/*
// $filename='test111.txt';
// if(file_exists($filename)){
//   if(rename($filename,'test123.txt')){
//     echo '重命名成功';
//   }else{
//     echo '重命名失败';
//   }
// }else{
//   echo '要重命名的文件不存在';
// }
//没有警告
 */




//将test123.txt剪切到test目录下test123.txt
// $filename='test123.txt';
// $path='./test/test123.txt';
// if(file_exists($filename)){
//   if(rename($filename,$path)){
//     echo '文件剪切成功';
//   }else{
//     echo '文件剪切失败';
//   }
// }else{
//   echo '文件不存在';
// }







//copy($source,$dest):复制文件
// $source='2-path.php';
// $dest='test123/2-path.php';
// if(copy($source,$dest)){
//   echo '文件拷贝成功';
// }else{
//   echo '文件拷贝失败';
// }
//拷贝远程文件需要开启PHP配置文件中的allow_url_fopen=On
//var_dump(copy('http://blog.phpfamily.org/wp-content/uploads/2016/09/king-1.jpg','./king-1.jpg'));
