<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		html, body{
			margin: 0px;
		}
		img{
			margin: auto;
		}
		form{
			width : 50%;
			text-align: center;
			margin: auto;
			margin-left: 30%;
		}
		#input input{
			width: 120%;
		}
		#text{
			margin-right: 30px;
			float: left;
		}
	</style>
	<!--bootstrap css-->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Login Page Using PHP</title>
</head>
<body>
	<div >
	<img src="undraw_secure_login_pdn4.png" width="40%" height="40%">
	<form method="post" action="affichage.php">
		<table>
			<tr>
				<td id="text">
					<label>Le nom : </label>
				</td>
				<td id="input">
					<input type="text" name="nom" >
				</td>
			</tr>
			<tr>
				<td id="text">
					<label>L'email : </label>
				</td>
				<td id="input">
					<input type="text" name="email">
				</td>
			</tr>
			<tr>
				<td id="text">
					<label>Le mot de pass :</label>
				</td>
				<td id="input">
					<input type="password" name="motpass">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<br>
					<input type="submit" value="Connecter">
				</td>
			</tr>
		</table>      
	</form>
	</div>
   
</body>
</html>