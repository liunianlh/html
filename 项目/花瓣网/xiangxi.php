<?php
//    1.连接数据库
$con = mysqli_connect("localhost", "root", "root", "huaban");
if (!$con) {
    echo "连接失败";
    die();
}
mysqli_set_charset($con, "utf8");


//查询图片的详情
$id = isset($_GET["id"]) ? $_GET["id"] : 1;
$sql = "select * from image where id={$id}";
$result = mysqli_query($con, $sql);
$imageInfo = array();
if ($result) {
    $imageInfo = mysqli_fetch_assoc($result);
}


//图片对应的用户信息
$sql = "select * from user where id={$imageInfo["uid"]}";
$result = mysqli_query($con, $sql);
$userinfo = array();
if ($result) {
    $userinfo = mysqli_fetch_assoc($result);
}
//
//var_dump($userinfo);die();
//判断是否登录
$user = array();
//是否收藏
$isLike=false;
if (isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] > 0) {
    //用户是登录状态
    //去获取用户的信息
    $sql = "select * from user where id=" . $_COOKIE["user_id"];
    $result = mysqli_query($con, $sql);
    if ($result) {
        $user = mysqli_fetch_assoc($result);
        
//        查询是否收藏
        $sql="selsct * from collection where uid={$user["id"]} and iid={$id}";
        $result= mysqli_query($con, $sql);
        if($result){
            $num= mysqli_num_rows($result);
            if($num>0){
                $isLike=true;
            }
        }
    }
}




//获取评论内容


$sql="select * from comment where iid={$id} order by date desc limit 0,2";
$result= mysqli_query($con, $sql);
$commentList= array();
if($result){
    while ($row= mysqli_fetch_assoc($result)){
        $commentList[]=$row;
    }
}
        
        
?>





<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>详情页面</title>
        <link rel="stylesheet" href="css/xiangxi.css" />
        <link rel="stylesheet" href="css/dengluzhuce.css" />
<!--                   <script src="js/dengluzhuce.js" type="text/javascript"></script>-->
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/sweet-alert.css" />
        <script src="js/sweet-alert.min.js" type="text/javascript"></script>

    </head>
    <body style="background-color: #FAFAFA;">
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
                    <form action="" >
                        <input type="text" placeholder="搜索你喜欢的内容" class="box-left-input" />
                        <span class="box-left-input-img"></span>
                    </form>
                </div>
                <?php if ($user == null) { ?>
                    <div class="box-right">
                        <a href="javescript:;" class="right_a1" id="dl2">登录</a>
                        <a href="javescript:;" class="right_a2" id="zl2">注册</a>
                    </div>
                <?php } else { ?> 
                    <div id="xialaphp">
                        <div class="box-rightphp">
                            <div class="right_a1php" >
                                <?php if ($user["H_portrait"] == "") { ?>
                                    <img src="img/icon1.jpg"   >
                                <?php } else { ?>
                                    <img src="<?php echo $user["H_portrait"]; ?>"   class="right_a1php-img">
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





        <div id="zongde">
            <div id="count-box">
                <div class="count-box-left clearbox">
                        <?php if($isLike==true){ ?>
                    <input  type="button" style="background: rgba(0,0,0,0.30);" value="收藏" class="count-box-left-input1" />
                        <?php }else{ ?>
                    <input  type="button"  value="收藏" class="count-box-left-input1" id="likelike"/>

                        <?php } ?>
                    <input type="submit" value="返回" class="count-box-left-inputt" onclick="self.location=document.referrer;"/>
               
                    <div class="count-box-left-img"><img src="<?php echo $imageInfo["url"]; ?>"></div>
                </div>



                <div class="count-box-right">

                    <div class="count-box-right-yi">
                        <div class="count-box-right-yi-left">
                            <a href="#"  class="count-box-right-yi-left-a"><img src="<?php echo $userinfo["H_portrait"]; ?>" /></a>
                        </div>
                        <div class="count-box-right-yi-right">
                            <a><?php echo $userinfo["username"]; ?></a><br />
                            <span style="color: #6B6B72;">发布于</span><a><?php echo date("Y.m.d", $imageInfo["date"]); ?></a>
                        </div>
                    </div>
                    
                    <?php foreach($commentList as $ck=>$cv){ ?>
                    <div class="count-box-right-er">
                        <div class="count-box-right-er-1">
                            <?php
                            $sql="select * from user where id={$cv["uid"]}"; 
                                $result= mysqli_query($con, $sql);
                                $info=array();
                                if($result){
                                    $info= mysqli_fetch_assoc($result);
                                }
//                                var_dump($info);                                die();
                            ?>
                          
                            
                            
                            <div class="count-box-right-er-1-img">
                                <img src="<?php  if($info["H_portrait"]==""){echo "img/icon1.jpg";}else{ echo $info["H_portrait"];} ?>" >
                            </div>
                            <span><a><?php echo $info["username"]; ?></a></span>
                            <a><?php date("Y年m月d月",$cv["date"]) ?></a>
                            <div class="count-box-right-er-1-pinglun">
                                    <?php echo $cv["conent"]; ?>
                            </div>

                        </div>
                    </div>
                    <?php } ?>
                    <div class="count-box-right-san">
                        <div class="count-box-right-san-a">
                            <a><</a><a>1</a><a>></a>
                        </div>
                        <form>
<!--                            <input type="text" class="count-box-right-san-text" />-->
                            <textarea class="count-box-right-san-text" id="text1"></textarea>
                                
                            <input type="submit" class="count-box-right-san-tijiao" value="评论"  id="count-box-right-san-tijiao"/>	
                        </form>
                    </div>
                </div>
            </div>

        </div>









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
<!--<script type="text/javascript" src="js/dengluzhuce.js"></script>-->
<script type="text/javascript">
    
    
    
    
    
    
     
//                        var denglu = document.getElementById("denglu");
//                        var guan = document.getElementById("guan");
//                        var da = document.getElementById("dada");
//
//                        var like = denglu2 = document.getElementById("likelike");
//                收藏

<?php if ($user == null) { ?>
        //                            like.onclick = function () {
        //                                da.style.display = "block";
        //                                denglu.style.display = "block";
        //
        //                            }
        //                            
        $("#likelike").click(function () {
            $("#dada").css("display", "block");
            $("#denglu").css("display", "block");
        });
        $("#count-box-right-san-tijiao").click(function(){
                $("#dada").css("display", "block");
            $("#denglu").css("display", "block");
        });

<?php } else { ?>
        
        //收藏操作
       var isLike=true;
        if(isLike){
        $("#likelike").click(function () {
            var uid =<?php echo $_COOKIE["user_id"]; ?>;
            var iid =<?php echo $id ?>;
            $.ajax({
                type: "post",
                url: "like.php",
                data: {uid: uid, iid: iid},
                success: function (data) {
                    if (data.status == 1) {
                        $("#dada").css("display", "block");
                        $("#denglu").css("display", "block");
                    } else if (data.status == 2) {
                        swal(data.msg, "", "error");
                    } else {
                       
                        $("#likelike").css("background-color","rgba(0,0,0,0.30)");
//                       history.go(0);//刷新页面
                        isLike=false;
                    }
                }
            });
                
        });
       
}


        $("#count-box-right-san-tijiao").click(function(){
                var uid =<?php echo $_COOKIE["user_id"]; ?>;
            var iid =<?php echo $id ?>;
            var text1=$("#text1").val();
            if(text1==""){
                swal("请输入评论内容", "", "error");
            }
            else{
                $.ajax({
                type: "post",
                url: "pinglun.php",
                data: {uid: uid, iid: iid,text1:text1},
                success: function (data) {
                    if (data.status == 1) {
                        $("#dada").css("display", "block");
                        $("#denglu").css("display", "block");
                    } else if (data.status == 2) {
                        swal(data.msg, "", "error");
                    } else {
//                       alert("评论成功");
                           history.go(0);//刷新页面
               
                    }
                }
            })
            }
        });

        

<?php } ?>









    var denglu = document.getElementById("denglu");
    var guan = document.getElementById("guan");
    var guan2 = document.getElementById("guan2");
    var da = document.getElementById("dada");
    var da1 = document.getElementById("da1");

    var zhuce1 = document.getElementById("zhuce");
    //               第二个导航 


    var dl2 = document.getElementById("dl2");
    var zl2 = document.getElementById("zl2");
    dl2.onclick = function () {
        da.style.display = "block";
        denglu.style.display = "block";
    }
    guan.onclick = function () {
        denglu.style.display = "none";
        da.style.display = "none";
    }


    zl2.onclick = function () {
        da1.style.display = "block";
        zhuce1.style.display = "block";
    }
    guan2.onclick = function () {
        zhuce1.style.display = "none";
        da1.style.display = "none";
    }




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