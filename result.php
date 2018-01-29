<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online exam  - Result </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
    <link href="assets/bootstrap.css" type="text/css" rel="stylesheet" media="all">
 <link href="assets/dataTables.bootstrap.min.css" type="text/css" rel="stylesheet" media="all">

</head>

<body>
<?php
include("header.php");?>
<div class="container">
<h1 class="text-center text-primary">Your Exam Result</h1><hr/>
<?php include("database.php");

extract($_SESSION);
$rs=mysql_query("select t.test_name,t.total_que,r.test_date,r.score from test t, result r where
t.test_id=r.test_id and r.login='$login'",$cn) or die(mysql_error());


if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any exam</h1>";
	exit;
}
?>
<div class="row">
<div class=" col-md-6 col-md-offset-3">
<table class="table table-bordered ">
<thead>
<th>Exam name</th>
<th>Total Questions</th>
<th>Score</th>
</thead>
<tbody>
<?php
while($row=mysql_fetch_row($rs))
{?>
<tr>
<td><?=$row[0]?></td>
<td><?=$row[1]?></td>
<td><?=$row[3]?></td>
</tr>

<?php }
?>
</tbody>
<tfoot>
</tfoot>

</table>
</div>
</div>
</div>
<script src="assets/jquery-2.2.3.min.js"></script>

    <script src="assets/bootstrap.js"></script>
	<script src="assets/jquery.dataTables.min.js"></script>
	<script src="assets/dataTables.bootstrap.min.js"></script>
	<script>
	$('.table').DataTable({
		keys:true
	})
	</script>
</body>
</html>
