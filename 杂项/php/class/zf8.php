<?php

header('content-type:text/html;charset=utf-8');
$url = "http:www.baidu.com/?name=‘小白&张三’&sex=12&age=20";
$canshu = parse_url($url,PHP_URL_PATH ); //获取所有参数
var_dump($canshu);
                  
		

