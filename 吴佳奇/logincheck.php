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
    $sth1=$connect->prepare("SELECT* FROM register where username= ?");
    $sth1->bindValue(1,$username,PDO::PARAM_STR);

    $sth1->execute();
    $res1=$sth1->fetchAll();
    if($res1) {


        $sth2=$connect->prepare("SELECT* FROM register where username=? and password=?");
        $sth2->bindValue(1,$username,PDO::PARAM_STR);
        $sth2->bindValue(2,$password,PDO::PARAM_STR);
        $sth2->execute();
        $res2=$sth2->fetchAll();
        if($res2)
        {echo"登陆成功";
            setcookie("user", "$username", time() + 600);

        }
        else
            echo "密码错误";

    }
    else
        echo"用户名不存在";


}
catch (PDOException $e)
{echo "error"."<br>".$e->getMessage();

}}
$connect=null;

?>
