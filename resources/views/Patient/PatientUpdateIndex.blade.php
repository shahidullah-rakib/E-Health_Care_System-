<html>
<h1> Patient Update page</h1>
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



<form action="update" method="POST">
@csrf
<table>
        <tr>
			<td>Id</td>
			<td><input type="select" name="patientId" ></td>
		</tr>

		<tr>
			<td>Name</td>
			<td><input type="text" name="patientName"></td>
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
			<td><button type="submit"> Update</button> </td>
		</tr>
	</table>

	</form>
</body>
</html>