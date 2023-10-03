<!DOCTYPE html>
<html>
<head>
	<title>Membuat Form Registrasi</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="container">
	<div class="title" align="center">Login</div>
	<div class="content">
		<form action="/api/login_mahasiswa" method="post">
			<div class="user-details">
				<div class="input-inbox">
					<span class="details">Username</span>
					<input type="text" name="username">
				</div>
                <div class="input-inbox">
					<span class="details">Password</span>
					<input type="password" name="password" >
				</div>
                <div class="forgot">Lupa Password ?</div>

			</div>
			<div class="button">
				<input type="submit" name="" value="login">
			</div>
		</form>
	</div>
</div>
</body>
</html>
