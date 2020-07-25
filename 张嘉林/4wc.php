<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>完成</title>
</head>
<body>
<?php
$_SESSION['dh']=$_POST["dh"];
$_SESSION['zz']=$_POST["zz"];
?> 
<h1><a href="/5ck.php">点击查看信息</a>
</body>
</html>