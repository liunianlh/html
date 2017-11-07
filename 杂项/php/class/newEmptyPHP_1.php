<?php

header("Content-type: text/html; charset=utf-8");
$arr = array(
    array(
        "name" => "河北省",
        "list" => array(
            array(
                "name" => "保定市",
                "list" => array(
                    array("name" => "北市区"),
                    array("name" => "北市区1"),
                    array("name" => "北市区2"),
                    array("name" => "北市区3"),
                )
            ),
            array(
                "name" => "石家庄市",
                "list" => array(
                    array("name" => "北市区"),
                    array("name" => "北市区1"),
                    array("name" => "北市区2"),
                    array("name" => "北市区3"),
                )
            )
        )
    )
);
//function f1($arr, $level){
//    for($i=0;$i<count($arr);$i++){
//        for($j=1;$j<$level;$j++){
//            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
//        }
//        echo $arr[$i]["name"]."<br/>";
//        if(isset($arr[$i]["list"])){
//            $level2 = $level+1;
//            f1($arr[$i]["list"],$level2);
//        }
//    }
//}

//

//f1($arr, 1);`
foreach ($arr as $fo)
{
 foreach ($fo as $o)
{
 foreach ($fo as $a)
{
     echo $a;
};
};
};

