<?php



//评论
if(!isset($_COOKIE["user_id"]) ||$_COOKIE["user_id"]<=0){
    $arr=array("status"=>0,"msg"=>"请登录");
    echo json_encode($arr);
    exit();
}



$uid= isset($_POST["uid"])?$_POST["uid"]:0;
$iid=isset($_POST["iid"])?$_POST["iid"]:0;
$text1=isset($_POST["text1"])?$_POST["text1"]:0;




if($uid<=0||$iid<=0){
    $arr=array("status"=>2,"msg"=>"参数错误");
    echo json_encode($arr);
    exit();
}


if($text1==""){
    $arr=array("status"=>0,"msg"=>"请输入评论内容");
    echo json_encode($arr);
    exit();
}


//数据入库
header('content-type:text/html;charset=utf-8');
//    1.连接数据库
$con = mysqli_connect("localhost", "root", "root", "huaban");
if (!$con) {
   $arr=array("status"=>2,"msg"=>"系统错误");
   echo json_encode($arr);
   exit();
}
mysqli_set_charset($con, "utf8");


$sql="insert into comment(uid,iid,conent,date) value({$uid},{$iid},'{$text1}',".time().")";

$result= mysqli_query($con, $sql);
if($result){
    $arr=array("status"=>0,"msg"=>"发表成功");
    echo json_encode($arr);
    exit();
}else{
    $arr=array("status"=>2,"msg"=>"发表失败");
    echo json_encode($arr);
    exit();
}
