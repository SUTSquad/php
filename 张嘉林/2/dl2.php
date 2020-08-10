<html>
<head>
<meta charset="utf-8">
<title>注册</title>
</head>
<body>
<?php
$username=htmlentities($_POST['name'],ENT_QUOTES);
$password=htmlentities($_POST['password'],ENT_QUOTES);
$dbms='mysql';
$host = "localhost";           
$user = "root";
$pass = "123456";
$dbname = "php";
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth1=$conn->prepare("SELECT * FROM php where user_name= ?");
    $sth1->bindValue(1,$username,PDO::PARAM_STR);
    $sth1->execute();
    $c1=$sth1->fetchAll();
    if($c1) {
        $sth2=$conn->prepare("SELECT * FROM php where user_name=? and password=?");
        $sth2->bindValue(1,$username,PDO::PARAM_STR);
        $sth2->bindValue(2,$password,PDO::PARAM_STR);
        $sth2->execute();
        $c2=$sth2->fetchAll();
        if($c2)
        {
            echo"登陆成功";
        }
        else
            echo "密码错误";
    }
    else
        echo"用户名不存在";
}
catch(PDOException $e)
{
    echo "出现错误" . $e->getMessage();
}
$conn = null; 
?>  
</body>
</html>