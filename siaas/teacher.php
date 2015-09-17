<html>
<head>
	<title> Teacher Information </title>
</head>
<body background = "6.jpg" text="black">
<form method="post" action="teacherinsert.php">
<center> <h2><b> TEACHER INFORMATION </b></h2> </center>
<table width="25%" border="0" align="center">
<tr>
<td>
Teacher Name : </td><td><input type="text" name="text10" value=""></td></tr>
<tr>
<td>
Gender :</td><td>
	<input type="radio" name="rad3" value="Male">Male
	<input type="radio" name="rad3" value="Female"> Female</td></tr>
<tr>
<td>
Date of Birth : </td><td><input type="text" name="text11" value=""></td></tr>
<tr>
<td>
Teacher's Id : </td><td><input type="text" name="text12" value=""></td></tr>
<tr>
<td>
Qualification : </td><td>
		<select name='qualification'>
	<option selected> Select </option>
	<option> M.Tech. </option>
	<option> B.Tech. </option>
	<option> B.Sc.+ M.Sc. </option>
	<option> Ph.D. </option>
		</select></td></tr>
<tr>
<td>
Select Department : </td><td>
		<select name='dept'>
	<option selected> select </option>
	<option> Computer Science </option>
	<option> Electronics & Communication </option>
	<option> Mechanical </option>
	<option> Electrical </option>
	<option> Information Technology </option>
	<option> Civil </option>
	<option> Electronics Instrumental & control </option>
		</select></td></tr>
<tr><td>
Position :</td><td>
		<select name='pos'>
	<option selected> select </option>
	<option> Professor </option>
	<option> HOD </option>
	<option> Reader </option>
		</select></td></tr>
<tr><td>
Postal Address :</td><td>
		<textarea name='add' rows="5" cols="20">
		</textarea></td></tr>
<tr><td>
City : </td><td>
	<select name='city'> 
      <option selected>Select</option> 
<option label="Agartala" value="Agartala">Agartala</option> 
<option label="Agra" value="Agra">Agra</option> 
<option label="Ahmedabad" value="Ahmedabad">Ahmedabad</option> 
<option label="Aizwal" value="Aizwal">Aizwal</option> 
<option label="Aligarh" value="Aligarh">Aligarh</option> 
<option label="Allahabad" value="Allahabad">Allahabad</option> 
<option label="Amritsar" value="Amritsar">Amritsar</option> 
<option label="Aurangabad" value="Aurangabad">Aurangabad</option> 
<option label="Bangalore" value="Bangalore">Bangalore</option> 
<option label="Baroda" value="Baroda">Baroda</option> 
<option label="Bhopal" value="Bhopal">Bhopal</option> 
<option label="Bhubaneshwar" value="Bhubaneshwar">Bhubaneshwar</option> 
<option label="Bokaro" value="Bokaro">Bokaro</option> 
<option label="Chandigarh" value="Chandigarh">Chandigarh</option> 
<option label="Chennai" value="Chennai">Chennai</option> 
<option label="Cochin" value="Cochin">Cochin</option> 
<option label="Coimbatore" value="Coimbatore">Coimbatore</option> 
<option label="Cuttack" value="Cuttack">Cuttack</option> 
<option label="Dehradun" value="Dehradun">Dehradun</option> 
<option label="Delhi" value="Delhi">Delhi</option> 
<option label="Dimapur" value="Dimapur">Dimapur</option> 
<option label="Durgapur" value="Durgapur">Durgapur</option> 
<option label="Faridabad" value="Faridabad">Faridabad</option> 
<option label="Gandhinagar" value="Gandhinagar">Gandhinagar</option> 
<option label="Ghaziabad" value="Ghaziabad">Ghaziabad</option> 
<option label="Goa" value="Goa">Goa</option> 
<option label="Gurgaon" value="Gurgaon">Gurgaon</option> 
<option label="Guwahati" value="Guwahati">Guwahati</option> 
<option label="Gwalior" value="Gwalior">Gwalior</option> 
<option label="Hyderabad" value="Hyderabad">Hyderabad</option> 
<option label="Imphal" value="Imphal">Imphal</option> 
<option label="Indore" value="Indore">Indore</option> 
<option label="Jabalpur" value="Jabalpur">Jabalpur</option> 
<option label="Jaipur" value="Jaipur">Jaipur</option> 
<option label="Jammu" value="Jammu">Jammu</option> 
<option label="Jamnagar" value="Jamnagar">Jamnagar</option> 
<option label="Jamshedpur" value="Jamshedpur">Jamshedpur</option> 
<option label="Jodhpur" value="Jodhpur">Jodhpur</option> 
<option label="Jullundhar" value="Jullundhar">Jullundhar</option> 
<option label="Kanpur" value="Kanpur">Kanpur</option> 
<option label="Kolhapur" value="Kolhapur">Kolhapur</option> 
<option label="Kolkata" value="Kolkata">Kolkata</option> 
<option label="Lucknow" value="Lucknow">Lucknow</option> 
<option label="Ludhiana" value="Ludhiana">Ludhiana</option> 
<option label="Madurai" value="Madurai">Madurai</option> 
<option label="Mangalore" value="Mangalore">Mangalore</option> 
<option label="Margaon" value="Margaon">Margaon</option> 
<option label="Mumbai" value="Mumbai">Mumbai</option> 
<option label="Mysore" value="Mysore">Mysore</option> 
<option label="Nagpur" value="Nagpur">Nagpur</option> 
<option label="Nasik" value="Nasik">Nasik</option> 
<option label="NOIDA" value="NOIDA">NOIDA</option> 
<option label="Patna" value="Patna">Patna</option> 
<option label="Panjim" value="Panjim">Panjim</option> 
<option label="Pondicherry" value="Pondicherry">Pondicherry</option> 
<option label="Pune" value="Pune">Pune</option> 
<option label="Raipur" value="Raipur">Raipur</option> 
<option label="Ranchi" value="Ranchi">Ranchi</option> 
<option label="Rourkela" value="Rourkela">Rourkela</option> 
<option label="Rajkot" value="Rajkot">Rajkot</option> 
<option label="Salem" value="Salem">Salem</option> 
<option label="Secunderabad" value="Secunderabad">Secunderabad</option> 
<option label="Shillong" value="Shillong">Shillong</option> 
<option label="Siliguri" value="Siliguri">Siliguri</option> 
<option label="Srinagar" value="Srinagar">Srinagar</option> 
<option label="Surat" value="Surat">Surat</option> 
<option label="Thane" value="Thane">Thane</option> 
<option label="Thiruvananthapuram" value="Thiruvananthapuram">Thiruvananthapuram</option> 
<option label="Tiruchirapalli" value="Tiruchirapalli">Tiruchirapalli</option> 
<option label="Udaipur" value="Udaipur">Udaipur</option> 
<option label="Varanasi" value="Varanasi">Varanasi</option> 
<option label="Vellore" value="Vellore">Vellore</option> 
<option label="Vijaywada" value="Vijaywada">Vijaywada</option> 
<option label="Vishakapatnam" value="Vishakapatnam">Vishakapatnam</option> 
<option label="Other" value="Other">Other</option> 
</SELECT></td></tr>
<tr>
<td>
State : </td><td>
			<select name='state'>
		<option>Andhra Pradesh</option>
		<option>Arunachal Pradesh</option>
		<option>Assam</option>
		<option>Bihar</option>
		<option>Chhattisgarh</option>
		<option>goa</option>
		<option>gujrat</option>
		<option>Haryana</option>
		<option>Himachal Pradesh</option>
		<option>Jammu & Kashmir</option>
		<option>Jharkhand</option>
		<option>Karnataka</option>
		<option>Kerela</option>
		<option>Madhya Pradesh</option>
		<option>Maharastra</option>
		<option>Manipur</option>
		<option>Meghalaya</option>
		<option>Mizoram</option>
		<option>Nagaland</option>
		<option>Orrisa</option>
		<option>Punjab</option>
		<option selected>Rajasthan</option>
		<option>Sikkim</option>
		<option>Tamil Nadu</option>
		<option>Tripura</option>
		<option>Uttar Pradesh</option>
		<option>Uttarakhand</option>
		<option>West Bengal</option>
			</select></td></tr>
<tr><td>Pincode : </td><td><input type="text" name="text13" value""></td></tr>
<tr>
<td>
Phone No. :</td><td> <input type="text" name="text14" value""></td></tr>
<tr><td>
E-mail Id: </td><td><input type="text" name="text15" value""></td></tr>
<tr><td></td><td>
<input type="submit" name="but3" value="SUBMIT"></td></tr>
</table>
</form>
</body>
</html>