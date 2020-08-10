<html>
<head>
<meta charset="utf-8">
<title>注册</title>
</head>
<body>
<?php
$username=htmlentities($_POST["name"],ENT_QUOTES);
$password=htmlentities($_POST["password"],ENT_QUOTES);
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
    $res1=$sth1->fetchAll();
    if($res1){
        echo"该用户名已存在"; 
    }
    else{
        $sth = $conn->prepare("INSERT INTO php(user_name,password) values(?,?)");
        $sth->bindValue(1, $username, PDO::PARAM_STR);
        $sth->bindValue(2, $password, PDO::PARAM_STR);
        $sth->execute();
        if ($sth){
            echo "注册成功";
        }
    }
}
catch(PDOException $e)
{
    echo "出现错误" . $e->getMessage();
}
$conn = null; 
?>  
</body>
</html>