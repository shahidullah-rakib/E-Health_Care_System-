<html>
<h1> Patient Sign up</h1>
<body>

<style>
body {
  background-color: green;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
h1 {
  font-size: 50px;
}
</style>



<form action="submit" method="POST">
<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="patientName"></td>
		</tr>


		<tr>
			<td>Password</td>
			<td><input type="password" name="patientPassword"></td>
		</tr>


		<tr>
			<td>Gender</td>
			<td><input type="text" name="patientGender"></td>
		</tr>
        <tr>
			<td>Age</td>
			<td><input type="text" name="patientAge"></td>
		</tr>
        <tr>
			<td>Email</td>
			<td><input type="text" name="patientEmail"></td>
		</tr>
		
		 <tr>
			<td>Date</td>
			<td><input type="text" name="patientDate"></td>
		</tr>
		
		<tr>
			<td>Phone</td>
			<td><input type="text" name="patientPhone"></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="create" value="submit"></td>
		</tr>
	</table>
	@foreach($errors->all() as $error)
	{{$error}}<br>
	@endforeach 

	</form> 
    <a href='/PatientUpdatePage'> Update Information </a>|
	<a href='/PatientDeletePage'> Delete account </a>|
	<a href='/ChangePasswordPage'> Change Password </a>
</body>
</html>