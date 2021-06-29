<html>
<h1> Change Password page</h1>
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



<form action="/update" method="POST">
@csrf
<table>
        <tr>
			<td>Old password</td>
			<td><input type="password" name="current_password" ></td>
		</tr>

        <tr>
			<td>New Password</td>
			<td><input type="password" name="new_password"></td>
		</tr>


        <tr>
			<td></td>
			<td><button type="submit"> Change Password </button> </td>
		</tr>
	</table>

	</form>
</body>
</html>