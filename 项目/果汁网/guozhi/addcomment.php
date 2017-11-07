<?php
$link= mysqli_connect("localhost","root","root","guozhi");
if(!$link){
    echo mysqli_errno($link);
}
mysqli_select_db($link,"fruit_crush");
mysqli_set_charset($link,"utf8");


$comment=$_POST['comment'];
$time=date('m').'月'.date('d').'日';




$addsql="insert into comment(comment,date) value ('$comment','$time')";
$ret= mysqli_query($link, $addsql);
if($ret){
    echo json_encode(array("status"=>true,"data"=>array("comment"=>$comment,"date"=>$time)));
    
} else {
    echo json_encode(array("status"=>fales,"msg"=>"插入失败"));
}
?>
