<!DOCTYPE html>
<?php
session_start();
// 存储 session 数据

if(isset($_SESSION['viewstime'])==0)
        $_SESSION['viewstime']=1;
else
        $_SESSION['viewstime']++;
echo "该网站你已经访问".$_SESSION['viewstime'].'次'."<br>";
?>
<html>

<head>

<meta charset="utf-8">

<title>登录尝试</title>

</head>

<body>
<?php
$q=isset($_COOKIE["user"]);

if($q==0){
echo    '<form action="try.php" method="post">

名字: <input type="text" name="fname">

年龄: <input type="text" name="age">

<input type="submit" value="提交">

</form>';
}

if($q!=0)
{
echo" hello".$_COOKIE["user"]."是否要退出登录？";
echo '<form action="try2.php" method="get"> 

    <select name="q">

    <option value=""选择>:</option>

    <option value="1">是</option>

    

    <option value="0">否</option>

    </select>

    <input type="submit" value="提交">

    </form>';
}
?>

</body>

</html>
