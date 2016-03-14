<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("daiict",$link);
session_start();
$idd=$_SESSION['sid'];
mysql_query("delete from students where id='$idd'");
if(session_destroy()){
header("Location: loginform5.php");
}
?>
</body>
</html>
