<?php
//    1.连接数据库
$con = mysqli_connect("localhost", "root", "root", "huaban");
if (!$con) {
    echo "连接失败";
    die();
}
mysqli_set_charset($con, "utf8");




//获取分类
$sql = "select * from classify";
$result = mysqli_query($con, $sql);
if ($result) {
//    去获取数据
    while ($row = mysqli_fetch_array($result)) {
        $classList[] = $row;
    }
}
//var_dump($classList);
//获取为你推荐
$sql = "select * from image order by like1 desc limit 0,3";
//查询三条数据
$result = mysqli_query($con, $sql);
$recommendList = array();
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $recommendList[] = $row;
    }
}




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




//获取原创插画
$sql = "select * from image order by like1 asc limit 0,3";
//查询三条数据
$result = mysqli_query($con, $sql);
$recommendList1 = array();
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $recommendList1[] = $row;
//        存到数组
    }
}






?>


<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>花瓣网_陪你做生活的设计师（发现、采集你喜欢的灵感、家居、穿搭、婚礼、美食、旅行、美图、商品等）</title>
	<script type="text/javascript" src="js/denglu.js"> </script>
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/dengluzhuce.css" />
        <link rel="stylesheet" href="css/sweet-alert.css" />
        <script src="js/dengluzhuce.js" type="text/javascript"></script>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/sweet-alert.min.js" type="text/javascript"></script>

    </head>

    <body style="background-color: #FFFFFF;">
        <!--头部-->
        <div class="header-box" id="beijing">
            <div id="header">
                <div class="daohang">
                    <div id="daohang1">
                        <div class="box-left">
                            <a href="#"><img src="img/logo_wt.svg" class="img1"></a>
                            <a href="#">首页</a>
                            <a href="#">发现</a>
                            <a href="#">最新</a>
                            <a href="#">活动</a>
                            <a href="#">|</a>
                            <a href="#">美思</a>
                            <a href="#">美素<img src="img/em-new.svg" class="img0"></a>
                            <a href="#">花瓣live</a>
                            <a href="#"><img src="img/menu1.png" class="img2"> </a>
                        </div>
                        <?php if ($userinfo == null) { ?>
                            <div class="box-right">
                                <a href="javescript:;" class="right_a1" id="dl">登录</a>
                                <a href="javescript:;" class="right_a2" id="zl">注册</a>
                            </div>
                        <?php } else { ?>
                            <div id="xialaphp">
                                <div class="box-rightphp">
                                    <div class="right_a1php">
                                        <?php if ($userinfo["H_portrait"] == "") { ?>
                                            <img src="img/icon1.jpg" />
                                        <?php } else { ?>
                                            <img src="<?php echo $userinfo["H_portrait"]; ?>"   class="right_a1php-img">
                                        <?php } ?>
                                    </div>


                                    <div class="box-right-xialaphp">
                                        <img src="img/persion-icon.png">
                                        <a href="gerenzhongxin.php">个人信息</a>
                                        <img src="img/like-icon.png">
                                        <a href="geren2.php">我的收藏</a>
                                        <img src="huaban/images/quit-icon.png">
                                        <a href="exit.php">退出登录</a>
                                    </div>
                                </div>
                            </div>  
                        <?php } ?>
                    </div>



                    <div id="daohang2" style="display: none; ">
                        <div id="hearder-box" >
                            <div id="header" class="clearbox">
                                <div class="box-left clearbox">

                                    <a href="#"><img src="img/logo.svg" class="img1"></a>
                                    <a href="#">发现</a>
                                    <a href="#">最新</a>
                                    <a href="#">美思</a>
                                    <a href="#">活动<img src="img/em-new.svg" class="img0"></a>
                                    <a href="#">教育</a>
                                    <a href="#" class="tu"></a>

                                    <input type="text" placeholder="搜索你喜欢的内容" class="box-left-input" id="index_text_er"  />
                                    <span class="box-left-input-img" id="index-dianji-er"></span>

                                </div>
                                
                     
                                
                                <!--                               判断用户是否登录，登录显示头像-->
                                <?php if ($userinfo == null) { ?>
                                    <div class="box-right">
                                        <a href="javescript:;" class="right_a1" id="dl2">登录</a>
                                        <a href="javescript:;" class="right_a2" id="zl2">注册</a>
                                    </div>
                                <?php } else { ?>
                                    <div id="xialaphp">
                                        <div class="box-rightphp">
                                            <div class="right_a1php">
                                                <?php if ($userinfo["H_portrait"] == "") { ?>
                                                    <img src="img/icon1.jpg" /> >
                                                <?php } else { ?>
                                                    <img src="<?php echo $userinfo["H_portrait"]; ?>"   class="right_a1php-img">
                                                <?php } ?>
                                            </div>


                                            <div class="box-right-xialaphp">
                                                <img src="img/persion-icon.png">
                                                <a href="gerenzhongxin.php">个人信息</a>
                                                <img src="img/like-icon.png">
                                                <a href="geren2.php">我的收藏</a>
                                                <img src="huaban/images/quit-icon.png">
                                                <a href="exit.php">退出登录</a>
                                            </div>
                                        </div>
                                    </div>  
                                <?php } ?>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="header_title" >
                    <img src="img/head_title.svg" >
                </div>
                <div class="header_input">

                    <input type="text" placeholder="搜索你喜欢的" id="index_text" />
                    <br />
                    <span>热门搜索</span>
                    <a href="#">排版</a>
                    <a href="#">广告设计</a>
                    <a href="#">花瓣LIVE</a>
                    <a href="">配色</a>
                    <a href="">壁纸那些事</a>
                    <div class="header_input_dangda" id="index_sousuo" />
                </div>

            </div>

        </div>

    </div>


    <!--头部2-->


    <!--导航栏2-->















    <!--内容-->
    <div id="counter-box">

        <div id="main">
            <div class="all_look">
                <a>大家正在关注</a>
            </div>
            <div id="section">
                <?php foreach ($classList as $ck => $cv) { ?>
                <?php if($ck+1== count($classList)){ ?>
                    <div class="show">
                        <a href="liebiao.php?id=<?php echo $cv["id"];?>"><?php echo $cv["name"]; ?></a><img src="<?php echo $cv["image"]; ?>" />
                    </div>
                <?php }else {?>
                 <div class="show">
                        <a href="liebiao.php?id=<?php echo $cv["id"];?>"><?php echo $cv["name"]; ?></a><img src="<?php echo $cv["image"]; ?>" />
                    </div>
                <?php }} ?>
            </div>

            <div class="all_look">
                <a>为您推荐</a>
            </div>
            
            <?php if (count($recommendList) == 3) { ?>
        
                <!--为你推荐-->
                <div class="counter-box-tuijian clearbox">
                    <div class="tuijian-one">
                            
                     <a href="xiangxi.php?id=<?php echo $recommendList1[0]["id"];?>">
                        <img src="<?php echo $recommendList[0]["url"]; ?>">
                     </a>
                         
                    </div>
                    <div class="tuijian-two">
                        <div class="tuijian-two-1">
                            <div class="tuijian-two-sanjiao"></div>
                            <p class="tuijian-two-1-p1"><?php echo $recommendList[0]["name"]; ?></p>
                            <p class="tuijian-two-1-p2"><?php echo $recommendList[0]["look"]; ?></p>
                        </div>
                        <div class="tuijian-two-2">
                            <div class="tuijian-two-sanjiao2"></div>
                            <p class="tuijian-two-2-p1"><?php echo $recommendList[1]["name"]; ?></p>
                            <p class="tuijian-two-2-p2"><?php echo $recommendList[1]["look"]; ?>观看<?php echo $cv["id"];?></p>
                        </div>
                    </div>
                    <div class="tuijian-three">
                          <a href="xiangxi.php?id=<?php echo $recommendList1[1]["id"];?>">         

                        <img src="<?php echo $recommendList[1]["url"]; ?>">
                          </a>
                                
                    </div>
                    <div class="tuijian-si">
                         <a href="xiangxi.php?id=<?php echo $recommendList1[2]["id"];?>">
                        <img src="<?php echo $recommendList[2]["url"]; ?>">
                         </a>
                    </div>
                    <div class="tuijian-wu">
                        <div class="tuijian-wu-1">

                            <p class="tuijian-wu-1-p1"><?php echo $recommendList[2]["name"]; ?></p>

                            <p class="tuijian-wu-1-p2"><?php echo $recommendList[2]["brief"]; ?></p>
                            <div class="tuijian-wu-1-sanjiao"></div>
                        </div>	
                        <div class="tuijian-wu-2">
                            <p class="tuijian-wu-2-p"><?php echo $recommendList[2]["look"]; ?>观看</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="all_look">
                <a>原创插画</a>
            </div>
            <?php if (count($recommendList1) == 3) { ?>
                <div class="counter-box-tuijian1">
                    <div class="tuijian1-one">
                        <p class="tuijian1-one-p1"><?php echo $recommendList1[0]["name"]; ?></p>
                        <p class="tuijian1-one-p2"><?php echo $recommendList1[0]["look"]; ?>观看</p>

                        <div class="tuijian1-one-sanjiao"></div>
                    </div>
                    <div class="tuijian1-two">
                        <a href="xiangxi.php?id=<?php echo $recommendList1[0]["id"];?>">
                        
                        <img src="<?php echo $recommendList1[0]["url"]; ?>">
                        </a>
                    </div>
                    <div class="tuijian1-three">
                         <a href="xiangxi.php?id=<?php echo $recommendList1[1]["id"];?>">
                        <img src="<?php echo $recommendList1[1]["url"]; ?>">
                         </a>
                    </div>
                    <div class="tuijian1-si">
                        <div class="tuijian1-si-1">
                            <p class="tuijian1-si-1-p1"><?php echo $recommendList1[1]["name"]; ?></p>
                            <p class="tuijian1-si-1-p2"><?php echo $recommendList1[1]["look"]; ?>观看</p>
                            <div class="tuijian1-si-1-sanjiao"></div>
                        </div>
                        <div class="tuijian1-si-2">
                            <p class="tuijian1-si-2-p1"><?php echo $recommendList1[2]["name"]; ?></p>
                            <p class="tuijian1-si-2-p2"><?php echo $recommendList1[2]["look"]; ?>观看</p>
                            <div class="tuijian1-si-2-sanjiao"></div>
                        </div>
                    </div>
                    <div class="tuijian1-wu">
<!--                         <a href="xiangxi.php?id=<?php echo $recommendList1[2]["id"];?>">-->
                        <img src="<?php echo $recommendList1[2]["url"]; ?>">
<!--                         </a>-->
                    </div>

                </div>
            <?php } ?>

        </div>




        <!--底部-->
        <div class="my_foot">

            <table width="1050px" height="300px">
                <tr>
                    <td>
                        <a href="#">工业设计</a>
                    </td>
                    <td>
                        <a href="#">工业设计</a>
                    </td>
                    <td>
                        <a href="#">工业设计</a>
                    </td>
                    <td>
                        <a href="#">工业设计</a>
                    </td>
                    <td>
                        <a href="#">工业设计</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">摄影</a>
                    </td>
                    <td>
                        <a href="#">摄影</a>
                    </td>
                    <td>
                        <a href="#">摄影</a>
                    </td>
                    <td>
                        <a href="#">摄影</a>
                    </td>
                    <td>
                        <a href="#">摄影</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">造型美妆</a>
                    </td>
                    <td>
                        <a href="#">造型美妆</a>
                    </td>
                    <td>
                        <a href="#">造型美妆</a>
                    </td>
                    <td>
                        <a href="#">造型美妆</a>
                    </td>
                    <td>
                        <a href="#">造型美妆</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">美食</a>
                    </td>
                    <td>
                        <a href="#">美食</a>
                    </td>
                    <td>
                        <a href="#">美食</a>
                    </td>
                    <td>
                        <a href="#">美食</a>
                    </td>
                    <td>
                        <a href="#">美食</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">旅游</a>
                    </td>
                    <td>
                        <a href="#">旅游</a>
                    </td>
                    <td>
                        <a href="#">旅游</a>
                    </td>
                    <td>
                        <a href="#">旅游</a>
                    </td>
                    <td>
                        <a href="#">旅游</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">健身舞蹈</a>
                    </td>
                    <td>
                        <a href="#">健身舞蹈</a>
                    </td>
                    <td>
                        <a href="#">健身舞蹈</a>
                    </td>
                    <td>
                        <a href="#">健身舞蹈</a>
                    </td>
                    <td>
                        <a href="#">健身舞蹈</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">手工布艺</a>
                    </td>
                    <td>
                        <a href="#">手工布艺</a>
                    </td>
                    <td>
                        <a href="#">手工布艺</a>
                    </td>
                    <td>
                        <a href="#">手工布艺</a>
                    </td>
                    <td>
                        <a href="#">手工布艺</a>
                    </td>
                </tr>
            </table>
        </div>

    </div>
    <!---->
    <div class="footer-box">
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
<script>

    //背景随机更换
    var beijing = document.getElementById("beijing");
    var i = 1;

    setInterval(function () {
        i++;
        if (i > 4) {
            i = 1;
        }
        beijing.style.backgroundImage = "url(./img/banner" + i + ".jpg)";
    }, 3000);

    var daohang1 = document.getElementById("daohang1");
    var daohang2 = document.getElementById("daohang2");

    //获取滚动条事件
    window.onscroll = function () {
        var gundong = document.documentElement.scrollTop || document.body.scrollTop;
        if (gundong >= 160) {
            daohang1.style.display = "none";
            daohang2.style.display = "block";
        } else
        {
            daohang1.style.display = "block";
            daohang2.style.display = "none";
        }
    };


//
////        验证码
//
//    function changing() {
//        document.getElementById('checkpic').src = "http://localhost/huaban/yzm.php?" + Math.random();
//    }
//
//
//

//
////注册点击事件
////1.添加事件
//    $("#zhuce1").click(function () {
////  2.去获取数据
//        var name = $("input[name=name]").val();
//        var pwd = $("input[name=pwd]").val();
//        var yzm = $("input[name=yzm]").val();
//
////3.简单验证
//        if (name == "" || pwd == "" || yzm == "" || yzm == "") {
//            swal("信息填写不完整", "", "error");
//        } else {
////            4.将数据提交到后台
//            $.ajax({
//                type: "get",
//                url: "register.php",
//                data: {name: name, pwd: pwd, yzm: yzm}, //提交参数：json数据串
////                    data："name="+name+"&pwd"+pwd+"&yzm="+yzm,
//                success: function (data) {
//                    data = $.parseJSON(data);//将数据you字符串转换为json数据，不一定停用
//                    if (data.status == 0)
//                    {
//                        swal(data.msg, "", "error");
//
//
//
//                    } else {
//
//                        history.go(0);//刷新当前页面
//                    }
//                } //    成功请求，接受返回的值，(请求状态为200)
//            });
//        }
//
//    });
//    
//    


//    
////    登录的点击事件
//   
//   
//   //1.添加事件
//    $("#denglu1").click(function () {
////  2.去获取数据
//        var name = $("input[name=name1]").val();
//        var pwd = $("input[name=pwd1]").val();
//
//
////3.简单验证
//        if (name == "" || pwd == "" ) {
//            swal("信息填写不完整", "", "error");
//        } else {
////            4.将数据提交到后台
//            $.ajax({
//                type: "post",
//                url: "login.php",
//                data: {name: name, pwd: pwd}, //提交参数：json数据串
//           
//                success: function (data) {
//                    data = $.parseJSON(data);//将数据you字符串转换为json数据，不一定停用
//                    if (data.status == 1)
//                    {
////                         swal("222", "", "error");
//                       history.go(0);
//                     
//                    } else {
//
//                    swal(data.msg, "", "error");
//                    }
//                } //    成功请求，接受返回的值，(请求状态为200)
//            });
//        }
//
//    });
//    
//    
//    
//    //    搜索
//    
//    导航1
    $("#index_sousuo").click(function(){
        var text=$("#index_text").val();
        if(text==""){
            swal("请输入搜索内容", "", "error");
        }
        else{
             window.location.href="sousuo.php?sousuo="+text;
        }
       
    });
    
    
//    导航2
      $("#index-dianji-er").click(function(){
        var text=$("#index_text_er").val();
        if(text==""){
            swal("请输入搜索内容", "", "error");
        }
        else{
             window.location.href="sousuo.php?sousuo="+text;
        }
       
    });
    
    




</script>
</html>
<script type="text/javascript" src="js/dengluzhuce.js"></script>
