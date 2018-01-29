<?php
session_start();
	mysql_connect("localhost","emir","");
mysql_select_db('exam');
	error_reporting (E_ALL ^ E_NOTICE);
	if($_GET['action']){
	$t_id=$_GET['t_id'];
	mysql_query("DELETE FROM teacher WHERE t_id='$t_id'");
	header("location:view.php");
	
	echo"teacher has been deleted!!";
	}
?>