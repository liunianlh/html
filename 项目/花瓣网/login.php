<?php
session_start();


//登录的信息验证
$name=$_POST["name"];
$pwd=$_POST["pwd"];


//对数据进行验证
if($name ==""||$pwd==""){
    $msg=array("status"=>0,"msg"=>"用户名或密码不能为空");
    echo json_encode($msg);
    exit;
}

//验证用户名和密码是否匹配
$con= mysqli_connect("localhost","root","root","huaban");
if(!$con){
    $msg=array("status"=>0,"msg"=>"系统错误，请重试");                                                                        
    echo json_encode($msg);
    exit();
}
mysqli_set_charset($con, "utf8");

$pwd=md5($pwd);
$sql="select *from user where username='{$name}' and pwd='{$pwd}'";
$result= mysqli_query($con, $sql);

if(!$result){
    $msg=array("status"=>0,"msg"=>"系统错误，请重试");
    echo json_encode($msg);
    exit();
}




$row= mysqli_fetch_assoc($result);
if($row!=null){
       setcookie("user_id",$row["id"], time()+3600*24);
    setcookie("user_name",$row["username"], time()+3600*24);
    $msg=array("status"=>1,"msg"=>"登陆成功");
     echo json_encode($msg);
    exit();
}
 else {
     $msg=array("status"=>0,"msg"=>"账号或密码错误");
     echo json_encode($msg);
    exit();
}
