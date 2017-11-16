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


$sql="select * from movie limit 12";
$result= mysqli_query($con, $sql);
if(!$result){
    echo json_encode($arr);
    exit();
} 



while($row= mysqli_fetch_assoc($result)){
    $arr[]=$row;
}

echo json_encode($arr);
