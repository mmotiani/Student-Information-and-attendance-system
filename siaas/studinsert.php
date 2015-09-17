<?php
include("connect.php");
$insert=mysql_query("INSERT INTO studdetail VALUES('','$_POST[text2]','$_POST[text3]','$_POST[text4]','$_POST[rad2]','$_POST[text5]','$_POST[year]','$_POST[branch]','$_POST[text6]','$_POST[add]','$_POST[city]','$_POST[state]','$_POST[text7]','$_POST[text8]','$_POST[text9]')");
if(!insert)
{
echo mysql_error();
}
else
{
header('location:stud.php');
}
?>