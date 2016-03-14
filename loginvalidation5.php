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

if(empty($_POST['username'])){
$error1="please enter valid username";
}

if(empty($_POST['password'])){
$error1="please enter valid password";
}

if(empty($error1) && empty($error2)){
$link=mysql_connect("localhost","root","");
mysql_select_db("daiict",$link);
$username=$_POST['username'];
$password=$_POST['password'];
$result=mysql_query("select * from students where user='$username' AND password='$password'");
if(mysql_num_rows($result)==1){
$row=mysql_fetch_row($result);
$idd=$row[1];
session_start();
$_SESSION['user']=$username;
$_SESSION['sid']=$idd;

header("Location: homepage5.php");
}
else
{
$error3="please enter valid username and password";
}
}

}
?>
</body>
</html>
