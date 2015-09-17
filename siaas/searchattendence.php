<?php
include("connect.php");
$clgno=$_POST['clgno'];
$count=mysql_query("SELECT * FROM studdetail WHERE college_no='$clgno'");
$count1=mysql_num_rows($count);
if($count1==1)
{
	while($rows=mysql_fetch_array($count))
	{
	$name1=$row['name'];
	$clgno=$row['college_no'];
	$mth=$row['month'];
	$working=$row['working'];
	$present=$row['present'];
	$absent=$row['absent'];
	}
echo "<center width=20% border='1'>";
echo "<h1> ATTENDENCE DETAILS </h1>" ;
echo "Name :".$name1."<br>College No. :".$clgno."<br>Month :".$mth."<br>No of Working Days :".$working."<br>No of Presents :".$present."<br>No of Absents :".$absent."<br>" ;
echo "</center>";
}
else
{
	echo "No result Found";
}
?>