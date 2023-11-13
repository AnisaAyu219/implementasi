<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Form Percobaan Register Admin</h1>
<form action="/register_admin" method="POST">
    @csrf
	<label>Username</label>
	<input type="text" name="username">
	<br>
	<label>Nama</label>
	<input type="text" name="nama">
    <br>
    <label>Password</label>
	<input type="text" name="password">
	<br>
    <label>Password Confirmation</label>
	<input type="text" name="password_confirmation">
	<br>
	<button value="Submit" type="submit">Register</button>

</form>
</body>
</html>
