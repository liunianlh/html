<?php


//接口返回数据，必须保证上下数据类型一致
//    1.连接数据库
$con = mysqli_connect("localhost","root", "root", "douban");
$arr=array();
if (!$con) {
    echo json_encode($arr);
   exit();
}

mysqli_set_charset($con,"utf8");


$sql="select * from movie order by click desc";
$result= mysqli_query($con, $sql);
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

echo json_encode($arr);
