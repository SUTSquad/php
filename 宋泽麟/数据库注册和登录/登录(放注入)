<html>
<head>
<meta charset="utf-8">
<title>信息传输</title>
</head>
<body>
<?php

$usn=$_POST["name"];
if($usn=="‘or 1 = 1 –"){
        echo "注入失败";
        exit;
}
$psw=$_POST["password"];
$servername = "localhost";
$username = "root";
$password = "songzelin134679";
$dbname = "school";

try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $conn->prepare("SELECT *
        FROM usermessage
        WHERE user_name = ? AND password = ?");
        $sth->bindValue(1,$usn,PDO::PARAM_STR);
        $sth->bindValue(2,$psw,PDO::PARAM_STR);
        $sth->execute();
        $res=$sth->fetchAll();
        if($res){
                echo "登陆成功";
        }
        else{
                echo "密码错误";
        }
}
catch(PDOException $e)
{
    echo "error!" . "<br>" . $e->getMessage();
}
$conn = null;
?>


</body>
</html>
