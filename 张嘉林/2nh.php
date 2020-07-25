<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>你好！</title>
</head>
<body>
<?php     
$_SESSION['xm']=$_GET["xm"];
$_SESSION['xh']=$_GET["xh"];
echo "你好！";
echo $_SESSION['xm'];
echo "！";
echo "<br>";
echo "你的学号是：";
echo $_SESSION['xh'];
?>
<h1><a href="/3ws.html">点击完善信息</a>
</body>
</html>