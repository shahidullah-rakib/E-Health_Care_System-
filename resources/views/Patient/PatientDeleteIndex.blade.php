<html>
<h1> Patient Delete page</h1>
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



<form action="delete" method="POST">
@csrf
<table>
        <tr>
			<td>Id</td>
			<td><input type="select" name="patientId" ></td>
		</tr>
        <tr>
			<td></td>
			<td><button type="submit"> Delete account </button> </td>
		</tr>
	</table>

	</form>
</body>
</html>