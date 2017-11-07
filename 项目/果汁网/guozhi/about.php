<?php
//    1.连接数据库
$con = mysqli_connect("localhost", "root", "root", "guozhi");
if (!$con) {
    echo "连接失败";
    die();
}
mysqli_set_charset($con, "utf8");
//获取图片路径
$sql = "select img_url from about";
$result = mysqli_query($con, $sql);
$recommendList = array();
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $recommendList[] = $row;
//        存到数组
    }
}



//var_dump($recommendList);
//die();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>关于</title>
		   <!--引入头部样式-->
        <link rel="stylesheet" href="css/public_header.css">
        <!--引入底部样式-->
        <link rel="stylesheet" href="css/public_footer.css">
        <link rel="stylesheet" href="css/about.css" />
        <link href="css/zzsc.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js"></script>
        <script src="js/zzsc.js"></script> 
	</head>
	<body>
		<header>
				<!--顶部信息-->
				<div class="header_top">
					<div class="header_top_tenet">我们不生产果汁只是果汁的搬运工</div>
					<div class="header_top_phone">外卖电话：+0646-784-900</div>
					<div class="header_top_logo">
						<ul>
							<li>
								<a href=""></a>
							</li>
							<li>
								<a href=""></a>
							</li>
							<li>
								<a href=""></a>
							</li>
							<li>
								<a href=""></a>
							</li>
						</ul>
					</div>
				</div>
				<!--顶部信息-->

				<!--导航-->
				<nav class="header_nav">
					<ul>
						<li>
                                                    <a href="about.php" style="color: #F696A7;">关于</a>
						</li>
						<li>
                                                    <a href="service.php">服务</a>
						</li>
						<li>
                                                    <a href="blog.php">博客</a>
						</li>
						<a href="index.html">
							<li>
						<img src="images/logo.png">
							</li>
						</a>
						<li>
                                                    <a href="video.php">视频</a>
						</li>
						<li>
                                                    <a href="gallery.php">画廊</a>
						</li>
						<li>
							<a href="contact.php">联系</a>
						</li>
					</ul>
				</nav>
				<!--导航-->
			</header>	
			<main>
				<!--内容头部图片-->
					<div class="mian_header">
					</div>
				<!--内容第一部分-->
					<div class="mian_header_top">
						<div class="mian_header_top_left">
						<!--第一部分左边背景图-->
						</div>
						<div class="mian_header_top_right">
							<strong>关于我们</strong>
							<h4>我们只生产有中国特色社会主义的果汁</h4>
							<p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。 矿泉水，早已经是人们日常生活中最常消费的饮品，即便顶尖规格的会议中也少不了它的身影。一瓶水的方寸之间，能做出什么样的文章？在刚刚过去的G20杭州峰会期间，频频出现在镜头里的农夫山泉给出了这么一个答案：质量、设计、细节的追求，“毫升”之间的匠心独运。</p>
<p>连农夫山泉总裁办公室主任钟晓晓也感到意外，在全世界媒体对G20杭州峰会每一处细节都不放过的报道之中，在主会场、茶歇区、新闻中心、各大接待酒店以及国宴餐桌上，都能看到农夫山泉饮品的身影作为G20杭州峰会的工作和厨房用水的农夫山泉倒突然有了几分“网红”的待遇。</p>
						</div>
					</div>
				<!--内容第二部分-->
					<div class="mian_header_two">
						<h2>我们的团队</h2>
						<div class="mian_header_two_img">
						 <?php foreach ($recommendList as $k=>$v){ ?>
                                                    <div class="parent" style="background-image:url(<?php echo $v["img_url"];?>);">
           							 <div class="mask"></div>
                                                        </div>
                                            
<!--                                                    
							<div class="parent" style="background-image:url(images/team-2.jpg);">
           							 <div class="mask"></div>
                                                        </div>
							<div class="parent" style="background-image:url(images/team-3.jpg);">
           							 <div class="mask"></div>
                                                        </div>
							<div class="parent" style="background-image:url(images/team-4.jpg);">
           							 <div class="mask"></div>
                                                        </div>-->
                                                 <?php }?>
						</div>
					</div>
				<!--内容第三部分-->
					<div class="mian_header_three">
					<div class="mian_header_three_left">
						
						<div class="mian_header_three_left_1">
							<h2>我们的优势</h2>
							<div class="mian_header_three_left_1_img">1</div>
							<div class="mian_header_three_left_1_span"><span>我们只生产有中国特色社会主义的果汁</span></div>
							<div class="mian_header_three_left_1_text"><span>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜“一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！</span></div>
						</div>
						<div class="mian_header_three_left_1">
							<div class="mian_header_three_left_1_img">2</div>
							<div class="mian_header_three_left_1_span"><span>我们只生产有中国特色社会主义的果汁</span></div>
							<div class="mian_header_three_left_1_text"><span>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜“一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！</span></div>
						</div>
						<div class="mian_header_three_left_1">
							<div class="mian_header_three_left_1_img">3</div>
							<div class="mian_header_three_left_1_span"><span>我们只生产有中国特色社会主义的果汁</span></div>
							<div class="mian_header_three_left_1_text"><span>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜“一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！</span></div>
						</div>
					</div>
					<div class="mian_header_three_right">
						<div class="mian_header_three_right_one">
							<h2>我们的技能</h2>
						</div>
						<div class="mian_header_three_right_two">
							<span>我们只生产有中国特色社会主义的果汁</span>
						</div>
						<div class="mian_header_three_right_three">
							<span>这是一大段文案我也不知道写啥百度翻译也没法翻译反正就是不会写巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。矿泉水，早已经是人们日常生活中最常消费的饮品，即便顶尖规格的会议中也少不了它的身影。一瓶水的方寸之间，能做出什么样的文章？在刚刚过去的G20杭州峰会期间，频频出现在镜头里的农夫山泉给出了这么一个答案：质量、设计、细节的追求，“毫升”之间的匠心独运</span>
						</div>
						<ul>
							<li>这是一个li动画</li>
							<li>这是一个li动画</li>
							<li>这是一个li动画</li>
							<li>这是一个li动画</li>
						</ul>
					</div>
					</div>
                                <a href="#0" class="cd-top">Top</a>
			</main>
		<footer>
				<div id="footer_count">	
			<div class="footer_top">
				<div class="footer_top1">
					<span>地址</span>
					<ul>
						<li>保定市 莲池区</li>
						<li>东风东路</li>
						<li>999号</li>
						<li>营业时间：Mon-Fri 9am - 6pm</li>
					</ul>
				</div>
				<div class="footer_top2">
					<span>地址</span>
					<ul>
						<li>Tel: +1234-567-890</li>
						<li>Fax: +1646-216-9789</li>
						<li>Email: info@yourdomain.com</li>
					</ul>
				</div>
				<div class="footer_top3">
					<span>SEARCH</span>
					<div class="footer_top3_yi">
						<input type="text" />
						<img src="images/fdj.png"/>
					</div>
				</div>
				<div class="footer_top4">
				<h1>
				<a href="">FRUIT CRUDH</a>
				</h1>
				</div>
				
			</div>	
			<div class="footer_bottom">
				<span>Copyright © 2015.Company name All rights reserved</span>
			</div>
			</div>
			</footer>
			
	</body>
</html>
