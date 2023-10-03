<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Form Input Karya</h1>

<form action="/api/login_user" method="POST">
	<label>Username</label>
	<input type="text" name="username">
	<br>
	<label>Password</label>
	<input type="password" name="password">
	<br>
	<label>User Type</label>
    <select id="pilih_user_type" name="user_type">
        <option value="mahasiswa">Mahasiswa</option>
        <option value="dosen">Dosen</option>
        <option value="admin">Admin</option>
    </select>
<br>
	<button value="Submit" type="submit">Submit</button>

</form>

</body>
</html>
