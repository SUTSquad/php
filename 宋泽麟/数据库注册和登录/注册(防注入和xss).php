<head>
<meta charset="utf-8">
<title>信息传输</title>
</head>
<body>
<?php

$usn = $_POST["name"];
$usn = htmlentities($usn, ENT_QUOTES);
if($usn=="‘or 1 = 1 –"){
        echo "注入失败";
        exit;
}
$psw = $_POST["password"];
$psw = htmlentities($psw, ENT_QUOTES);
$servername = "localhost";
$username = "root";
$password = "songzelin134679";
$dbname = "school";

try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $conn->prepare("INSERT INTO usermessage (user_name, password)
        VALUES ( ? , ? )");
        $sth->bindValue(1,$usn,PDO::PARAM_STR);
        $sth->bindValue(2,$psw,PDO::PARAM_STR);
        $sth->execute();
        echo "注册成功";
}
catch(PDOException $e)
{
    echo "用户名重复！" . "<br>" . $e->getMessage();
}

$conn = null;
?>

</body>
</html>
