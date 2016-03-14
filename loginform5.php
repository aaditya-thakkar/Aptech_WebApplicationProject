<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php
$error1="";
$error2="";
$error3="";
include("loginvalidation5.php");
?>
</head>

<body background="https://upload.wikimedia.org/wikipedia/commons/3/3f/Daiict-campus.jpg" style="opacity:0.2;filter()">
<div align="center"><img src="http://ugadmissions.daiict.ac.in/images/header.gif" />
</div>

<div align="center" style="margin-top:40px;margin-left:175px;margin-right:175px;">

<form method="post" action="">

<div style="background:https://upload.wik">
<div><br /></div>
<div><h1><b>Welcome to DA-IICT</b></h1></div>
<div style="padding:5px">
<label><b>Username:</b></label>
<input type="text" name="username" placeholder="Username" />
<span style="color:#FF3300"><?php echo $error1; ?></span>
<br />
</div>
<div style="padding:5px">
<label><b>Password:</b></label>
<input type="password" name="password" placeholder="Password" />
<span style="color:#FF3300"><?php echo $error2; ?></span>
<br />
</div>
<input type="submit" name="submit" value="login" />
<br />
<span style="color:#FF3300"><?php echo $error3; ?></span>
<div><b>
<p>Not registered on this website?</p>
<p>click here for signup</p>
<a href="signupform5.php" >Yeah beyotch!! register here...</a>
</b></div>
<div><b>
<p>Users frequently access this websites also</p>
<p>Our official websites</p>
<a href="http://www.daiict.ac.in/daiict/index.html">DA-IICT</a><br />
<a href="https://ecampus.daiict.ac.in/webapp/intranet/index.jsp">E-Campus</a> 
</b></div>
</div>
</form>
</div>

</body>
</html>
