

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


	<form method="post" action="/reception/emergency">
					<table border="1" width="100%" >
						<tr height="80px">
							
						 	<td colspan="2" style="background-color: rgb(67, 65, 33)">
						 		<div>
						 			<b style="color: rgb(67, 5, 133);" align="center"></b> 
						 			<span style="float: right;"> Logged in as <a style="color: black;" href="dashboard.php"></a> | <a href="Home.html" style="color: blue">Logout</a> </span>
						 		</div>
								
							</td>

						</tr>
						<tr height="600px">
							<td >
								 
								
								<h2>
									
									*<a href="/reception/dashboard/{{$id}}" style="color: rgb(1, 18, 92);">Dashboard</a><br/>
									*<a href="/reception/edit/{{$id}}" style="color: rgb(1, 18, 92);" >Edit Profile</a><br/>
									*<a href="/reception/docSche" style="color: rgb(1, 18, 92);">View Doctor Schedule</a><br/>
									*<a href="/reception/chngpass/{{$id}}" style="color: rgb(1, 18, 92);">Change Password</a><br/>
									*<a href="/reception/patientsbill" style="color: rgb(1, 18, 92);">Patients Bill</a><br/>
									*<a href="/reception/rooms" style="color: rgb(1, 18, 92);">Rooms</a><br/>
									*<a href="/reception/search" style="color: rgb(1, 18, 92);">Search</a><br/>
									*<a href="/reception/emergency" style="color: rgb(1, 18, 92);">Emergency</a><br/>							
									*<a href="/reception/discount" style="color: rgb(1, 18, 92);">Patient Discount</a><br/>	
									*<a href="/reception/upp" style="color: rgb(1, 18, 92);">Profile Picture</a><br/>	
									*<a href="/reception/chatbox" style="color: rgb(1, 18, 92);">Chat Box</a><br/>							
									*<a href="/reception/withdraw" style="color: rgb(1, 18, 92);">Salary Withdaw</a><br/>
									*<a href="/reception/trans" style="color: rgb(1, 18, 92);">Transactions</a><br/>
									*<a href="/reception/patinfo" style="color: rgb(1, 18, 92);">Patients Information</a><br/>
									*<a href="/reception/review" style="color: rgb(1, 18, 92);">View Review</a><br/>
									*<a href="/reception/logout" style="color: rgb(1, 18, 92);">Logout</a>
								</h2>

							</td>
							<td>
                                <table >
                                   
                                        <tr>
                                            <th>Bank Name</th>
                                            
                                            <th>Amount</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                   
                                  
										@foreach ($values as $val )
											
										
                                        <tr>
                                            <td><input type="text" name="bname" value="{{$val->bankname}}"></td>
                                            <td><input type="text" name="amount" value="{{$val->amount}}"></td>
                                            <td><input type="text" name="date" value="{{$val->date}}"></td>
                                            
                                        </tr>
                                        @endforeach
                                   
                                </table>
							
							 

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