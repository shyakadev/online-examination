<?php include_once"registerteacher.php" ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>REGISTER NEW TEACHER </title>
<script language="javascript">
function check()
{

 if(document.form1.tid.value=="")
  {
    alert("Plese Enter username");
	document.form1.tid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.fname.value=="")
  {
    alert("Plese Enter Your FName");
	document.form1.fname.focus();
	return false;
  }
  if(document.form1.lname.value=="")
  {
    alert("Plese Enter Your LName");
	document.form1.lname.focus();
	return false;
  }
  if(document.form1.gender.value=="")
  {
    alert("Plese Enter Your gender");
	document.form1.gender.focus();
	return false;
  }
  if(document.form1.age.value=="")
  {
    alert("Plese Enter Your age");
	document.form1.age.focus();
	return false;
  }
  
  return true;
  }
  
</script>

<link href="../quiz.css" rel="stylesheet" type="text/css">
<link href="../assets/bootstrap.css" type="text/css" rel="stylesheet" media="all">
</head>

<body bgcolor="white">
<?php
include("header.php");
?>
<?php $updates=array();
if(isset($_GET['update'])){
	$id=$_GET['update'];
	$query="SELECT * FROM teacher WHERE t_id='$id'";
	$row=mysql_query($query);
	
	while($result=mysql_fetch_array($row)){
		$updates[]=$result;
	}
	//$usernames=$updates['username'];
	foreach($updates as $update){}
}

?>
 <table width="80%" border="0"bgcolor="white" align="center">
   <tr>
     <td width="132" rowspan="2" valign="top"><span class="style8"><img src="image/Teachers-icon.png" width="131" height="155"></span></td>
     <td width="468" height="57"><h1 align="center"><span class="style8">REGISTER NEW TEACHER</span></h1></td>
   </tr>
   <tr>
   
     <td>
	   <?php if(isset($success)) { ?>
	   <p style="color:green">New teacher is successfully added</p>
	   <?php }?>
	    <?php if(isset($success_update)) { ?>
	   <p style="color:green"> teacher is successfully updated</p>
	   <?php }?>
	 <form name="form1" method="post" action="register.php" onSubmit="/* return check(); */">
	 
       <table width="301" border="0" class="table" align="left">
	  
         <tr>
           <td><div align="left" class="style7">Username </div></td>
           <td><input type="text" name="username" value="<?= ((isset($_GET['update'])?$update['username']:'')) ?>"></td>
         </tr>
         <tr>
           <td class="style7">Password</td>
           <td><input type="password" name="pass" value="<?= ((isset($_GET['update'])?$update['password']:'')) ?>"></td>
         </tr>
         <tr>
           <td class="style7">Confirm Password </td>
           <td><input name="cpass" type="password" id="cpass" value="<?= ((isset($_GET['update'])?$update['password']:'')) ?>"></td>
         </tr>
		 <input type="hidden" name="id" value="<?= ((isset($_GET['update'])?$update['t_id']:'')) ?>"/>
         <tr>
           <td class="style7">FName</td>
           <td><input name="fname" type="text" id="name" value="<?= ((isset($_GET['update'])?$update['fname']:'')) ?>"></td>
         </tr>
		 <tr>
           <td class="style7">LName</td>
           <td><input name="lname" type="text" id="name" value="<?= ((isset($_GET['update'])?$update['lname']:'')) ?>"></td>
         </tr>
         <tr>
           <td class="style7">Gender</td>
           <td><select name="gender">
		   <option>Male</option>
		   <option>Female</option>
		   </select></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Age</td>
           <td><input name="age" type="text" id="age" value="<?= ((isset($_GET['update'])?$update['age']:'')) ?>"></td>
         </tr>
      
         <tr>
           <td>&nbsp;</td>
           <td><br/><input type="submit" class="btn btn-primary" name="<?= ((isset($_GET['update'])?'Update':'Submit')) ?>" value="<?= ((isset($_GET['update'])?'Update':'Register')) ?>">
           </td>
         </tr>
         <table width="100%">
   <tr>
    <td aling=right>
	<?php
	if(isset($_SESSION['alogin']))
	{
	 echo "<div align=\"right\"><strong><a href=\"login.php\">Admin Home</a>|<a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
  </tr>
</table>
       </table>
     </form></td>
   </tr>
   <tr ></tr><br>
   <tr>
   
  <td colspan="3"><center><strong>All right reserved to GASS &copy; 2017 ISHIMWE EMILE</strong></center></td>
  </tr>
 </table>

 <p>&nbsp; </p>
</body>
</html>
