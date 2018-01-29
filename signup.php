<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New student signup </title>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter username");
	document.form1.lid.focus();
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
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Full Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="assets/bootstrap.css" type="text/css" rel="stylesheet" media="all">
</head>

<body bgcolor="white">
<?php
include("header.php");
?>
<div class="container">
<div class="col-md-6 col-md-offset-3">
<div class="panel panel-primary" style="margin-top:20px" >
<div class="panel-heading">
<h3 class="text-center">User Registration</h1>
</div>
     <form name="form1" method="post" action="signupuser.php" onSubmit="return check();" style="padding :30px">
       
      
          <div class="form-group">
		  <label>Username</label>
           <input type="text" class="form-control" name="lid">
        </div>
		 <div class="form-group">
           <label>Password</label>
           <input type="password" class="form-control" name="pass">
       </div>
	   <div class="form-group">
           <label>Confirm Password</label>
           <input name="cpass" class="form-control" type="password" id="cpass">
       
        </div>
		<div class="form-group">
		<label>Full Name</label>
           <input name="name" class="form-control" type="text" id="name">
        </div>
           <div class="form-group">
		   <label>Address</label>
           <textarea name="address" class="form-control" id="address"></textarea>
      </div>
       <div class="form-group">
	   <label>City</label>
           <input name="city" class="form-control" type="text" id="city">
        
        </div>   
		<div class="form-group">
		<label>Phone</label>
           <input name="phone" class="form-control" type="text" id="phone">
         </div>
         <div class="form-group">
		 <label>Email</label>
           <input name="email" class="form-control" type="text" id="email">
        </div>
       <div class="form-group">
	   
           <input type="submit" name="Submit" class="btn btn-primary" value="Signup">
         </div> 
     
     </form>
	 </div>
  </div> 
  </div>
  <td colspan="3"><center><strong>All right reserved to GASS &copy; 2017 ISHIMWE EMILE</strong></center></td>
  
 <p>&nbsp; </p>
 <script src="assets/jquery-2.2.3.min.js"></script>

    <script src="assets/bootstrap.js"></script>
</body>
</html>
