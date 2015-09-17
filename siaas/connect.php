<?php
$host="localhost";
$user="root";
$pass="";
$connect=mysql_connect($host,$user,$pass);
mysql_select_db("siaas",$connect);
if(!$connect)
{
echo "Unable to establish connection";
}
?>