<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Admin area O.E.S</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link href="../assets/bootstrap.css" type="text/css" rel="stylesheet" media="all">
</head>

<body bgcolor="white">
<?php
include("header.php");
extract($_POST);
if(isset($submit))
{
	include("../database.php");
	$rs=mysql_query("select * from admin where username='$loginid' and pass='$pass'",$cn) or die(mysql_error());
	if(mysql_num_rows($rs)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Invalid UserName or Password<div>";
		exit;
		
	}
	$_SESSION['alogin']="true";
	
}
else if(!isset($_SESSION['alogin']))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
?>
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1 card " style="margin-top:30px">
<a class="btn btn-danger pull-right" href="signout.php" style="margin-top:20px" >Logout</a>
<h1 class="text-center text-primary ">Welcome to Admin Area</h1> <hr/>
<div class="list-group">
<div class="col-md-6 col-md-offset-3">
<a class="list-group-item" href="register.php">Register Teacher </a>
<a class="list-group-item" href="view.php">View Teachers </a>
</div>
</div>
</div>
</div>
</div>

</body>
<script src="../assets/jquery-2.2.3.min.js"></script>

<script src="../assets/bootstrap.js"></script>
</html>
														