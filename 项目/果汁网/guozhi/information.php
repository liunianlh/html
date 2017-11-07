<?php

header('content-type:text/html;charset=utf-8');
//获取姓名
if(isset($_GET["name"])){
    $name = strip_tags($_GET["name"]);
}else{
    $name = "";
}


//获取邮箱

if(isset($_GET["email"])){
    $email = strip_tags($_GET["email"]);
}else{
    $email = "";
}




//获取意见

if(isset($_GET["text"])){
    $text = strip_tags($_GET["text"]);
}else{
    $text = "";
}





//1. 连接数据库
$con = mysqli_connect("localhost", "root", "root", "guozhi");
if(mysqli_connect_errno() != 0){//输出错误码，正确是0
     echo "<script>alert('系统错误');history.go(-1);</script>";
//    echo mysqli_connect_error();//输出错误原因
    die();//组织程序运行
}

//2.校验编码
mysqli_set_charset($con, "utf8");


//3.执行sql语句
$sql = "insert into contact(username,email,content) values('{$name}','{$email}','{$text}')";
$result = mysqli_query($con, $sql);
//删除\增加\修改语句的返回结果成功为true，失败为false
if(mysqli_errno($con) != 0){
    echo "<script>alert('插入失败，请重试！');history.go(-1);</script>";
}else{
     echo "<script>alert('插入成功');history.go(-1);history.go(0);</script>";
}

mysqli_close($con);