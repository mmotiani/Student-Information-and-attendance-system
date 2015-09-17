<html>
<head>
<style type="text/css">
#shwa1
{
padding-left:10px;
padding-top:10px;
}
#new
{
font-weight:bold;
font-size:20px;
color:green;
padding-left:50px;
font-weight:bold;
font-size:26px;
}
#div1
{
margin-left:0px;
padding-left:120px;
padding-top:10px;
padding-bottom:5px;
background-color:#f0f0f0;
margin:right:15px;
}
p
{
text-transform:uppercase;
color:#0099FF
}
input[type="text"]
{
margin-left:10px;
background-color:none;
width:200px;
height:30px;
padding-left:15px;
}
input[type="password"]
{
margin-left:10px;
background-color:none;
width:200px;
height:30px;
padding-left:15px;
}
input[type="submit"]
{
  height: 30px;
  margin: 0;
  padding-left: 8px;
  margin-left:20px;
  color:red;
  background-color:violet:
  border:1 px solid gray;
 }
#zero
{
margin-left:500px;
}
#sel
{
width:200px;
height:30px;
}
#aro
{
font-weight:bold;
font-size:14px;
}
</style>
</head>
</html>
<?php
include("connect.php");
$name=$_POST['text40'];
$count=mysql_query("SELECT * FROM studdetail WHERE name='$name'");
$count1=mysql_num_rows($count);
if($count1==1)
{
while($row=mysql_fetch_array($count))
{
$fname=$row['father_name'];
$name1=$row['name'];
$mname=$row['mother_name'];
$gender=$row['gender'];
$dob=$row['dob'];
$branch=$row['branch'];
$year=$row['year'];
$collegeno=$row['college_no'];
$add=$row['address'];
$city=$row['city'];
$state=$row['state'];
$pin=$row['pincode'];
$phone=$row['phone_no'];
$email=$row['email_id'];
}
echo "<center width=20% border='1'>";
echo "<h1> <div id='shwa1'><p id='new'>STUDENT INFORMATION </h1></p></div>";
echo " <div id='div1'><table><tr><td>";
echo "<b>Name :</b></td><td>".$name1."</td></tr><tr><td><b>Father's Name :</b></td><td>".$fname."</td></tr><tr><td><b>Mother's Name :</b></td><td>".$mname."</td></tr><tr><td><b>Gender :</b></td><td>".$gender."</td></tr><tr><td><b>Date of Birth :</b></td><td>".$dob."</td></tr><tr><td><b>Year :</b></td><td>".$year."</td></tr><tr><td><b>Branch :</b></td><td>".$branch."</td></tr><tr><td><b>College No. :</b></td><td>".$collegeno."</td></tr><tr><td><b>Address :</b></td><td>".$add."</td></tr><tr><td><b>City :</b></td><td>".$city."</td></tr><tr><td><b>State :</b></td><td>".$state."</td></tr><tr><td><b>PinCode :</b></td><td>".$pin."</td></tr><tr><td><b>Phone Number :</b></td><td>".$phone."</td></tr><tr><td><b>Email-Id :</b></td><td>".$email."</td></tr>";
echo "</table></div>" ;
echo "</center>";
}
else
{
echo "No Result Found";
}
?>