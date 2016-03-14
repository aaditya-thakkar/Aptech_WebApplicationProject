<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php
$error1="";
$error2="";
$error3="";
include("passwordvaliation5.php");
?>
</head>

<body bgcolor="#CCCCCC">
<center>
<div style="margin-top:250px">
<form action="" method="post">
<table cellpadding="5px" cellspacing="5px">
<tr>
<td><label>Old Password:</label></td>
<td><input type="password" name="oldpass" /></td>
<td><span style="color:#FF3300"><?php echo $error1; ?></span></td>
</tr>
<tr>
<td>
<label>New Password:</label></td>
<td>
<input type="password" name="newpass" /></td>
<td><span style="color:#FF3300"><?php echo $error2; ?></span></td>
</tr>
<tr>
<td>
<label>
Confirm password:
</label>
</td>
<td>
<input type="password" name="cpass" />
</td>
<td><span style="color:#FF3300"><?php echo $error3; ?></span></td>
</tr>
</table>

<input type="submit" name="sub" value="change password" />
</form>
</div>
</center>

</body>
</html>
