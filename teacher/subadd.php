<?php
session_start();
require("../database.php");
include("header.php");
error_reporting(1);
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php

extract($_POST);

echo "<BR>";
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
echo "<BR><h3 class=head1>Course Add </h3>";

echo "<table width=100%>";
echo "<tr><td align=center></table>";
if($submit=='submit' || strlen($subname)>0 )
{
$rs=mysql_query("select * from course where sub_name='$subname'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>course is Already Exists</div>";
	exit;
}
mysql_query("insert into course(course_name) values ('$subname')",$cn) or die(mysql_error());
echo "<p align=center>course  <b> \"$subname \"</b> Added Successfully.</p>";
$submit="";
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter course Name");
document.form1.subname.focus();
return false;
}
return true;
}
</script>
<body bgcolor="white">
<div style="margin:auto;width:40%;height:200px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<title>ADD COURSE</title>
<form name="form1" method="post" onSubmit="return check();">
  <table width="55%"  border="0" align="center" bgcolor="white">
    <tr>
      <td width="26%" height="32"><div align="center"><strong>Please enter course Name </strong></div></td>
      <td width="2%" height="5">  
      <td width="53%" height="32">
        <input name="subname" placeholder="enter name" type="text" id="subname">
    <tr>
        <td height="26"> </td>
        <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</div>
</body>