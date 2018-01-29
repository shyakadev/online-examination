<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online exam - exam List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
 <link href="assets/bootstrap.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>
<?php
include("header.php");?>
<div class="container">
<h2 class="text-center text-primary"> Select course for exam </h2><hr/>
<?php
include("database.php");
$rs=mysql_query("select * from course");
?>
<div class="list-group col-md-4 col-md-offset-4">
<?php while($row=mysql_fetch_row($rs))
{?>
	<a class="list-group-item" href="showtest.php?subid=<?=$row[0]?>"><?=$row[1]?><span class="pull-right glyphicon glyphicon-circle-arrow-right"></span></a>
	
<?php }

?>
</div>
</div>
<script src="assets/jquery-2.2.3.min.js"></script>

<script src="assets/bootstrap.js"></script>
</body>
</html>
