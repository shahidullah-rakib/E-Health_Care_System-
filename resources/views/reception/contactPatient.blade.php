

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
									
									*<a href="/reception/conadmin" style="color: rgb(1, 18, 92);">Contact Admin</a><br/>
									*<a href="/reception/condoctor" style="color: rgb(1, 18, 92);">Contact Doctor</a><br/>
									*<a href="/reception/conpatient" style="color: rgb(1, 18, 92);">Contact Patient</a><br/>								
									
									*<a href="/reception/logout" style="color: rgb(1, 18, 92);">Logout</a>
								</h2>

							</td>
							<td>
								<fieldset style="width: 300px;height: 300px; text-align: center;margin: auto;background-color: rgb(141, 181, 195);">
					                <legend><h2><b><i> Patient ChatBox</i></b></h2></legend>
						                <div>
							                <textarea id="adm" style="width: 200px;height: 80px">
							
							                </textarea>
						                </div>
						                <div>
							                <input type="text" name="" id="chat" style="width: 150px;height: 40px" value="type here..."><br/>
							                
						                </div>
										<div>
							                
							                <input style="background-color: yellow" type="button" name="" value="Send" onclick="getText()">
							                <a href="dashboard.php">Back</a>
						                </div>
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