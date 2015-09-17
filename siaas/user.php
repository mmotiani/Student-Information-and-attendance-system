<html>
<head> 
	<title> Login Page </title>
</head>
<body background = "user images\18.jpg" text="black">
<form method="post" action="insert.php">
<center> <h2> Login Here </h2> </center>
<table width="25%" border="0" align="center">
<tr>
<td>
Username : </td><td><input type="text" name="text1" placeholder = "Enter Username"></td></tr>
<tr>
<td>
Password :</td><td> <input type="password" name="pass1" placeholder = "Enter Password"></td></tr>
<tr>
<td>
Select Category : </td><td>
 	        <input type="radio" name="rad1" value="Administrator">Administrator<br>
		<input type="radio" name="rad1" value="Teacher"> Teacher<br>
		<input type="radio" name="rad1" value="Student">Student
	</td></tr>
</table>
<center>    
<input type="submit" name="but1" value="LOGIN"></center>
</form>
<form method="post" action="register.php">
<center>
<h4>Not Registered Yet</h4><br>
<input type="submit" name="b2" value="Register Here" /></center>
</form>

</body>
<html>
