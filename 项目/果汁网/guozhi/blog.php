<?php
header('content-type:text/html;charset=utf-8');
//    1.连接数据库
$con = mysqli_connect("localhost", "root", "root", "guozhi");
if (!$con) {
    echo "连接失败";
    die();
}
mysqli_set_charset($con, "utf8");


//--------------------------------------查询三条数据----------------------------===
//$sql = "select * from blog_list limit 0,3";
////查询三条数据
//$result = mysqli_query($con, $sql);
//$recommendList = array();
//if ($result) {
//    while ($row = mysqli_fetch_assoc($result)) {
//        $recommendList[] = $row;
//    }
//}
//var_dump($recommendList);die();
//---------------------------------------分页------------------------------------------
//分页
$page = isset($_GET["page"]) ? $_GET["page"] : 1; //当前页数
//每页条数
$num = 3;

$start = ($page - 1) * $num;
$sql = "select * from blog_list limit {$start},{$num}";

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
$sql = "select count(*) as c from blog_list";
//echo $sql;
//die();
$reusult = mysqli_query($con, $sql);
$count = 0;
if ($reusult) {
    $row = mysqli_fetch_assoc($reusult);
    $count = $row["c"];
//    echo $count;die();
}

$countpage = ceil($count / $num);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>博客</title>
        <!--引入头部样式-->
        <link rel="stylesheet" href="css/public_header.css">
        <!--引入底部样式-->
        <link rel="stylesheet" href="css/public_footer.css">
        <link rel="stylesheet" href="css/blog.css" />
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
                        <a href="service.php">服务</a>
                    </li>
                    <li>
                        <a href="blog.php" style="color: #F696A7;">博客</a>
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
            <div class="main_top">

                <div class="main_top_count">
                    <h2>博客</h2>

<?php foreach ($imagelist as $k => $v) { ?>
                        <div class="main_top_count_top">
                            <div class="main_top_count_top_header">
                                <a href="comment.php?id=<?php echo $v["id"]; ?>">
                                    <img src="<?php echo $v["img_url"]; ?>" />
                                </a>
                            </div>
                            <div class="main_top_count_top_bottom">
                                <div class="main_top_count_top_bottom_text"><?php echo $v["blog_title"]; ?></div>
                                <div class="main_top_count_top_bottom_text2"><p><?php echo $v["blog_content"]; ?></p></div>
                                <a href="" data-content="了解更多">了解更多</a>
                            </div>
                        </div>
<?php } ?>
                    <!--							<div class="main_top_count_top">
                                                                                    <div class="main_top_count_top_header">
                                                                                            <img src="images/b2.jpg" />
                                                                                    </div>
                                                                                    <div class="main_top_count_top_bottom">
                                                                                            <div class="main_top_count_top_bottom_text">我们只生产全世界最优质水果的果汁</div>
                                                                                            <div class="main_top_count_top_bottom_text2"><p>为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。</p></div>
                                                                                            <a href="" data-content="了解更多">了解更多</a>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="main_top_count_top">
                                                                                    <div class="main_top_count_top_header">
                                                                                            <img src="images/b3.jpg" />
                                                                                    </div>
                                                                                    <div class="main_top_count_top_bottom">
                                                                                            <div class="main_top_count_top_bottom_text">我们只生产全世界最优质水果的果汁</div>
                                                                                            <div class="main_top_count_top_bottom_text2"><p>为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。</p></div>
                                                                                            <a href="" data-content="了解更多">了解更多</a>
                                                                                    </div>
                                                                            </div>-->


                    <!--   ------------------------- -----------------------------------------------------------------------------分页-------------------------------------------------->
                    <ul>
<?php if ($page > 1) { ?>
                            <li><a href="blog.php?page=<?php echo $page - 1; ?>">上一页</a></li>
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
                                <li><a href="blog.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php } else { ?>
                                <li><a href="blog.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php } ?>
                        <?php } ?>

                        <?php if ($page < $countpage) { ?>
                            <li><a href="blog.php?page=<?php echo $page +1; ?>">下一页</a></li>
                        <?php } ?>
                    </ul>
                    <!------------------- -----------------------------------------------------------------------------分页-------------------------------------------------->
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
