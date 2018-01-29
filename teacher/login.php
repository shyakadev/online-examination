<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Teachers area O.E.S</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
</head>



<?php
include("header.php");
extract($_POST);
if(isset($submit))
{
	include("../database.php");
	$rs=mysql_query("select * from teacher where username='$username' and password='$password'",$cn) or die(mysql_error());
	if(mysql_num_rows($rs)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<div>";
		exit;
		
	}
	$_SESSION['alogin']="true";
	
}
else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
?>







<body bgcolor="white">

<p class="head1">Welcome to Teachers Area </p>
<div style="margin:auto;width:40%;height:200px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left;backgroundcolor:white">
<div style="margin-left:20%;padding-top:5%">
<p class="style7"><a href="subadd.php">ADD COURSE</a></p>
<p class="style7"><a href="testadd.php">SET EXAM</a></p>
<p class="style7"><a href="questionadd.php">ADD QUESTIONS </a></p>
<p align="center" class="head1">&nbsp;</p>
</div>
</div>
</body>
</html>
														