<?php
$username=htmlentities($_POST['username'],ENT_QUOTES);

$password=htmlentities($_POST['password'],ENT_QUOTES);
$mysqlservername='39.101.167.180';
$mysqlpassword="wu7615007.";
$mysqlusername="root";
$dbname="regist";
if($username==$_COOKIE['user'])
echo "已登陆，无需登陆";
else
{try{
    $connect=new PDO("mysql:host=$mysqlservername;dbname=$dbname",$mysqlusername,$mysqlpassword);
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sth=$connect->prepare("SELECT* FROM register where username= ? and password=?");
    $sth->bindValue(1,$username,PDO::PARAM_STR);
    $sth->bindValue(2,$password,PDO::PARAM_STR);
    $sth->execute();
    $res=$sth->fetchAll();
    if($res) {
        echo "登陆成功";
        setcookie("user", "$username", time() + 600);
    }
    else
        echo"登录失败";


}
catch (PDOException $e)
{echo "error"."<br>".$e->getMessage();

}}
$connect=null;

?>
