<?php

header("Content-Type:text/html;charset=utf-8");

//接口返回数据，必须保证上下数据类型一致
//    1.连接数据库
//$id=$_GET["id"];
$con = mysqli_connect("localhost","root", "root", "douban");
$arr=array();
if (!$con) {
    echo json_encode($arr);
   exit();
}

mysqli_set_charset($con,"utf8");


$sql="select * from movie limit 12";
$result= mysqli_query($con, $sql);
//var_dump($result);die();

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        
    	$mid=$row["id"];//获取movie里面的id
//  	查找与类型对应的id
//        var_dump($row);die();
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
        $arr[] = $row;
    }
}






while($row= mysqli_fetch_assoc($result)){
    $arr[]=$row;
}
//var_dump($arr);die();

echo json_encode($arr);


//
//<?php
//header("Content-Type:text/html;charset=utf-8");
//$con = mysqli_connect("localhost", "root", "root", "douban");
//$remen = array();
//if (!$con) {
//    echo json_encode($remen);
//    die();
//}
////校验编码
//mysqli_set_charset($con, "utf8");
////select查询语句
//$sql = "select * from movie where releases='1'";
////执行select语句
//$result = mysqli_query($con, $sql);
//
//if ($result) {
//    while ($row = mysqli_fetch_assoc($result)) {
//    	$mid=$row["id"];//获取movie里面的id
////  	查找与类型对应的id
//    	$sql = "select type_id as tid from type where movie_id='{$mid}'";
//		$tresult = mysqli_query($con, $sql);
//		$trow = mysqli_fetch_assoc($tresult);
//		$tid=$trow["tid"];//与类型对应的id
////		查找id对应的类型
//		$sql = "select name from type where id='{$tid}'";
//		$typeresult = mysqli_query($con, $sql);
//		$typerow = mysqli_fetch_assoc($typeresult);
//		$type=$typerow["name"];
//		$row["type"]=$type;
//        $remen[] = $row;
//    }
//}
//echo json_encode($remen);//输出热门数据
//?>