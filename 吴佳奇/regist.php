
<form action="regist.php" method="post">



    账号: <input type="text" name="username">



    密码: <input type="password" name="password">



<input type="submit" value="提交">



</form>
<?php
$username=htmlentities($_POST['username'],ENT_QUOTES);
$password=htmlentities($_POST['password'],ENT_QUOTES);
$mysqlservername='39.101.167.180';
$mysqlpassword="wu7615007.";
$mysqlusername="root";
$dbname="regist";
try {
    $connect = new PDO("mysql:host=$mysqlservername;dbname=$dbname", $mysqlusername, $mysqlpassword);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $connect->prepare("INSERT INTO register (username,password)values (?,?)");
    $sth->bindValue(1, $username, PDO::PARAM_STR);
    $sth->bindValue(2, $password, PDO::PARAM_STR);
    $sth->execute();
    if ($sth)
        echo "注册成功";
}
catch (PDOException $e)
{echo "注册失败";





}
$connect=null;?>
