<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['submit'])){

$error1="";
$error2="";
$error3="";
$error4="";
$error5="";
$error6="";
$error7="";

if(empty($_POST['user'])){
$error1="username is mandatory";
}

if(empty($_POST['id'])){
$error2="Student id is mandatory";
}

if(empty($_POST['email'])){
$error3="email is mandatory";
}

if(empty($_POST['password'])){
$error4="password is mandatory";
}

if(empty($_POST['cpassword'])){
$error5="cpassword is mandatory";
}

if(($_POST['cpassword']!=$_POST['password'])&& !(empty($_POST['cpassword']))){
$error5="passwords should match";
}

if(empty($error1) && empty($error2) && empty($error3) && empty($error4) && empty($error5)){
$user=$_POST['user'];
$id=$_POST['id'];
$email=$_POST['email'];
$password=$_POST['password'];


$link=mysql_connect("localhost","root","");

mysql_select_db("daiict",$link);
$result=mysql_query("insert into students values('$user','$id','$email','$password')");
if($result)
{
session_start();
$_SESSION['user']=$user;
$_SESSION['sid']=$id;
header("Location: homepage5.php");
}
else
{
$error6="There is some problem submitting your data...please check and try again.";
}


}
}
?>

</body>
</html>
