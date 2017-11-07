<?php 
    //    1.连接数据库
$con = mysqli_connect("localhost", "root", "root", "huaban");
if (!$con) {
    echo "连接失败";
    die();
}
mysqli_set_charset($con, "utf8");

$id= isset($_GET["id"])?$_GET["id"]:1;


//查询当前分类信息
$sql="select * from classify where id={$id}";

$result= mysqli_query($con, $sql);
$classInfo=array();
if($result){
    $classInfo= mysqli_fetch_assoc($result);
}





//分页
$page = isset($_GET["page"]) ? $_GET["page"] : 1; //当前页数


//每页条数
$num = 4;

$start = ($page - 1) * $num;
$sql = "select * from image where cid={$id} limit {$start},{$num}";

$result = mysqli_query($con, $sql); 
$imagelist = array();
if (!$result) {
    $imagelist = array();
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        $imagelist[] = $row;
    }
}


//总页数
$sql = "select count(*) as c from image where cid={$id}";
//echo $sql;
//die();
$reusult = mysqli_query($con, $sql);
$count=0;
if ($reusult) {
    $row= mysqli_fetch_assoc($reusult);
    $count = $row["c"];
//    echo $count;die();
}
$countpage = ceil($count / $num);









//获取所有分类信息
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

//分类的内容
//$sql="select * from image where cid={$id}";
//$result= mysqli_query($con, $sql);
//$imagelist=array();
//if($result){
//    while ($row= mysqli_fetch_assoc($result)){
//        $imagelist[]=$row;
//    }
//}

 


?>




<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="css/liebiao.css" />
		<link rel="stylesheet" href="css/dengluzhuce.css" />
        <link rel="stylesheet" href="css/sweet-alert.css" />
        <script src="js/dengluzhuce.js" type="text/javascript"></script>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/sweet-alert.min.js" type="text/javascript"></script>

	</head>
	<body>
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
					<form action="" >
                                            <input type="text" pla  accept=""ceholder="搜索你喜欢的内容" class="box-left-input" />
						<span class="box-left-input-img"></span>
					</form>
				</div>
				<div class="box-right">
					<a href="javescript:;" class="right_a1" id="dl">登录</a>
                                        <a href="javescript:;" class="right_a2" id="zl">注册</a>
				</div>
		</div>
		</div>
		
		
        <!--头部背景-->
        <div class="header">
		<div class="header-toubu">
                            
		<div id="header-toubu-text">
                     <?php if($classInfo!=null) {?>
			<span class="span1">
                           <?php echo $classInfo["name"];?>
                        </span><br /><br />
			<span class="span2">
                            <?php echo $classInfo["brief"];?>
                        </span><br />
                        <?php }?>
			<span class="span3">Ta们已关注</span>
			<div class="header-toubu-text-yuan">
				<div><img src="img/list_icon1.jpg"></div>
				<div><img src="img/list_icon2.jpg"></div>
				<div><img src="img/list_icon3.jpg"></div>
				<div><img src="img/list_icon4.jpg"></div>
				<div><img src="huaban/images/list_icon5.jpg"></div>
			</div>
		</div>
		</div>
		</div>
		
		<div class="all_look">
					<a>为您推荐</a>
		</div>
		
		
		
		<!--中部第一部分-->
		<div id="count-zong">
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
		
		<!--中部第二部分-->
		<div id="count">
			<div class="zhong clearbox">
                         
                            <?php foreach ($imagelist as $k=>$v){ ?>
                            <div class="zhong-yi">
				<div class="zhong-yi-1" >
                                       <a href="xiangxi.php?id=<?php echo $v["id"];?>">
					<img src="<?php echo $v["url"]; ?>" />
                                       </a>

				</div>
				<div class="zhong-yi-2">
					<span><?php $v["name"]; ?></span>
				</div>
                                <?php  
                                    $userinfo=array();
                                    $sql="select * from user where id ={$v["uid"]}";
                                    $result= mysqli_query($con, $sql);
                                    if($result){
                                        $userinfo= mysqli_fetch_assoc($result);
                                    }
                                
                                
                                ?>
                                
				<div class="zhong-yi-3">
					<div class="zhong-yi-3-yuan">
						<img src="<?php echo $userinfo["H_portrait"]; ?>" />
					</div>
					<div class="zhong-yi-3-text">
                                            <p>来自<span><?php echo $userinfo["username"]; ?></span>的收藏</p>
						<p><?php echo date("Y-m-d",$v["date"]);?></p>
					</div>
				</div>
                            </div>
						
				
                            <?php }?>
		
		
		</div>
		
		
		
		<!--分页-->
		<div class="fenye">
                    <?php if($page>1) { ?>
                    <a href="liebiao.php?page=<?php echo $page-1;?>&id=<?php echo $id;?>"><</a>
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
                        <a href="liebiao.php?page=<?php echo $i; ?>&id=<?php echo $id; ?>" class="a"><?php echo $i; ?></a>
                    <?php } else { ?>
                        <a href="liebiao.php?page=<?php echo $i; ?>&id=<?php echo $id; ?>"><?php echo $i; ?></a>
                    <?php } ?>
                <?php } ?>
                    
                    
                 
                    <?php if($page<$countpage){ ?>
                    <a href="liebiao.php?page=<?php echo $page-1;?>&id=<?php echo $id;?>">></a>
                    <?php }?>
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
		</div>
		
		<div class="da" id="dada">
			<div id="denglu">
				<div id="guan">X</div>
				<div class="img1"><img src="img/logo1.png"></div><br />
				<span class="span1">使用第三方账号登录</span>
				<div class="img2"><img src="img/ananan.png"></div><br />
				<span class="span2">使用账号密码登录</span>
				<form action="" method="post">
				<input type="text" placeholder="输入花瓣网账号" class="denglu-input1" />
				<input type="text" placeholder="输入密码" class="denglu-input2" />
				<input type="submit" value="登录" class="denglu-input3"/>
				</form>
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
				<form action="" method="post">
				<input type="text" placeholder="字母开头字母数字组合6-11位" class="zhuce-input1" />
				<input type="text" placeholder="字母数字下划线组合8-15位" class="zhuce-input2" />
				<input type="text" placeholder="请输入验证码" class="zhuce-input3"/>
				<!--验证码-->
				<div></div>
				<input type="submit" value="注册" class="zhuce-input4" />
				</form>
			</div>
		</div>	
	</body>
<script type="text/javascript" src="js/dengluzhuce.js"></script>
	
</html>
