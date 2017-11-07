<?php
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$userInfo=compact('username','password','email');
print_r($userInfo);
/*

Array
(
    [username] => jdkfksldf
    [password] => kjsdlkf
    [email] => lkjsdf@qq.com
)
array_keys():得到数组中的键名作为索引数组返回
array_values():得到数组中的键值作为索引数组返回
*/
//INSERT user(username,password,email) VALUES('aaa','bbb','ccc');
$keys=join(',',array_keys($userInfo));
$vals="'".join("','",array_values($userInfo))."'";
// print_r($keys);
// print_r($vals);
$sql="INSERT user({$keys}) VALUES({$vals})";
echo $sql;
