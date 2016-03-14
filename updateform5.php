<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CCCCCC">
<?php
session_start();
$idd=$_SESSION['sid'];
if(isset($_POST['update'])){

$link=mysql_connect("localhost","root","");
mysql_select_db("daiict",$link);

if(!empty($_POST['user'])){
$userr=$_POST['user'];
mysql_query("update students set user='$userr' where id='$idd'");
$_SESSION['user']=$userr;
}

if(!empty($_POST['email'])){
$userr=$_POST['email'];
mysql_query("update students set email='$userr' where id='$idd'");

}
header("Location: homepage5.php");

}
?>
<center>
<h1 style="margin-top:80px">Update your profile</h1>
<div style="margin-top:50px">

<form action="" method="post">
<table cellpadding="5px" cellspacing="5px">
<tr>
<td><label>Student Id:</label></td>
<td><?php echo $idd;?></td>
</tr>
<tr>
<td><label>Username:</label></td>
<td><input type="text" name="user" /></td>
</tr>
<tr>
<td><label>Email:</label></td>
<td><input type="text" name="email" /></td>
</tr>

</table>
<input type="submit" name="update" value="update" />
</form>
</div>
</center>
</body>
</html>
