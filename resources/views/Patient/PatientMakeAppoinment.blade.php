<html>
<h1> Patient Appoinment Page</h1>

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



<form action='/submitAppoinment' method="POST">
<table>
		<tr>
			<td>Enter Patient id</td>
			<td><input type="text" name="patientid"></td>
		</tr>

		
		<tr>
			<td>Enter Doctor id</td>
			<td><input type="text" name="doctorid"></td>
		</tr>

		<tr>
			<td>Describe your problems</td>
			<td><input type="text" name="patientdisease"></td>
		</tr>

        <tr>
			<td></td>
			<td><input type="submit"   value="submit"></td>
		</tr>



	</table>

	</form> 
</body>
</html>