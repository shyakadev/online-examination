<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>show exam on O.E.S</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
extract($_GET);
$stname="";
$rs1=mysql_query("select * from course where course_id=$subid");
$row1=mysql_fetch_array($rs1);
$user=$_SESSION['login'];
echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";
$studentq= mysql_query("select * from student where login='$user'");

while($srow=mysql_fetch_assoc($studentq)){
	$username = $srow['login'];
}

$rs=mysql_query("select * from test where course_id=$subid");
/*while($stde = mysql_fetch_assoc($strs)){
	$stname= $stde['login'];
	$stId = $stde['test_id'];
}*/

if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h2 class=head1> No Exam for this selected course </h2>";
	
	//echo $username2;
	exit;
}
echo "<h2 class=head1> Select exam name to do exam </h2>";
echo "<table align=center>";
while($row=mysql_fetch_row($rs)){
	$test_id = $row[0]; 
	$strs=mysql_query("select * from result where login ='$user' and test_id=$test_id");
if(mysql_num_rows($strs)<1){

	echo "<tr><td align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a><br>";
	
	
	
}
else {

	echo "<tr><td align=center ><a onclick='show()' style='cursor:pointer'><font size=4>$row[2]</font></a>";
		
}
	
}

echo "</table>";
?>

<script>
function show(){
	alert("You did this exam before please!");
}
</script>
</body>
</html>
