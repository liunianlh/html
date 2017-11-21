<?php
$upFile = $_FILES['file'];
//判断文件是否为空或者出错
if ($upFile['error'] == 0 && !empty($upFile)) {
    $dirpath = "../img";
    $filename = $_FILES['file']['name'];
    $nameCur = explode('.', $filename);
    $filename = time() . '.' . $nameCur['1'];
//    $filename = time() .
    $queryPath =  $dirpath . '/' . $filename;
    $queryPaths="img". '/' . $filename;
    //move_uploaded_file将浏览器缓存file转移到服务器文件夹
    if (move_uploaded_file($_FILES['file']['tmp_name'], $queryPath)) {
        echo json_encode(array("status"=>true,"url"=>$queryPaths));
    }else{
        echo json_encode(array("status"=>false,"msg"=>"上传失败"));
    }
}else{
    echo json_encode(array("status"=>false,"msg"=>"上传失败"));
}
