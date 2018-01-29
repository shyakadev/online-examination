<?php
session_start();
if (!isset($_SESSION['login']))
{
	header("location:index.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Welcome to O.E.S</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="quiz.css" rel="stylesheet" type="text/css">
    <link href="assets/bootstrap.css" type="text/css" rel="stylesheet" media="all">

</head>

<body bgcolor="#f5f5f5">
<?php include"header.php"?>
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1 card " style="margin-top:30px">
<a class="btn btn-danger pull-right" href="signout.php" style="margin-top:20px" >Logout</a>
<h1 class="text-center text-primary ">Welcome to Online Exam</h1> <hr/>
<div class="list-group">
<div class="col-md-6 col-md-offset-3">
<a class="list-group-item" href="sublist.php">Take Exam Course </a>
<a class="list-group-item" href="result.php">Exam Result </a>
</div>
</div>
</div>
</div>
</div
<script src="assets/jquery-2.2.3.min.js"></script>

    <script src="assets/bootstrap.js"></script>

</body>
</html>
