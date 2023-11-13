<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Form Percobaan Input Biodata</h1>
<form action="/input_biodata" method="POST" enctype="multipart/form-data">
    @csrf
	<label>NIM</label>
	<input type="text" name="nim">
	<br>
	<label>Nama Lengkap</label>
	<input type="text" name="nama_lengkap">
    <br>
    <label>Program Studi</label>
	<input type="text" name="program_studi">
	<br>
    <label>Semester</label>
	<input type="text" name="semester">
	<br>
    <label>Jenis Kelamin</label>
	<input type="text" name="jenis_kelamin">
	<br>
    <label>No Telepon</label>
	<input type="text" name="no_telp">
	<br>
    <label>Email</label>
	<input type="text" name="email">
	<br>
    <label>Tempat Lahir</label>
	<input type="text" name="tempat_lahir">
	<br>
    <label>Tanggal Lahir</label>
	<input type="text" name="tanggal_lahir">
	<br>
    <label>Profile Singkat</label>
	<textarea name="profile_singkat" id="" cols="30" rows="10"></textarea>
	<br>
    <label>Alamat</label>
	<input type="text" name="alamat">
	<br>
    <label>Foto Profile</label>
	<input type="file" name="foto_profile">
	<br>
    <label>Keahlian</label>
	<input type="text" name="keahlian">
	<br>
    <label>Id Pengubah</label>
	<input type="text" name="id_pengubah">
	<br>
	<button value="Submit" type="submit">Submit</button>

</form>
</body>
</html>
