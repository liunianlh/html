<?php
header('content-type:text/html;charset=utf-8');
//    1.连接数据库
$con = mysqli_connect("localhost", "root", "root", "huaban");
if (!$con) {
    echo "连接失败";
    die();
}
mysqli_set_charset($con, "utf8");



//判断是否登录
$userinfo = array();
if (isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] > 0) {
    //用户是登录状态
    //去获取用户的信息
    $sql = "select * from user where id=" . $_COOKIE["user_id"];
    $result = mysqli_query($con, $sql);
    if ($result) {
        $userinfo = mysqli_fetch_assoc($result);
    }
}




//分页
$page = isset($_GET["page"]) ? $_GET["page"] : 1; //当前页数
//每页条数
$num = 6;



$search = isset($_GET["sousuo"]) ? $_GET["sousuo"] : "";

$start = ($page - 1) * $num;
$sql = "select * from image where name like '%{$search}%' limit {$start},{$num}";

$result = mysqli_query($con, $sql);
$list = array();
if (!$result) {
    $list = array();
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        $list[] = $row;
    }
}


//总页数
$sql = "select count(*) as c from image where name like '%{$search}%'";
//echo $sql;
//die();
$reusult = mysqli_query($con, $sql);


if ($reusult) {
    $count = mysqli_fetch_assoc($reusult);
    $count = $count["c"];
//    echo $count;die();
}
$countpage = ceil($count / $num);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" href="css/sousuo.css" />
        <link rel="stylesheet" href="css/dengluzhuce.css" />
        
<!--        <script type="text/javascript" src="js/dengluzhuce.js"></script>-->

        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/sweet-alert.css" />
        <script src="js/sweet-alert.min.js" type="text/javascript"></script>

    </head>
    <body>
        <!--头部-->
        <div id="hearder-box" >
            <div id="header" class="clearbox">
                <div class="box-left clearbox">

                    <a href="index.php"><img src="img/logo.svg" class="img1"></a>

                    <a href="#">发现</a>
                    <a href="#">最新</a>
                    <a href="#">美思</a>
                    <a href="#">活动<img src="img/em-new.svg" class="img0"></a>
                    <a href="#">教育</a>
                    <a href="#" class="tu"></a>

                    <input type="text" placeholder="搜索你喜欢的内容" class="box-left-input" id="sousuo-text-11" />
                    <span class="box-left-input-img" id="sousuodianji-11"></span>

                </div>
                <?php if ($userinfo == null) { ?>
                    <div class="box-right">
                        <a href="javescript:;" class="right_a1" id="dl2">登录</a>
                        <a href="javescript:;" class="right_a2" id="zl2">注册</a>
                    </div>
                <?php } else { ?> 
                    <div id="xialaphp">
                        <div class="box-rightphp">
                            <div class="right_a1php" >
                                <?php if ($userinfo["H_portrait"] == "") { ?>
                                    <img src="img/icon1.jpg"   >
                                <?php } else { ?>
                                    <img src="<?php echo $userinfo["H_portrait"]; ?>"   class="right_a1php-img">
                                <?php } ?>
                            </div>


                            <div class="box-right-xialaphp">
                                <img src="img/persion-icon.png">
                                <a href="gerenzhongxin.php">个人信息</a>
                                <img src="img/like-icon.png">
                                <a href="geren2.html">我的收藏</a>
                                <img src="huaban/images/quit-icon.png">
                                <a href="exit.php">退出登录</a>
                            </div>
                        </div>
                    </div>  
                <?php } ?>
            </div>
        </div>



        <!--背景图-->
        <div id="bander-img">
            <div class="bander-img-text">
                国内最优质图片灵感库<br />
                已有数百万出众网友，用花瓣网保存喜欢的图片。
            </div>
        </div>



        <!--中部-->

        <div id="count">
            <div class="zhong clearbox">

                <?php foreach ($list as $k => $v) { ?>  
                   
     <div class="zhong-yi">
                        <div class="zhong-yi-1" >
                             <a href="xiangxi.php?id=<?php echo $v["id"];?>"> 
                            <img src="<?php echo $v["url"]; ?>" />
                             </a>
                        </div>
                        <div class="zhong-yi-2">
                            <span><?php echo $v["name"]; ?></span>
                        </div>
                        <?php
                        $sql = "select * from user where id={$v["uid"]}";
                        $result = mysqli_query($con, $sql);
                        $user = array();
                        if ($result) {
                            $user = mysqli_fetch_assoc($result);
                        }
//                            var_dump($user);
                        ?>



                        <div class="zhong-yi-3">
                            <div class="zhong-yi-3-yuan">
                                <img src="<?php echo $user["H_portrait"]; ?>" />
                            </div>
                            <div class="zhong-yi-3-text">
                                <p>来自<?php echo $user["username"]; ?>的收藏</p>
                                <p><?php echo date("Y-m-d", $v["date"]); ?></p>
                            </div>
                        </div>
                    </div>

                <?php } ?>  
                   
            </div>
        </div>


        <!--页码-->
        <?php if ($countpage > 1) { ?>
            <div id="page">
                <?php if ($page > 1) { ?>
                    <a href="sousuo.php?page=<?php echo $page - 1; ?>&sousuo=<?php echo $search; ?>"><</a>
                <?php } ?>

                <?php
                $startpage = $page - 2;
                $endpage = $page + 2;
                if ($countpage >= 5) {
                    if ($startpage <= 0) {
                        $startpage = 1;
                        $endpage = 5;
                    }

                    if ($endpage > $countpage) {
                        $endpage = $countpage;
                        $startpage = $endpage - 4;
                    }
                } else {
                    $startpage = 1;
                    $endpage = $countpage;
                }
                ?>


                <?php for ($i = $startpage; $i <= $endpage; $i++) { ?>
                    <?php if ($i == $page) { ?>
                        <a href="sousuo.php?page=<?php echo $i; ?>&sousuo=<?php echo $search; ?>" class="a"><?php echo $i; ?></a>
                    <?php } else { ?>
                        <a href="sousuo.php?page=<?php echo $i; ?>&sousuo=<?php echo $search; ?>"><?php echo $i; ?></a>
                    <?php } ?>
                <?php } ?>

                <?php if ($page < $countpage) { ?>
                    <a href="sousuo.php?page=<?php echo $page + 1; ?>&sousuo=<?php echo $search; ?>">></a>
                <?php } ?>

            </div>

        <?php } ?>



        <!--底部-->
        <div class="footer-box ">
            <div class="links">
                <div class="link">
                    <a href="index.php">花瓣首页</a>
                    <a href="#">花瓣采集工具</a>
                    <a href="#">花瓣官方博客</a>
                </div>
                <div class="link">
                    <a href="#">联系与合作</a>
                    <a href="#">联系我们</a>
                    <a href="#">用户反馈</a>
                    <a href="#">花瓣 LOGO 标准文档</a>
                </div>
                <div class="link">
                    <a href="#">移动客户端</a>
                    <a href="#">花瓣 iPhone 版</a>
                    <a href="#">花瓣 Android 版</a>
                    <a href="#">花瓣 HD</a>
                </div>
                <div class="follow">
                    关注我们
                    <br> 新浪微博：@花瓣网
                    <br> 官方 QQ：534529940
                </div>
                <img src="img/erwei.png" style="width: 120px;margin-top: 30px;margin-left: 280px;">
            </div>





            <!--登录框-->
            <div class="da" id="dada">
                <div id="denglu">
                    <div id="guan">X</div>
                    <div class="img1"><img src="img/logo1.png"></div><br />
                    <span class="span1">使用第三方账号登录</span>
                    <div class="img2"><img src="img/ananan.png"></div><br />
                    <span class="span2">使用账号密码登录</span>

                    <input type="text" placeholder="输入花瓣网账号" class="denglu-input1" name="name1" />
                    <input type="text" placeholder="输入密码" class="denglu-input2" name="pwd1"/>
                    <input type="submit" value="登录" class="denglu-input3" id="denglu1"/>

                    <div class="denglu-xia">
                        <span>还没有注册?</span><a href="#">点击注册</a>
                    </div>

                </div>
            </div>



            <!--注册框-->
            <div class="zhezhao" id="da1">
                <div id="zhuce">
                    <div id="guan2">X</div>
                    <div class="img1"><img src="img/logo1.png"></div><br />
                    <span class="span1">使用用户名注册</span>

                    <input type="name" placeholder="字母开头字母数字组合6-11位" class="zhuce-input1" name='name' value="ubnug3124n" />
                    <input type="text" placeholder="字母数字下划线组合8-15位" class="zhuce-input2" name='pwd' value="sdqd33d33d"  />
                    <input type="text" placeholder="请输入验证码" class="zhuce-input3" name='yzm' />
                    <!--验证码-->
                    <img id="checkpic" src='http://localhost/huaban/yzm.php'  style="width: 80px; height:35px; margin-left:20px " />
                    <a href="#" onclick="changing()" >换一张</a> 
                    <input type="submit" value="注册" class="zhuce-input4"  id="zhuce1" />

                </div> 
            </div>
    </body>
</html> 
<script>







//    导航2
    $("#sousuodianji-11").click(function () {
        var text = $("#sousuo-text-11").val();
        if (text == "") {
            swal("请输入搜索内容", "", "error");
        } else {
            window.location.href = "sousuo.php?sousuo=" + text;
        }

    });




//
//
//    var denglu = document.getElementById("denglu");
//    var guan = document.getElementById("guan");
//    var guan2 = document.getElementById("guan2");
//    var da = document.getElementById("dada");
//    var da1 = document.getElementById("da1");
//
//    var zhuce1 = document.getElementById("zhuce");
//    //               第二个导航 
//
//
//    var dl2 = document.getElementById("dl2");
//    var zl2 = document.getElementById("zl2");
//    dl2.onclick = function () {
//        da.style.display = "block";
//        denglu.style.display = "block";
//    }
//    guan.onclick = function () {
//        denglu.style.display = "none";
//        da.style.display = "none";
//    }
//
//
//    zl2.onclick = function () {
//        da1.style.display = "block";
//        zhuce1.style.display = "block";
//    }
//    guan2.onclick = function () {
//        zhuce1.style.display = "none";
//        da1.style.display = "none";
//    }
//
//


//                验证码
    function changing() {
        document.getElementById('checkpic').src = "http://localhost/huaban/yzm.php?" + Math.random();
    }








//注册点击事件
//1.添加事件
    $("#zhuce1").click(function () {
//  2.去获取数据
        var name = $("input[name=name]").val();
        var pwd = $("input[name=pwd]").val();
        var yzm = $("input[name=yzm]").val();

//3.简单验证
        if (name == "" || pwd == "" || yzm == "" || yzm == "") {
            swal("信息填写不完整", "", "error");
        } else {
//            4.将数据提交到后台
            $.ajax({
                type: "get",
                url: "register.php",
                data: {name: name, pwd: pwd, yzm: yzm}, //提交参数：json数据串
//                    data："name="+name+"&pwd"+pwd+"&yzm="+yzm,
                success: function (data) {
                    data = $.parseJSON(data);//将数据you字符串转换为json数据，不一定停用
                    if (data.status == 0)
                    {
                        swal(data.msg, "", "error");



                    } else {

                        history.go(0);//刷新当前页面
                    }
                } //    成功请求，接受返回的值，(请求状态为200)
            });
        }

    });





//    登录的点击事件


    //1.添加事件
    $("#denglu1").click(function () {
//  2.去获取数据
        var name = $("input[name=name1]").val();
        var pwd = $("input[name=pwd1]").val();


//3.简单验证
        if (name == "" || pwd == "") {
            swal("信息填写不完整", "", "error");
        } else {
//            4.将数据提交到后台
            $.ajax({
                type: "post",
                url: "login.php",
                data: {name: name, pwd: pwd}, //提交参数：json数据串

                success: function (data) {
                    data = $.parseJSON(data);//将数据you字符串转换为json数据，不一定停用
                    if (data.status == 1)
                    {
//                         swal("222", "", "error");
                        history.go(0);

                    } else {

                        swal(data.msg, "", "error");
                    }
                } //    成功请求，接受返回的值，(请求状态为200)
            });
        }

    });


</script>