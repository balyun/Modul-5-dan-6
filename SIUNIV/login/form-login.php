<!DOCTYPE html>
<html>
	<head>
		<title>Form Create</title>
	</head>
	<body>
		<h1><b>Login</b></h2>
		<form action = "login.php" method = "POST">
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" id="username" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" id="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
					<input type="submit" value="Login" name="btnSimpan">
					</td>
				</tr>

			</table>
		</form>
	</body>
</html>