<?php
header("Content-Type:text/html;charset=utf-8");
// 接收数据
$content=$_POST["content"];
$id=$_POST["id"];
$date=date("m月d日",time());
//验证不能为空
if($content==""){
	$result = array("status"=>false, "msg"=>"请填写评论内容");
	echo json_encode($result);
	exit();
}
//链接数据库
$con = mysqli_connect("localhost","root","root","douban");
if(!$con){
	$result = array("status"=>false, "msg"=>"系统错误");
	echo json_encode($result);
	exit();
}
//校验编码
mysqli_set_charset($con,"utf8");

//插入数据
$sql = "insert into comment(content,add_time,movie_id) values('{$content}','{$date}','{$id}')";

$result = mysqli_query($con,$sql);
if(!$result){
	$result = array("status"=>false, "msg"=>"系统错误");
	echo json_encode($result);
}
else{
	$result = array("status"=>true, "msg"=>"评论成功","date"=>$date);
	echo json_encode($result);
}
?>