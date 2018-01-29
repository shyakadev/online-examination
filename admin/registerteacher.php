<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Teacher REGISTRATION</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php

include("database.php");
$usernames="";
if(isset($_POST['Submit'])){
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$rs=mysql_query("select * from teacher where username='$username'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Username Already Exists</div>";
	exit;
} else{
	
	$query="insert into teacher(username,password,fname,lname,gender,age) values('".$username."','".$pass."','".$fname."','".$lname."','".$gender."','".$age."')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
if($rs){
	$success="New teacher is successfully added";
}
}


/* echo "<br><div class=head1>Please GO BACK</div>";
echo "<br><div class=head1><a href=index.php>BACK</a></div>";  */
} 
if(isset($_POST['Update'])){
	$id=$_POST['id'];
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	$fname=mysql_real_escape_string($_POST['fname'],$cn);
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	
	
	$query="UPDATE  teacher set username='$username',password='$pass',fname='$fname',lname='$lname',gender='$gender',age='$age' WHERE t_id='$id' ";
$rs=mysql_query($query)or die("Could Not Perform the Query");
if($rs){
	$success_update=" teacher is successfully updated";


}
/* echo "<br><div class=head1>Please GO BACK</div>";
echo "<br><div class=head1><a href=index.php>BACK</a></div>";  */
} 







?>

</body>
</html>

