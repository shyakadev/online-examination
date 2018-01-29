<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>view</title>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link href="../assets/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<body>
<?php
//session_start();
error_reporting(E_ALL^E_NOTICE);
include("header.php");
 ?>

   
<?php
mysql_connect("localhost","root","");
mysql_select_db("exam");
$sql="select * from teacher";
$result=mysql_query($sql);
echo"<div>";
$c=mysql_query("select COUNT(username) FROM teacher")or die(mysql_error());
$res=mysql_fetch_array($c);
//var_dump($res);
/* echo "<tr bgcolor=\"GREEN\">";
 echo "THE EXISTING TEACHER ARE: ".$res["COUNT(username)"];
echo"</div>";
echo "<td>ID</td>";
echo "<td>USERNAME</td>";
echo "<td >PASSWORD</td>";
echo "<td >FNAME</td>";
echo "<td >LNAME</td>";
echo "<td >GENDER</td>";
echo "<td >AGE</td>";
echo "<td >DELETE</td>";
echo "<td >EDIT</td>";
echo"</tr>"; */
//for deleting teacher
if(isset($_GET['delete'])){
	$id=$_GET['delete'];
	$sql="DELETE FROM teacher WHERE t_id='$id'";
	if(mysql_query($sql)){
		header("location:view.php");
	}
}
$teachers=array();
while($row=mysql_fetch_array($result))
{
	$teachers[]=$row;
/* echo "<tr bgcolor=\"red\">";
echo "<td>".$row['t_id']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['password']."</td>";
echo "<td>".$row['fname']."</td>";
echo "<td>".$row['lname']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['age']."</td>";

echo "<td><a href=delete.php".$row['Idcard']."&action=delete'/>DELETE</a></td>";
echo "<td><a href='?update.php=".$row['Idcard']."&action=EDIT'/>EDIT</a></td>";
echo"</tr>"; */
}

?>
<div class="container">
<br>
 <div class="col-md-8 col-md-offset-2">
<table border="1" class="table table-bordered"> 
<thead>
<th>USERNAME</th>
<th>PASSWORD</th>
<th>FIRSTNAME</th>
<th>LASTNAME</th>
<th>GENDER</th>
<th>AGE</th>
<th>ACTIONS</th>
</thead>
<?php foreach($teachers as $teach){?>
<tr>
<td><?=$teach['username']?></td>
<td><?=$teach['password']?></td>
<td><?=$teach['fname']?></td>
<td><?=$teach['lname']?></td>
<td><?=$teach['gender']?></td>
<td><?=$teach['age']?></td>
<td>
<a href="view.php?delete=<?=$teach[t_id]?>" class="btn btn-danger">Delete</a>
<a href="register.php?update=<?=$teach['t_id']?>" class="btn btn-warning">Update</a>

</td>
<?php }?>
</tr>
</table>
</div>
</td>
</table>
<div>
<div class="col-md-12"><hr/><p class="text-center">&copy GASS by ISHIMWE EMILE</p></div>


 </div>
 <script src="../assets/jquery-2.2.3.min.js"></script>

    <script src="../assets/bootstrap.js"></script>
</body>
</html>
