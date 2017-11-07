<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>联系</title>
		   <!--引入头部样式-->
        <link rel="stylesheet" href="css/public_header.css">
        <!--引入底部样式-->
        <link rel="stylesheet" href="css/public_footer.css">
        <link rel="stylesheet" href="css/contact.css" />
        <link href="css/zzsc.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js"></script>
        <script src="js/zzsc.js"></script> 
<!--       <script type="text/javascript" src = 'http://webapi.amap.com/maps?v=1.4.0&key=您的JS API开发者Key'></script>-->
<script type="text/javascript">
      var map = new AMap.Map('mapDiv', {
         mapStyle: 'amap://styles/地图样式ID'//样式URL
     });
</script>
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
                                                    <a href="contact.php" style="color: #F696A7;">联系</a>
						</li>
					</ul>
				</div>
				<!--导航-->
			</header>
			<main>
				<div class="mian_header">
				</div>
				<div class="mian_count">
					<h2>联系我们</h2>
					<div class="mian_count_left">
                                            <form action="information.php" method="get" >
							<p>你的名字</p>
                                                        <input placeholder="请输入您的真实姓名" required class="mian_count_left_input" name="name"/>
							<p>你的电子邮箱</p>
                                                        <input type="email" placeholder="请输入您的真实邮箱" required class="mian_count_left_input" name="email"/>
							
							<p>你的意见</p>
                                                        <input type="text" placeholder="请输入您的真实意见" required class="mian_count_left_input1" name="text"/>
							<br />
                                                        <input type="submit"value="提交"  class="mian_count_left_submit" name="submit"/>
						</form>
					</div>
					<div class="mian_count_right">
						<div class="mian_count_right-span"><span>我们的位置</span></div>
						<div class="mian_count_right-span2"><span>什么我们只生为了这个目标，我们为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们</span>
						<div class="mian_count_right-span3"><span>什么我们只生为了这个目标，我们为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，只生为了这个目标，我们为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁最优质的果汁，为了这个目标，我们</span></div>
						</div>
						<div class="mian_count_right-ul">
							<ul>
								<li>保定市 莲池区</li>
								<li>东风东路</li>
								<li>999号</li>
							</ul>
							<ul class="mian_count_right-ul2">
								<li>Text+1234-345-666</li>
								<li>Text+1234-345-666</li>
								<li>Email:www.liuchichi.top</li>
							</ul>
						</div>
					</div>
                                        <div class="mian_count_bottom" id="mapDiv">
						
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
<!--<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");    // 创建Map实例
	map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);  // 初始化地图,设置中心点坐标和地图级别
	map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
	map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
</script>-->
<script type="text/javascript" src = 'http://webapi.amap.com/maps?v=1.4.0&key=amap://styles/f948df159e55a6b9defb15cbcf6d9f65'></script>
<script type="text/javascript">
      var map = new AMap.Map('mapDiv', {
         mapStyle: 'amap://styles/normal',//样式URL
         zoom: 12,
        center: [115.48, 38.87]
         
     });
</script>
