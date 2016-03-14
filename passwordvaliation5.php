<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$error1="";
$error2="";
$error3="";
if(isset($_POST['sub'])){

$link=mysql_connect("localhost","root","");
session_start();
$idd=$_SESSION['sid'];
mysql_select_db("daiict",$link);
$result=mysql_query("select * from students where id='$idd'");
if(empty($_POST['oldpass'])){
$error1="old password is mandatory";
}
else{
$row=mysql_fetch_row($result);
if($row[3]!=$_POST['oldpass']){
$error1="you have entered wrong password.";
}
}

if(empty($_POST['newpass'])){
$error2="new password is mandatory";
}

if(empty($_POST['cpass'])){
$error3="confirm your password";
}

else
{
if($_POST['newpass']!=$_POST['cpass']){
$error3="passwords should match.";
}
}

if(empty($error1) && empty($error2) && empty($error3)){
$newpass=$_POST['newpass'];
$result1=mysql_query("update students set password='$newpass' where id='$idd'");
if($result){
?>
<script>
alert("password is changed successfully");
window.location="homepage5.php";
</script>
<?php

}
}
}
?>
</body>
</html>
