<?php
session_start();
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
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from student where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['login']=$loginid;
	}
}
if (isset($_SESSION['login']))
{
	header("location:Welcome.php");
// echo "<h1 class='style8' align=center>Welcome to Online Exam</h1>";
		// echo '<table width="28%"  border="0" align="center">
  // <tr>
    // <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    // <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">course for exam </a></td>
  // </tr>
  // <tr>
    // <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    // <td valign="bottom"> <a href="result.php" class="style4">Result </a></td>
  // </tr>
// </table>';
   
		// exit;
		

}


 ?>
<?php include_once "header.php" ?>
<div class="container">
<br>
<br>
<br>
    <div class="col-md-8  card" style=" margin-right: 80px">

        <div align="center" class="style1">Student Login</div>


        <div align="center">
            <h1 class="text-center text-primary">Welcome to Online Examination System</h1>
            <span class="style5"><img src="images/homepic.jpg" width="429" height="200"><span class="style7"></span>        </span>
            <param name="movie" value="english theams two brothers.dat">
            <param name="quality" value="high">
            <param name="movie" value="Drag to a file to choose it.">
            <param name="quality" value="high">
            <param name="BGCOLOR" value="#FFFFFF">
            <p align="left" class="style5">&nbsp;</p>
            <blockquote>
                <p align="center" class="style5">Hello everybody!!!!Welcome to Gitwe Adventist Secondary School
                    Online
                    examination system. This Site will provide the exams for various course of interest.
                    You need to login for the take of online exam. And if you are a new user, you must register
                    yourself first.</p>
            </blockquote>
        </div>
        <center><strong>All right reserved to GASS &copy; 2017 ISHIMWE EMILE</strong></center>

    </div>
    <div class="col-md-3 card">
        <form name="form1" method="post" action="">


            <span class="style2">Username </span>
            <input name="loginid" class="form-control" type="text" id="loginid2">
            <div class="form-group">
                <span class="style2">Password</span>
                <input name="pass" class="form-control" type="password" id="pass2">
            </div>


            <span class="errors">
            <?php
            if (isset($found)) {
                echo "Invalid Username or Password";
            }
            ?>
          </span>
            <div class="form-group">
                <input name="submit" class="btn btn-primary" type="submit" id="submit" value="Login"></td>

            </div>


            <div align="center"><span class="style4">To register? <a
                            href="signup.php">click HERE!</a></span></div>


            <div align="center">
                <p class="style5"><img src="images/IMG-20171120-WA0009.jpg" width="230" height="128"></p>
            </div>
        </form>
    </div>


    <script src="assets/bootstrap.js"></script>

    <script src="assets/bootstrap.js"></script>

</body>
</html>
