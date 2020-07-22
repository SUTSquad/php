<?php
$m=isset($_COOKIE['user']);
if(!$m)
echo'<form action="logincheck.php" method="post">



用户名：<input type="text" name="username" />



<br />



密码：<input type="password" name="password" />



<br />



<input type="submit" name="submit" value="登陆" />



<a href="regist.php">注册</a>

</form>';
else
echo"欢迎".$_COOKIE['user'];
?>
