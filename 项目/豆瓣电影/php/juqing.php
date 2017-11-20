<?php
header("Content-Type:text/html;charset=utf-8");
$con = mysqli_connect("localhost","root","root","douban");
if(!$con){
	echo "系统错误";
}
mysqli_set_charset($con,"utf8");
$sql = "select movie_id from movie_type where type_id=1";
$result = mysqli_query($con,$sql);
$mid=array();
if($result){
	while ($row=mysqli_fetch_assoc($result)) {
		$mid[]=$row["movie_id"];
	}
}
$midstr= implode(",", $mid);//将数组转化成字符串


$sql = "select * from movie where id in ({$midstr})";
$result = mysqli_query($con,$sql);
$aiqing=array();
if($result){
	while ($row=mysqli_fetch_assoc($result)) {
		$mid=$row["id"];//获取movie里面的id
//  	查找与类型对应的id
    $sql = "select type_id as tid from movie_type where movie_id='{$mid}'"; 
		$tresult = mysqli_query($con, $sql);
		$trow = mysqli_fetch_assoc($tresult);
		$tid=$trow["tid"];//与类型对应的id
//		查找id对应的类型
		$sql = "select name from type where id='{$tid}'";
		$typeresult = mysqli_query($con, $sql);
		$typerow = mysqli_fetch_assoc($typeresult);
		$type=$typerow["name"];
		$row["type"]=$type;
		$aiqing[]=$row;
	}
}
echo json_encode($aiqing);


?>