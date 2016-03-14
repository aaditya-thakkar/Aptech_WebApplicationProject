<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script>
function logout(){
if(confirm("Are you sure you want to logout?")==true){
window.location="logout5.php";
}
}

function deleteacc(){
if(confirm("Are you sure you want to permanently delete your account?")==true){
window.location="deleteacc5.php";
}
}

</script>
</head>

<body bgcolor="#CCCCCC">
<div>
<div style="margin-left:250px;margin-right:300px">
<h1 style="color:#3366FF;font-size:40px"><tt>Welcome to DA-IICT</tt></h1>
</div>
<div style="margin-left:700px;float:right;margin-right:30px;margin-top:-40px;">
<?php
session_start();
echo "<h4>Howdy ".$_SESSION['user']."</h4>";
?>
<hr />
 <a href="#" onclick="logout()" style="text-decoration:blink;font-size:15px;float:right;">Logout</a>
</div>
</div>

<div style="width:150px; float:left; margin-top:20px;margin-left:40px">
<div>
<a href="updateform5.php" style="text-decoration:blink;font-size:25px">Update your profile</a>
<hr />
</div>
<div>
<a href="passwordchange5.php" style="text-decoration:blink;font-size:25px">Change password</a>
</div>
<hr />
<div>
<a href="#" onclick="deleteacc()" style="text-decoration:blink;font-size:25px">Delete your account</a>
</div>
<hr />
</div>
<div style="margin-left:250px;margin-top:100px">

<h3>B.Tech. (ICT) Program Overview</h3>
<p>
DA-IICT offers two unique four-year undergraduate programs leading to the Degrees of Bachelor of Technology in Information and Communication Technology – B.Tech (ICT) and Bachelor of Technology (Honours in ICT with minor in Computational Science) – B.Tech (Honours in ICT with minor in CS). 
</p>
<p>
The ICT embodies the convergence of Computer and Communication systems and has obtained wide acceptance as a distinct discipline. It is also expected that ICT graduates would enjoy a special niche only if they have certain performance capabilities not found in conventional CSE and/or ECE graduates. Logically this convergence takes place at the systems level, but at the same time it is necessary to accept a certain level of granularity as one goes down to the level of circuits, devices and materials. In other words, given the four- year span of a B.Tech Program, there has to be a trade-off between the breadth demanded by comprehension at the systems level and the depth desired by scientific understanding of the fundamentals.</p> 
<p>
The B.Tech (ICT) and B.Tech Honours programs are designed to operate on a semester-based credit system. Each course is associated with a fixed number of credits. Credits (C) are assigned on an L-T-P-C system i.e number of hours required for Lectures (L), Tutorials (T) and Practicals (P) in a week. For both the degrees, the students are required to complete the prescribed curriculum in minimum of four years.
</p>
</div>
</body>
</html>
