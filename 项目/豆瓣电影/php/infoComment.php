<?php
header("Content-Type:text/html;charset=utf-8");
$id=$_GET["id"];
$con = mysqli_connect("localhost", "root", "root", "douban");
$infoComment = array();
if (!$con) {
    echo json_encode($infoComment);
    die();
}
//校验编码
mysqli_set_charset($con, "utf8");
//select查询语句
$sql = "select * from comment where movie_id={$id}";
//执行select语句
$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $infoComment[] = $row;
    }
}
echo json_encode($infoComment);//输出热门数据
var_dump($infoComment);
?>