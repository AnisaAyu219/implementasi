<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Form Percobaan Register Admin</h1>
<form action="/login_user" method="POST">
    @csrf
	<label>User Type</label>
	<input type="text" name="user_type">
	<br>
	<label>Username</label>
	<input type="text" name="username">
    <br>
    <label>Password</label>
	<input type="text" name="password">
	<br>
	<button value="Submit" type="submit">Register</button>

</form>
</body>
</html>
