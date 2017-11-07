<?php
//清除cookie


setcookie("user_id","",time()-1);
setcookie("user_name","",time()-1);
echo"<script>self.location=document.referrer;</script>";
