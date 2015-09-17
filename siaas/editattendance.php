<?php
include("connect.php");
$insert=mysql_query("INSERT INTO editattend VALUES('','$_POST[name]','$_POST[clgno]','$_POST[month]','$_POST[working]','$_POST[present]','$_POST[absent]')");
if(!$insert)
{
echo mysql_error();
}
else
{
header('location:editattend.php');
}
?>