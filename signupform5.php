<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php
$error1="";
$error2="";
$error3="";
$error4="";
$error5="";
$error6="";

include("signupvalidation5.php");

?>
</head>

<body bgcolor="#CCCCCC">
<div style="margin-top:100px">
<center>
<div><h1>Welcome to Daiict</h1></div>
<div>
<form method="post" action="">
<table cellpadding="5px" cellspacing="5px">
<tr>
<td><label>Username:<sup style="color:#FF0000">*</sup></label></td>
<td><input type="text" name="user" /></td>
<td><span style="color:#FF3300"><?php echo $error1; ?></span></td>
</tr>
<tr>
<td><label>Student Id:<sup style="color:#FF0000">*</sup></label></td>
<td><input type="text" name="id" /></td>
<td><span style="color:#FF3300"><?php echo $error2; ?></span></td>

</tr>
<tr>
<td><label>Email:<sup style="color:#FF0000">*</sup></label></td>
<td><input type="text" name="email" /></td>
<td><span style="color:#FF3300"><?php echo $error3; ?></span></td>

</tr>
<tr>
<td><label>Password:<sup style="color:#FF0000">*</sup></label></td>
<td><input type="password" name="password" /></td>
<td><span style="color:#FF3300"><?php echo $error4; ?></span></td>

</tr>
<tr>
<td><label>Confirm password:<sup style="color:#FF0000">*</sup></label></td>
<td><input type="password" name="cpassword" /></td>
<td><span style="color:#FF3300"><?php echo $error5; ?></span></td>

</tr>
</table>
<br />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<span style="color:#FF3300"><?php echo $error6; ?></span>

</center>

</div>
</body>
</html>
