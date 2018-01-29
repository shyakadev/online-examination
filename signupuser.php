<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
extract($_POST);
include("database.php");
$rs=mysql_query("select * from student where login='$lid'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Username Already Exists</div>";
	exit;
}
$query="insert into student(login,pass,username,address,city,phone,email) values('$lid','$pass','$name','$address','$city','$phone','$email')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Username to take an Exam </div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";


?>
</body>
</html>

