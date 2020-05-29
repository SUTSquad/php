<?php
session_start();
?>

<html>
<head>
<meta charset="utf-8">
<title>登录</title>
</head>
<body>

<?php

$_SESSION['name']=$_POST["name"];
$_SESSION['age']=$_POST["age"];

?>
<h1><a href="/text.php">登录</a>
</body>
</html>
