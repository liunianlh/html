<?php
session_start();
//正常的注册流程
//1.接收数据
$name=$_GET["name"];
$pwd=$_GET["pwd"];
$yzm=$_GET["yzm"];
//2.验证数据
if($name==""||$pwd==""||$yzm=="")
{
       //返回结果（成功还是失败），提示语
    $msg=array("status"=>0,"msg"=>"请将数据填写完整");
        echo json_encode($msg);//将数组转换为json数据
        exit();
}



//用户名格式是否正确
if(preg_match("/^[a-zA-Z][a-zA-Z0-9]{5,10}$/", $name)==false){
    $msg=array("status"=>0,"msg"=>"用户名格式不正确");
    echo json_encode($msg);
    exit();
}
//密码格式是否正确
if(preg_match("/^[a-zA-Z0-9_]{8,15}$/", $pwd)==false)
{
    $msg=array("status"=>0,"msg"=>"密码格式不正确");
    echo json_encode($msg);
    exit();
}




//验证码是否正确
if($yzm!=$_SESSION["yzm"])
{
    $msg=array("status"=>0,"msg"=>"验证码错误");
    echo json_encode($msg);
    exit();
}
// else {
//      $msg=array("status"=>1,"msg"=>"验证码正确");
//    echo json_encode($msg);
//    exit();
//}




//验证用户名是否存在
$con= mysqli_connect("localhost","root","root","huaban");
if(!$con){
    $msg=array("status"=>0,"msg"=>"系统错误，请重试");                                                                        
    echo json_encode($msg);
    exit();
}
mysqli_set_charset($con, "utf8");
$sql="select * from user where username='{$name}'";
$result= mysqli_query($con,$sql);
if(!$result){
    $msg=array("status"=>0,"msg"=>"系统错误，请重试");
    echo json_encode($msg);
    exit();
}


//获取查询记录的条数
$num= mysqli_num_rows($result);
if($num>0)
{
    $msg=array("status"=>0,"msg"=>"用户名已存在");
    echo json_encode($msg);
    exit();
}



//入库
$pwd= md5($pwd);
$sql="insert into user(username,pwd) values('{$name}','{$pwd}')";
$result= mysqli_query($con,$sql);
if($result){
    $id= mysqli_insert_id($con);//获取新插入的ID
    setcookie("user_id",$id, time()+3600*24);
    setcookie("user_name",$name, time()+3600*24);

    
    $msg=array("status"=>1,"msg"=>"注册成功");
    echo json_encode($msg);
     exit();
}
else{
     $msg=array("status"=>0,"msg"=>"注册失败，请重试");
     echo json_encode($msg);
      exit();
}
//



//
//else{
// $msg=array("status"=>1,"msg"=>"请求成功");
//    echo json_encode($msg);//将数组转换为json数据
//}
