<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>信息查看</title>
</head>
<body>
<?php
echo "姓名：";
echo $_SESSION['xm'];
echo "<br>";
echo "学号：";
echo $_SESSION['xh'];
echo "<br>";
echo "电话：";
echo $_SESSION['dh'];
echo "<br>";
echo "住址：";
echo $_SESSION['zz'];
?>
</body>
</html>