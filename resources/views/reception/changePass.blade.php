

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<style>
body {
  background-image: url('/public/images/res.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
h1 {
  font-size: 80px;
}
</style>


	<form method="" action="">
					<table border="1" width="100%" >
						<tr height="80px">
							
						 	<td colspan="2">
						 		<div>
						 			<b style="color: rgb(67, 5, 133);" align="center"></b> 
						 			<span style="float: right;"> Logged in as <a style="color: black;" href="dashboard.php"></a> | <a href="Home.html" style="color: blue">Logout</a> </span>
						 		</div>
								
							</td>

						</tr>
						<tr height="600px">
							<td >
								 
								
								<h2>
									
									*<a href="/reception/dashboard" style="color: rgb(1, 18, 92);">Dashboard</a><br/>
									*<a href="/reception/edit" style="color: rgb(1, 18, 92);" >Edit Profile</a><br/>
									*<a href="/reception/docSche" style="color: rgb(1, 18, 92);">View Doctor Schedule</a><br/>
									*<a href="/reception/chngPass" style="color: rgb(1, 18, 92);">Change Password</a><br/>
									*<a href="/reception/conadmin" style="color: rgb(1, 18, 92);">Contact Admin</a><br/>
									*<a href="/reception/condoctor" style="color: rgb(1, 18, 92);">Contact Doctor</a><br/>
									*<a href="/reception/conpatient" style="color: rgb(1, 18, 92);">Contact Patient</a><br/>								
									*<a href="/reception/patientsbill" style="color: rgb(1, 18, 92);">Patient Bill</a><br/>
									*<a href="/reception/rooms" style="color: rgb(1, 18, 92);">Rooms</a><br/>
									*<a href="/reception/emergency" style="color: rgb(1, 18, 92);">Emergency</a><br/>
									*<a href="/reception/discount" style="color: rgb(1, 18, 92);">Patient Discount</a><br/>
									*<a href="sel.html" style="color: rgb(1, 18, 92);">Create Bill</a><br/>
									*<a href="sel.html" style="color: rgb(1, 18, 92);">Search Doctor</a><br/>
									*<a href="sel.html" style="color: rgb(1, 18, 92);">Search Patient</a><br/>
									*<a href="sel.html" style="color: rgb(1, 18, 92);">Patient History</a><br/>
									*<a href="sel.html" style="color: rgb(1, 18, 92);">Salary Withdaw</a><br/>
									*<a href="Home.html" style="color: rgb(1, 18, 92);">Logout</a>
								</h2>

							</td>
                            <td>
			                    <fieldset style="width: 550px;height: 250px; text-align: center;margin: auto;background-color: rgb(44, 117, 219);">
				                    <legend><b>CHANGE PASSWORD</b></legend>
					                    <table>
						                    <tr>							
						 	                    <td>
								                    Current Password :
							                    </td>
							                    <td> <input type="Password" name="cpass" id="ccpass"><br>
								                    <span style="float: right;color: red;"   id="cscp"></span>
							                    </td>	
						                    </tr>
						                    <tr>
							                    <td>
								                    <h5 style="color: green">New Password :</h5>							 
							                    </td>
							                    <td>
								                    <input type="Password" name="npass" id="npass"><br>
								                    <span style="color: red;"   id="csnp"></span>
							                    </td>
						                    </tr>
						                    <tr>
							                    <td>
								                    <h5 style="color: red">Retype New Password :</h5>							 
							                    </td>
							                    <td>
								                    <input type="Password" name="rnpass" id="rnpass"><br>
								                    <span style="color: red;"   id="csrn"></span>
							                    </td>
						                    </tr>						
					                    </table>
					
					                    <input style="background-color: green" type="submit" name="submit" value="Submit">
						
			                    </fieldset>
                            </td>


						</tr>
						<tr height="20px">
							<td colspan="2">
								<p align="center">Copyright © 2021</p> 
							</td>
						</tr>

						
					</table>
				
	</form>


	


	
</body>
</html>