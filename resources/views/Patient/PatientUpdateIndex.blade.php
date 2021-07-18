<html>
<h1> Patient Update page </h1>
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
			<td><input type="text" name="id"></td>
		</tr>

        <tr>
			<td>name</td>
			<td><input type="text" name="name"></td>
		</tr>

		
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>

		<tr>
			<td>Email</td>
			<td><input type="text" name="email"></td>
		</tr>


		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
        
		<tr>
			<td>Type</td>
			<td><input type="text" name="type" value="patient"></td>
		</tr>

		<tr>
			<td>Blood Group</td>
			<td><input type="text" name="bloodGroup"></td>
		</tr>
		
		<tr>
			<td>Phone</td>
			<td><input type="text" name="phone"></td>
		</tr>


		<tr>
			<td>Address</td>
			<td><input type="text" name="address"></td>
		</tr>

		<tr>
			<td>Upload image</td>
			<td> <input type="file" name="image"></td>
		</tr>


			<td></td>
			<td><button type="submit"> Update</button> </td>
		</tr>
	</table>

	@foreach($errors->all() as $error)
	{{$error}}<br>
	@endforeach


	</form>
</body>
</html>