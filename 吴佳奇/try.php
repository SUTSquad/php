<?php
if(isset($_COOKIE["name"])==0)
{       echo "注册成功，已登录";
        setcookie("user",$_POST['fname'],time()+3600);
}
else
{echo "已登录，无需登录";}


?>
