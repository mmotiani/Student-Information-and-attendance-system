<?php
include("connect.php");
$insert=mysql_query("INSERT INTO attenddetail VALUES('','$_POST[text16]','$_POST[year]','$_POST[branch]','$_POST[text17]','$_POST[month]','$_POST[text18]','$_POST[text19]','$_POST[text20]')");
if(!$insert)
{
echo mysql_error();
}
else
{
header('location:addattend.php');
}
?>