

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
									
									*<a href="/reception/searchdoc" style="color: rgb(1, 18, 92);">Search Doctor</a><br/>
									*<a href="/reception/searchpat" style="color: rgb(1, 18, 92);">Search Patient</a><br/>
																	
									
									*<a href="Home.html" style="color: rgb(1, 18, 92);">Logout</a>
								</h2>

							</td>
							<td>
								<h1 style="text-align: center">Search Here</h1>
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