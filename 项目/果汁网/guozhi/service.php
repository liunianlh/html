
<?php
header('content-type:text/html;charset=utf-8');
//    1.连接数据库
$con = mysqli_connect("localhost", "root", "root", "guozhi");
if (!$con) {
    echo "连接失败";
    die();
}
mysqli_set_charset($con, "utf8");

//--------------------------------服务列表查询数据----------------------------------------
$sql = "select * from services_list limit 0,6";
//查询六条数据
$result = mysqli_query($con, $sql);
$recommendList1 = array();
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $recommendList1[] = $row;
    }
}
//var_dump($recommendList1);
//die();





///--------------------------------特色查询数据----------------------------------------

$sql = "select * from feature_list";
//查询六条数据
$result = mysqli_query($con, $sql);
$classtext = array();
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $classtext[] = $row;
    }
}

//var_dump($classtext);
//die();



?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>服务</title>
		<!--引入头部样式-->
        <link rel="stylesheet" href="css/public_header.css">
        <!--引入底部样式-->
        <link rel="stylesheet" href="css/public_footer.css">
        <link rel="stylesheet" href="css/service.css" />
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
				<div class="header_nav">
					<ul>
						<li>
                                                    <a href="about.php">关于</a>
						</li>
						<li>
                                                    <a href="service.php" style="color: #F696A7;">服务</a>
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
				</div>
				<!--导航-->
			</header>	
	
			<main>
				<div class="mian_header">
				</div>
			      <div class="main_serves">
			      	<div class="main_content">
			      		<div class="main_servesTop">
			      			<div>
			      				<img  src="images/help-img1.png"/>
			      				<p>我们只生产社会主义果汁</p>
			      				<p> 我们位于保定市军校广场，保定有“经济中的”之称，是繁荣城市之一。
									我们位于保定市军校广场，保定有“经济中的”之称，是繁荣城市之一。
									我们位于保定市军校广场，保定有“经济中的”之称，是繁荣城市之一。
			      				</p>
			      			</div>
			      			<div>
			      				<img  src="images/help-img2.png"/>
			      				<p>我们只生产社会主义果汁</p>
			      				<p> 我们位于保定市军校广场，保定有“经济中的”之称，是繁荣城市之一。
									我们位于保定市军校广场，保定有“经济中的”之称，是繁荣城市之一。
									我们位于保定市军校广场，保定有“经济中的”之称，是繁荣城市之一。
			      				</p>
			      			</div>
			      			<div>
			      				<img  src="images/help-img3.png"/>
			      				<p>我们只生产社会主义果汁</p>
			      				<p> 我们位于保定市军校广场，保定有“经济中的”之称，是繁荣城市之一。
									我们位于保定市军校广场，保定有“经济中的”之称，是繁荣城市之一。
									我们位于保定市军校广场，保定有“经济中的”之称，是繁荣城市之一。
			      				</p>
			      			</div>
			      			<div>
			      				<img  src="images/help-img4.png"/>
			      				<p>我们只生产社会主义果汁</p>
			      				<p> 我们位于保定市军校广场，保定有“经济中的”之称，是繁荣城市之一。
									我们位于保定市军校广场，保定有“经济中的”之称，是繁荣城市之一。
									我们位于保定市军校广场，保定有“经济中的”之称，是繁荣城市之一。
			      				</p>
			      			</div>
			      		</div>
                                    <div class="main_servesCenterwai">
                                    <div class="main_servesCenter">
                                                        <div class="top_bottomtitle">
								<div class="top_bottomleft"></div>
								<p>服务列表</p>
								<div class="top_bottomleft"></div>
							</div>
							<p>
								这是一大段文案我也不知道写啥 百度翻译也没
                 				法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把
                 				巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒
                 				睒一起去长白山，飞机上他和我说，他要做一款中国国
                 				家领导人接待外宾时桌子上放的水今天，他做到
                 				了！”钱江晚报记者的朋友圈，前些天有位前辈“
                 				大慰平生”发了这一段文字。这是一大段文案我也不知道写啥 百度翻译也没
                 				法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把
                 				巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒
                 				睒一起去长白山，飞机上他和我说，他要做一款中国国
                 				家领导人接待外宾时桌子上放的水今天，他做到
                 				了！”钱江晚报记者的朋友圈，前些天有位前辈“
                 				大慰平生”发了这一段文字。
							</p>
							<div class="main_serverLi">
							
                                                                                                                         
                                                                   <div>
                                                                       <?php foreach ($recommendList1 as $k=>$v){ ?>  
									<ul>                                                                        
										<li><a><?php echo $v["servies_title"]; ?></a></li>
<!--										 <li><a><?php echo $v["servies_title"]; ?></a></li>                                                                           -->
									</ul>
                                                                         <?php } ?> 
							            </div>
                                                                                                                                                                                       
                                                                    <div>
                                                                       <?php foreach ($recommendList1 as $k=>$v){ ?>  
									<ul>                                                                        
										<li><a><?php echo $v["servies_title"]; ?></a></li>
<!--										 <li><a><?php echo $v["servies_title"]; ?></a></li>                                                                           -->
									</ul>
                                                                         <?php } ?> 
							            </div>
                                                                                                                                
                                                            
                                                                    <div>
                                                                       <?php foreach ($recommendList1 as $k=>$v){ ?>  
									<ul>                                                                        
										<li><a><?php echo $v["servies_title"]; ?></a></li>
<!--										 <li><a><?php echo $v["servies_title"]; ?></a></li>                                                                           -->
									</ul>
                                                                         <?php } ?> 
							            </div>
                                                              
                                                            
<!--								<div>
									<ul>
										<li><a>分尴尬的发的说法是打发生</a></li>
										<li><a>分尴尬的发的说法是打发生</a></li>
										<li><a>分尴尬的发的说法是打发生</a></li>
										<li><a>分尴尬的发的说法是打发生</a></li>
										<li><a>分尴尬的发的说法是打发生</a></li>
										<li><a>分尴尬的发的说法是打发生</a></li>
										<li><a>分尴尬的发的说法是打发生</a></li>
									</ul>
								</div>
								<div>
									<ul>
										<li><a>分尴尬的发的说法是打发生</a></li>
										<li><a>分尴尬的发的说法是打发生</a></li>
										<li><a>分尴尬的发的说法是打发生</a></li>
										<li><a>分尴尬的发的说法是打发生</a></li>
										<li><a>分尴尬的发的说法是打发生</a></li>
										<li><a>分尴尬的发的说法是打发生</a></li>
										<li><a>分尴尬的发的说法是打发生</a></li>
									</ul>
								</div>-->
							</div>
                                    </div>
                                    </div>
                                    
                                    
                                    
			      		<div class="main_servesBottom">
			      			<div class="top_bottomtitle">
								<div class="top_bottomleft"></div>
                                                                <p style="color: black">特色服务</p>
								<div class="top_bottomleft"></div>
							</div>
							<div class="main_servers_bottom">
								<div>
									<span>1</span>
									<div class="main_serversBTM">
										 <?php foreach ($classtext as $k=>$v){ ?>  
                                                                            <p><?php echo $v["feature_title"]; ?></p>
                                                                            <p><?php echo $v["feature_content"]; ?></p>
                                                                                 <?php }?>
									</div>
								</div>
								<div>
									<span>2</span>
									<div class="main_serversBTM">
										 <?php foreach ($classtext as $k=>$v){ ?>  
                                                                            <p><?php echo $v["feature_title"]; ?></p>
                                                                            <p><?php echo $v["feature_content"]; ?></p>
                                                                                 <?php }?>
									</div>
								</div>
								<div>
									<span>3</span>
									<div class="main_serversBTM">
										 <?php foreach ($classtext as $k=>$v){ ?>  
                                                                            <p><?php echo $v["feature_title"]; ?></p>
                                                                            <p><?php echo $v["feature_content"]; ?></p>
                                                                                 <?php }?>
									</div>
								</div>
								<div>
									<span>4</span>
									<div class="main_serversBTM">
										 <?php foreach ($classtext as $k=>$v){ ?>  
                                                                            <p><?php echo $v["feature_title"]; ?></p>
                                                                            <p><?php echo $v["feature_content"]; ?></p>
                                                                                 <?php }?>
									</div>
								</div>
								<div>
									<span>5</span>
									<div class="main_serversBTM">
										 <?php foreach ($classtext as $k=>$v){ ?>  
                                                                            <p><?php echo $v["feature_title"]; ?></p>
                                                                            <p><?php echo $v["feature_content"]; ?></p>
                                                                                 <?php }?>
									</div>
								</div>
								<div>
									<span>6</span>
									<div class="main_serversBTM">
										 <?php foreach ($classtext as $k=>$v){ ?>  
                                                                            <p><?php echo $v["feature_title"]; ?></p>
                                                                            <p><?php echo $v["feature_content"]; ?></p>
                                                                                 <?php }?>
									</div>
								</div>
							</div>
			      		</div>
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
