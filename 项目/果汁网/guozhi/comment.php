<?php
header('content-type:text/html;charset=utf-8');
//    1.连接数据库
$con = mysqli_connect("localhost", "root", "root", "guozhi");
if (!$con) {
    echo "连接失败";
    die();
}
mysqli_set_charset($con, "utf8");


//查询图片的详情
$id = isset($_GET["id"]) ? $_GET["id"] : 1;
$sql = "select * from blog_list where id={$id}";
$result = mysqli_query($con, $sql);
$imageInfo = array();
if ($result) {
    $imageInfo = mysqli_fetch_assoc($result);
}
//var_dump($imageInfo);die();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>博客内部</title>
        <link rel="stylesheet" href="css/public_footer.css" />
        <link rel="stylesheet" href="css/public_header.css" />
        <link rel="stylesheet" href="css/comment.css" /> 
<!--        <script src="js/jquery-3.2.1.min_1.js"></script>-->
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
            <div class="main_details">
                <div class="main_content">
                    <div class="main_detailsnav">
                        <div class="main_detailsleft" id="comment_list">
                            <div><img src="<?php echo $imageInfo["img_url"]; ?>"</div>
                            <p>对于果汁加香草好喝还是加老干妈好喝的评论</p>
                            <div class="main_detailstext">
                                <span>发表于</span>
                                <span>2017年9月10日</span>
                                <p>这是一大段啊上了飞机地洒落开发的手机发拉的手机发送
                                    拉萨附近的撒开了费的时间了放假的萨芬看卡的手机发送的卡拉发
                                    开始打了飞机迪斯科浪费就地洒落开发商的昆仑山搭街坊但是看了
                                    昆仑山搭街坊是独立开发进度顺利康复进度可是大家发多少
                                    第三节课落凡间的撒开了。
                                </p>
                                <p>这是一大段啊上了飞机地洒落开发的手机发拉的手机发送
                                    拉萨附近的撒开了费的时间了放假的萨芬看卡的手机发送的卡拉发
                                    开始打了飞机迪斯科浪费就地洒落开发商的昆仑山搭街坊但是看了
                                    昆仑山搭街坊是独立开发进度顺利康复进度可是大家发多少
                                    第三节课落凡间的撒开了。
                                </p>

                                <p>这是一大段啊上了飞机地洒落开发的手机发拉的手机发送
                                    拉萨附近的撒开了费的时间了放假的萨芬看卡的手机发送的卡拉发
                                    开始打了飞机迪斯科浪费就地洒落开发商的昆仑山搭街坊但是看了
                                    昆仑山搭街坊是独立开发进度顺利康复进度可是大家发多少
                                    第三节课落凡间的撒开了。
                                </p>
                                <div class="userinfo">
                                    <div class="userimg"><img src="images/audi.jpg" /></div>
                                    <div class="userxinxi">
                                        <p>刘赫</p>
                                        <p>卡的十分巨大离开房间地洒落咖啡机地洒落啊深刻搭街坊四道口啦发送大量恺撒奖发生的卡
                                            就地洒落开飞机的撒发生看到啦啊师傅了激动撒法。
                                        </p>
                                        <p>9/25</p>
                                    </div>
                                </div>
                                <div class="userinfo">
                                    <div class="userimg"><img src="images/audi.jpg" /></div>
                                    <div class="userxinxi">
                                        <p>刘赫</p>
                                        <p>卡的十分巨大离开房间地洒落咖啡机地洒落啊深刻搭街坊四道口啦发送大量恺撒奖发生的卡
                                            就地洒落开飞机的撒发生看到啦啊师傅了激动撒法。
                                        </p>
                                        <p>9/25</p>
                                    </div>
                                </div>
                                
                                <div class="userinfo">
                                    <div class="userimg"><img src="images/audi.jpg" /></div>
                                    <div class="userxinxi">
                                        <p>刘赫</p>
                                        <p>卡的十分巨大离开房间地洒落咖啡机地洒落啊深刻搭街坊四道口啦发送大量恺撒奖发生的卡
                                            就地洒落开飞机的撒发生看到啦啊师傅了激动撒法。
                                        </p>
                                        <p>9/25</p>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="main_detailsright">
                        <p>相关文章</p>
                        <div class="main_detailsrightimg">
                            <div class="usertwoImg">
                                <img src="images/team-2.jpg" />
                            </div>
                            <div class="usertwoxinxi">
                                <p>我们只生产有中国特色社会主义的好果汁。</p>
                                <p>啊附件是的浪费大家发了的萨芬是大力开发建设大力开发的啥防撒

                                </p>
                            </div>
                        </div>
                        <div class="main_detailsrightimg">
                            <div class="usertwoImg">
                                <img src="images/team-2.jpg" />
                            </div>
                            <div class="usertwoxinxi">
                                <p>我们只生产有中国特色社会主义的好果汁。</p>
                                <p>啊附件是的浪费大家发了的萨芬是大力开发建设大力开发的啥防撒

                                </p>
                            </div>
                        </div>
                        <div class="main_detailsrightimg" id="content_main">
                            <div class="usertwoImg">
                                <img src="images/team-2.jpg" />
                            </div>
                            <div class="usertwoxinxi">
                                <p>我们只生产有中国特色社会主义的好果汁。</p>
                                <p>啊附件是的浪费大家发了的萨芬是大力开发建设大力开发的啥防撒
                                    赖咖啡碱ADSL看动法斯大林付款的沙发独守空房收到了发
                                    课件的撒福克斯的 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main_detailsbottom">
                    <textarea class="textarea" placeholder="请输入评论内容！！" id="comment"></textarea>
                    <div class="subt" id="pl-btn">
                        提交
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
<script type="text/javascript">

    $('#pl-btn').click(function () {

        var text = $('#comment').val();
        if (text === '') {
            alert('请先输入评论内容!');
        } else {
            $.ajax({
                type: "post",
                url: "addcomment.php",
                data: {
                    comment: $('#comment').val(),
                },
                success: function (data) {
                    data =$.parseJSON(data);
                    if(data.status){
                        var comment=data.data.comment;
                        var date=data.data.date;
                        var str='<div class="userinfo"><div class="userimg"><img src="images/audi.jpg" /></div><div class="userxinxi"><p>刘赫</p><p>'+comment+'</p><p>'+date+'</p></div></div>';
                           $("#comment_list").append(str);
                            }
                    else{
                        alert(data.msg);
                    }


                }
            });
        }
    });



</script>
