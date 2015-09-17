<html>
	<head>
		<title> Edit Attendence </title>
	</head>
<body bgcolor="red">
<center> <h2> EDIT ATTENDENCE </h2> </center>
<form method="post" action="editattendance.php">
<table width="25%" border="0" align="center">
<tr><td>
Student Name :</td><td> <input type="text" name="name" value=""></td></tr>
<tr><td>College No. : </td><td><input type="text" name="clgno" value=""></td></tr>
<tr><td>Month :</td><td>
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
<tr><td>No.of working days: </td><td><input type="text" name="working" value=""></td></tr>
<tr><td>No.of Presents : </td><td><input type="text" name="present" value=""></td></tr>
<tr><td>No.of Absents : </td><td><input type="text" name="absent" value=""></td></tr>
<tr><td></td><td><input type="submit" name="but20" value="SAVE"></td></tr>
</body>
</html>