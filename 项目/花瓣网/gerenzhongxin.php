
<?php
$con = mysqli_connect("localhost", "root", "root", "huaban");
if(!$con){
    echo "连接失败！！";die();
}
mysqli_set_charset($con, "utf8");
//判断是否登陆
$userinfo =array();
if(isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] >0){
    //用户登录状态
    //获取用户信息
    $sql ="select * from user where id=".$_COOKIE["user_id"];
    $result = mysqli_query($con, $sql);
    if($result){
        $userinfo = mysqli_fetch_assoc($result);
    }
}


//判断是否登陆未登录直接跳转
if(!isset($_COOKIE["user_id"]) || $_COOKIE["user_id"] <1){
    echo "<script>window.location.href='index.php';</script>";
    exit();
    
}


/*----------------------查询用户信息---------------------*/
$id = $_COOKIE["user_id"];
$sql1 = "select * from user where id={$id}";
$result = mysqli_query($con, $sql1);
$userinfo = array();
if($result){
    $userinfo = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="css/gerenzhongxin.css" />
                 <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
                 <link rel="stylesheet" href="css/sweet-alert.css" />
                 <script src="js/sweet-alert.min.js" type="text/javascript"></script>
	</head>

	<body style="background-color:#FAFAFA ;">
		<!--导航栏-->
		<div id="hearder-box">
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
                                        <a href="geren2.html">我的收藏</a>
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
		<div id="count-xinxi">
			<div class="count-xinxi-shang">
                            <?php if($userinfo["H_portrait"]==""){ ?>
				<div class="count-xinxi-shang-yuan"   style="background-image:url(img/icon1.jpg);"></div>
                                <?php }else{ ?>
                                <div class="count-xinxi-shang-yuan"  style="background-image:url(<?php echo $userinfo["H_portrait"]; ?>);"></div>
                                <?php }?>
				<div class="count-xinxi-shang-a">
					<a><?php echo $userinfo["username"]; ?></a>
				</div>
			</div>
			<div class="count-xinxi-xia">
				<a class="count-xinxi-xia-a1">个人信息</a>
				<a class="count-xinxi-xia-a2">我的收藏</a>
			</div>

			<div class="count-xinxi-xinxi">
				<p>登录名：</p>
				<a class="a1"><?php echo $userinfo["username"]; ?></a>
<!--				<a class="aa1">修改</a>-->
				<hr />
				<p>密码：</p>
				<a class="a2"><input type="text" name="pwd"></a>
				<a class="aa2 update" name="pwd">修改</a>
				<hr />
				<p>性别：</p>
                                <a class="a3"><input type="radio" name="sex" value="男" <?php if($userinfo["sex"]=="男"){ echo  "checked"; } ?> >男
					<input type="radio" name="sex" value="女" <?php if($userinfo["sex"]=="女"){ echo  "checked"; } ?> >女 </a>
				<a class="aa3 update" name="sex">修改</a>
				<hr />
				<p>头像</p>
				<a class="count-xinxi-xinxi-touxiang">
                                    <?php if($userinfo["H_portrait"]==""){ ?>
                                                <img  id="imageselect" src="img/icon1.jpg">
                                <?php }else{ ?>
                                                <img id="imageselect" src="<?php echo $userinfo["H_portrait"]; ?>">
                               
                                <?php }?>
                                                
                                                
                                                <from action="upload.php" method="post" enctype="multipart/form-data" id="imageform" >
                                                    <input id="imageinput"  type="file" name="image"  style=" width: 100px; height: 100px;"> 
                                                </from>
                                                
                                                
                                </a>
                                <a class="aa4" id="imageupload">修改</a>
					<hr />
					<p>所在地区</p>
                                        <a class="a5"><input type="text"  value="<?php echo $userinfo["city"]; ?>"  name="city" ></a>
					<a class="aa5 update" name="city" >修改</a>
					<hr />
					<p>电话号码</p>
                                        <a class="a6"><input type="text" name="phone" value="<?php echo $userinfo["phone"]; ?>" ></a>
					<a class="aa6 update" name="phone" >修改</a>
					<hr />
					<p>个性签名</p>
                                        <a class="a7"><input type="text" name="brief" value="<?php echo $userinfo["brief"]; ?>"></a>
					<a class="aa7 update" name="brief">修改</a>
					<hr />
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
    ``
    $(".update").click(function(){
       var name=$(this).attr("name");
       if(name=="sex"){
            var val=$("input[name='"+name+"']:checked").val();//单选选择选择状态的按钮
       }
       else{
            var val=$("input[name='"+name+"']").val();
       }
      
       if(val!=""){
           $.ajax({
              type:"get",
              url:"update.php",
              data:{name:name,val:val},
              success:function(data){
                  data=$.parseJSON(data);
                  if(data.statue==1){
                      window.location.href="index.php";
                  }
                  else if (data.status==2){
                      swal(data.msg, "", "error");
                  }
                  else{
                      history.go(0);
                  }
              }
           });
       }
    });
    
    $("#imageselect").click(function(){
        $("#imageinput").click();//点击操作
    });
    $("#imageupload").click(function(){
    
       $("#imageform").submit();//表单提交 
    })
</script>