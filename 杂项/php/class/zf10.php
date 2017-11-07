<html>
    <body>
        <a href="http:www.baidu.com/?name=‘小白&张三’&sex=12&age=20" name="wz" method="get"></a>
    </body>
</html>
<?php
header('content-type:text/html;charset=utf-8');
 echo $_GET["wz"];

