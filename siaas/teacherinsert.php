<?php
include("connect.php");
$insert=mysql_query("INSERT INTO teacherdetail VALUES('','$_POST[text10]','$_POST[rad3]','$_POST[text11]','$_POST[text12]','$_POST[qualification]','$_POST[dept]',
'$_POST[pos]','$_POST[add]','$_POST[city]','$_POST[state]','$_POST[text13]','$_POST[text14]','$_POST[text15]')");
if(!$insert)
{
echo mysql_error();
}
else
{
header('location:teacher.php');
}
?>