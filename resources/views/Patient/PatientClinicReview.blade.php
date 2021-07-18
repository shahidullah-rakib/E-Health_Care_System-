<html>
<h1> Clinic Review Page</h1>

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



<form action='/submitPatientClinicReview' method="POST">
<table>
		
		<tr>
			<td>Patient id</td>
			<td><input type="text" name="patientid"></td>
		</tr>

		<tr>
			<td>message</td>
			<td><input type="text" name="message"></td>
		</tr>

        <tr>
			<td></td>
			<td><input type="submit"   value="submit"></td>
		</tr>



	</table>

	</form> 
</body>
</html>