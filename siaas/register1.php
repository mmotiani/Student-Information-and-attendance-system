<?php
include("connect.php");
$pass=$_POST['text51'];
$confirm_pass=$_POST['text52'];
if($pass==$confirm_pass)
{
	$insert=mysql_query("INSERT INTO register VALUES('','$_POST[name]','$_POST[text51]','$_POST[text52]','$_POST[rad1]','$_POST[fname]','$_POST[lname]','$_POST[email]')");
}
else
{
	header('location:mismatch.php');
}
if(!$insert)
{
	echo mysql_error();
}
else
{
	header('location:register.php');
}
?>