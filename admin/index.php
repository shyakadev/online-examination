<?php
session_start();
if(isset($_SESSION['alogin']))
{
	header("location:login.php");
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Admin Login O.E.S</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
 <link href="../assets/bootstrap.css" type="text/css" rel="stylesheet" media="all">
</head>

<body bgcolor="white">
<?php
include("header.php");
?>
<br>
<br>
<div class="container">
<div class="col-md-4 col-md-offset-4 card">
<h2 class="text-center text-primary">Admin Login </h2><hr/>
<form name="form1" method="post" action="login.php">

    
  <img src="login.jpg" width="131" class="center-block img-responsive" >
    <label>Username  </label>
 <input name="loginid"  class="form-control" type="text" id="loginid">
 <label>Password</label>
   <input name="pass"  class="form-control" type="password" id="pass">
  <br/>
    <input name="submit" class=" btn btn-success" type="submit" id="submit" value="Login">
  

</form>
</div>
</div>
</body>
<script src="../assets/jquery-2.2.3.min.js"></script>

    <script src="../assets/bootstrap.js"></script>
</html>
