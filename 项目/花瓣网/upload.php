<?php

//头像上传
$file=$_FILES["image"];

if($file["error"]!=0){
    echo "<script>alert('上传失败');history.go(-1);</script>";
    exit();
}

//1.重新命名
//获取后缀
$num= strrpos($file["name"],".");
$type=substr($file["name"],$num);
$newname=date("YmdHis").rand(100,999).$type;


//确定上传的路径

$upload="./upload/";
$filePath=$upload.$newname;



//移动文件

if(move_uploaded_file($file["tmp_name"], $filePath)){
    $con = mysqli_connect("localhost", "root", "root", "huaban");
if (!$con) {

   echo "<script>alert('上传失败');history.go(-1);</script>";
   exit();
}
mysqli_set_charset($con, "utf8");


$sql="update user set H_portrait='{$filePath}' where id=".$_COOKIE["user_id"];
    if (mysqli_query($con, $sql)) 
            {
                echo "<script>alert('上传成功');self.location=document.referrer;</script>";
                exit();
            }else{
                    echo "<script>alert('上传失败');history.go(-1);</script>";
                    exit();
                }



}
else{
      echo "<script>alert('上传失败');history.go(-1);</script>";
      exit();
}


