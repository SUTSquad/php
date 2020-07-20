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

echo "姓名：";
echo $_SESSION['name'];
echo "<br>";
echo "年龄：";
echo $_SESSION['age'];

?>
</body>
</html>
