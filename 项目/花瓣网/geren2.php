<?php
//判断用户是否登录
if (!isset($_COOKIE["user_id"]) || $_COOKIE["user_id"] < 1) {
    echo "<script>window.location.href='index.php'</script>";
    exit();
}

$id = $_COOKIE["user_id"];


//查询用户信息
$con = mysqli_connect("localhost", "root", "root", "huaban");
if (!$con) {
    echo "连接失败";
    die();
}
mysqli_set_charset($con, "utf8");

//当前用户登录信息
$sql = "select * from user where id={$id}";
$result = mysqli_query($con, $sql);
if ($result) {
    $userinfo = mysqli_fetch_assoc($result);
}

//调取用户收藏的id数据
$sql = "select iid from collection where uid={$id}";
$result = mysqli_query($con, $sql);
$iid = array();
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $iid[] = $row["iid"];
    }
}


$iid = array_unique($iid);
$iidstr = implode(",",$iid);
$sql = "select *from image where id in({$iidstr})";
$result = mysqli_query($con, $sql);
$list = array();
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list[] =$row;
    }
}
//var_dump($list);
//die();
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>个人收藏</title>
        <link rel="stylesheet" href="css/geren2.css" />
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
           <script src="js/sweet-alert.min.js" type="text/javascript"></script>
           <link rel="stylesheet" href="css/sweet-alert.css" />
    </head>
    <body style="background-color:#FAFAFA ;">
        <!--导航栏-->
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

                    <input type="text" placeholder="搜索你喜欢的内容" class="box-left-input" />
                    <span class="box-left-input-img"></span>

                </div>
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
            </div>
        </div>

        <!--头部背景-->
        <div id="bander-img">
        </div>

        <!--个人信息-->
        <div class="count-xinxi-shang">
<?php if ($userinfo["H_portrait"] == "") { ?>
                <div class="count-xinxi-shang-yuan"   style="background-image:url(img/icon1.jpg);"></div>
            <?php } else { ?>
                <div class="count-xinxi-shang-yuan"  style="background-image:url(<?php echo $userinfo["H_portrait"]; ?>);"></div>
            <?php } ?>
            <div class="count-xinxi-shang-a">
                <a><?php echo $userinfo["username"]; ?></a>
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
                        <div class="zhong-yi-3">
                            <div class="zhong-yi-3-yuan">
                                
                            
                                
                                
                                
                                
                                
                                 <?php if ($userinfo["H_portrait"] == "") { ?>
                                    <img src="img/icon1.jpg"   >
                                <?php } else { ?>
                                    <img src="<?php echo $userinfo["H_portrait"]; ?>" >
                                <?php } ?>
                                    
                                    
                            </div>
                            <div class="zhong-yi-3-text">
                                <p>来自<?php echo $userinfo["username"]; ?>的收藏</p>
                                <p><?php echo date("Y-m-d", $v["date"]);?></p>
                            </div>
                        </div>

                </div>
                <button class="zhong-yi-span" value="<?php echo $v["id"]?>" >删除</button>
                
<?php } ?> 


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
    </body>
</html>

<script type="text/javascript">
$(".zhong-yi-span").click(function(){
        var uid = <?php echo $_COOKIE["user_id"];?>;
        var iid = $(this).val();
    
           $.ajax({
               type:"get",
               url:"delect.php",
               data:{uid:uid,iid:iid},
               success:function(data){
                  data = $.parseJSON(data);
                 if(data.status == 1){
                     window.location.href = "index.php";
                }
                else if(data.status == 2){
                    swal(data.msg,"","error")
                }
                else{
                    swal("删除成功！","","success")
                    history.go(0);
                }
           }  
       })
   
   });
</script>