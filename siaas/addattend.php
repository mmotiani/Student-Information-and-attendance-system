<html>
<head>
	<title> Attendence Form </title>
</head>
<body bgcolor="red" text="black">
<form method="post" action="insertattend.php">
<center> <h2><b> STUDENT ATTENDENCE INFORMATION</b><h2></center>
<table width="25%" border="0" align="center">
<tr>
<td>
Student Name :</td><td> <input type="text" name="text16" value=""> </td></tr>
<tr><td>
Year :</td><td>
		<select name="year">
	<option selected> select </option>
	<option> 1st YEAR </option>
	<option> 2nd YEAR </option>
	<option> 3rd YEAR </option>
	<option> 4th YEAR </option>
		</select></td></tr>
<tr><td>
Branch :</td><td>
		<select name="branch">
	<option selected> select </option>
	<option> Computer Science </option>
	<option> Electronics & Communication </option>
	<option> Mechanical </option>
	<option> Electrical </option>
	<option> Information Technology </option>
	<option> Civil </option>
	<option> Electronics Instrumental & control </option>
		</select></td></tr>
<tr><td>College No. : </td><td><input type="text" name="text17" value=""></td></tr>
<tr><td>Month : </td><td>
		<select name="month">
	<option selected> select </option>
	<option> January </option>
        <option>February</option>
	<option>March</option>
	<option>April</option>
	<option>May</option>
	<option>June</option>
	<option>July</option>
	<option>August</option>
	<option>September</option>
	<option>October</option>
	<option>November</option>
	<option>December</option>
		</select></td></tr>
<tr><td>No.of working days: </td><td><input type="text" name="text18" value=""></td></tr>
<tr><td>No.of Presents : </td><td><input type="text" name="text19" value=""></td></tr>
<tr><td>No.of Absents : </td><td><input type="text" name="text20" value=""></td></tr>
<tr><td></td><td><input type="submit" name="but4" value="SUBMIT"></td></tr>
</table>
</form>
</body>
</html>