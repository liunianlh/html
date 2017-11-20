<?php
header("Content-Type:text/html;charset=utf-8");
// 接收数据
$name=$_POST["name"];
//name
$actor=$_POST["actor"];
//performer
$about=$_POST["about"];
//introduce
$url="img/121edq.jpg";
$hot=$_POST["hot"];
//releasea
$release=$_POST["release"];
//is_show
$score=$_POST["score"];
//score
//$type=$_POST["type"];
$type="科幻";
//type
$release_date=$_POST["date"];
//year
//验证不能为空
if($name==""||$actor==""||$about==""||$url==""||$hot==""||$release==""||$score==""||$release_date==""){
	$result = array("status"=>false, "msg"=>"信息填写不完整");
	echo json_encode($result);
	exit();
}
//链接数据库
$con = mysqli_connect("localhost","root","root","douban");
if(!$con){
	$result = array("status"=>false, "msg"=>"系统错误1");
	echo json_encode($result);
	exit();
}
//校验编码
mysqli_set_charset($con,"utf8");
//验证电影是否发布过
$sql = "select id from movie where name='{$name}'";
$content="";
$result = mysqli_query($con,$sql);
$row="";
$row=mysqli_fetch_assoc($result);
if($row){
	$result = array("status"=>false, "msg"=>"该电影已发布");
	echo json_encode($result);
	exit();
}

//插入数据
//$sql = "insert into movie(name,image,performer,year,score,is_show,release,introduce)"
//        . "values('{$name}','{$url}','{$actor}','{$release_date}','{$score}','{$release}','{$hot}','{$about}')";


$sql = "insert into movie(name,image,performer,year,score,is_show,introduce,releases)"
       . "values('{$name}','{$url}','{$actor}','{$release_date}','{$score}','{$release}','{$about}','{$hot}')";


//$sql = "insert into movie(name,images,about,url,hot,`release`,score,release_date)values('{$name}','{$url}','{$actor}','{$about}','{$hot}','{$release}','{$score}','{$release_date}')";
$result = mysqli_query($con,$sql);
if(!$result){
	$result = array("status"=>false, "msg"=>"系统错误2");
	echo json_encode($result);
	exit();
}

//获取mid
$sql = "select id from movie where name='{$name}'";
$result = mysqli_query($con,$sql);
$mid="";
if($result){
	$row=mysqli_fetch_assoc($result);
	$mid=$row["id"];
}
//获取tid
$sql = "select id from type where name='{$type}'";
$result = mysqli_query($con,$sql);

$tid ="";
if($result){
	$row=mysqli_fetch_assoc($result);
	$tid=$row["id"];
}


//插入类别
$sql = "insert into type(id,name)values('{$mid}','{$tid}')"; 
$result = mysqli_query($con,$sql);
if($result){
	$result = array("status"=>true, "msg"=>"发表成功");
	echo json_encode($result);
	exit();
}

?>