<html>
<head>
<meta charset="utf-8">
<title>信息传输</title>
</head>
<body>
<?php

$usn=$_POST["name"];
$psw=$_POST["password"];
$servername = "localhost";
$username = "root";
$password = "songzelin134679";
$dbname = "school";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO usermessage (user_name, password)
    VALUES ('$usn', '$psw')";
    // 使用 exec() ，没有结果返回
    $conn->exec($sql);
    echo "新记录插入成功";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>


</body>
</html>
