<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		   <!--引入头部样式-->
        <link rel="stylesheet" href="css/public_header.css">
               <!--引入底部样式-->
        <link rel="stylesheet" href="css/public_footer.css">
		 <link rel="stylesheet" href="./css/video.css">
		  <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="./js/video_php.js"></script>
          <script type="text/javascript" src="./js/video.js"></script>
          
        <script type="text/javascript" src="./js/jindutiao.js"></script>
        
        <link href="css/zzsc.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js"></script>
        <script src="js/zzsc.js"></script> 
		<title>视频</title>
	</head>
	<body>
	<!--<div id="container">-->
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
                                                    <a href="about.php">关于</a>
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
                                                    <a href="video.php" style="color: #F696A7;">视频</a>
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
				<div class="mian_header">
				</div>
				<div style="text-align: center;font-size: 26px; ">视频</div>
			<div id="container">
            <div id="main">
                <video id="video">
                    <source src="./video/video.flv">
                </video>
                <div id="controls">
                    <div id="controls_play"></div>
                    <div id="controls_play_time">0:00:00</div>
                    <div id="controls_play_bar"></div>
                    <div id="controls_duration_time">0:00:00</div>
                    <div id="controls_volume">
                        <div id="controls_volume_img"><img id="controls_volume_img_tupian" src="./images/Speaker_louder.png"></div>
                       
                        <div id="controls_volume_controls" style="display: none;">
                           <div id="controls_volume_bar"></div>
                           <div id="controls_volume_triangle"></div>
                        </div>
                        
                    </div>
                    <div id="controls_full_screen">
                        <img src="./images/fullscreen.png"/>
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
		<!--</div>-->
		
	</body>
</html>
