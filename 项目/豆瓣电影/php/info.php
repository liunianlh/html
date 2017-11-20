 <?php
header("Content-Type:text/html;charset=utf-8");
$id=$_GET["id"];
//echo $id;
$con = mysqli_connect("localhost", "root", "root", "douban");
$info = array();
if (!$con) {
    echo json_encode($info);
    die();
}
//校验编码
mysqli_set_charset($con, "utf8");
//select查询语句
$sql = "select * from movie where id={$id}";
//执行select语句
$result = mysqli_query($con, $sql);

if ($result) {
	$row = mysqli_fetch_assoc($result);
    $sql = "select type_id as tid from movie_type where movie_id='{$id}'"; 
	$tresult = mysqli_query($con, $sql);
	$trow = mysqli_fetch_assoc($tresult);
	$tid=$trow["tid"];//与类型对应的id
//	查找id对应的类型
	$sql = "select name from type where id='{$tid}'";
	$typeresult = mysqli_query($con, $sql);
	$typerow = mysqli_fetch_assoc($typeresult);
	$type=$typerow["name"];
	$row["type"]=$type;
    $info= $row;
}

echo json_encode($info);//输出热门数据

//
//var_dump($info);
//die();
?>