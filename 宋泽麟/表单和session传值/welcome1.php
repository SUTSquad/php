<?php
session_start();
?>

<html>
<head>
<meta charset="utf-8">
<title>显示</title>
</head>
<body>
<?php
$_SESSION['name']=$_POST["name"];
$_SESSION['age']=$_POST["age"];
echo "姓名：";
echo $_SESSION['name'];
echo "<br>";
echo "年龄：";
echo $_SESSION['age'];
?>
</body>
</html>
