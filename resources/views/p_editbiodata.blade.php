<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Form Percobaan Edit Biodata</h1>
<form action="{{ url('update_biodata/'.$result->id_biodata) }}" method="POST" enctype="multipart/form-data">
    @csrf
	<label>NIM</label>
	<input type="text" name="nim" value="{{ old('nim', $result->nim) }}">
	<br>
	<label>Nama Lengkap</label>
	<input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $result->nama_lengkap) }}">
    <br>
    <label>Program Studi</label>
	<input type="text" name="program_studi" value="{{ old('program_studi', $result->program_studi) }}">
	<br>
    <label>Semester</label>
	<input type="text" name="semester" value="{{ old('semester', $result->semester) }}">
	<br>
    <label>Jenis Kelamin</label>
	<input type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin', $result->jenis_kelamin) }}">
	<br>
    <label>No Telepon</label>
	<input type="text" name="no_telp" value="{{ old('no_telp', $result->no_telp) }}">
	<br>
    <label>Email</label>
	<input type="text" name="email" value="{{ old('email', $result->email) }}">
	<br>
    <label>Tempat Lahir</label>
	<input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $result->tempat_lahir) }}">
	<br>
    <label>Tanggal Lahir</label>
	<input type="text" name="tanggal_lahir" value="{{ old('tanggal_lahir', $result->tanggal_lahir) }}">
	<br>
    <label>Profile Singkat</label>
	<textarea name="profile_singkat" id="" cols="30" rows="10" value="{{ old('profile_singkat', $result->profile_singkat) }}"></textarea>
	<br>
    <label>Alamat</label>
	<input type="text" name="alamat" value="{{ old('alamat', $result->alamat) }}">
	<br>
    <label>Foto Profile</label>
	<input type="file" name="foto_profile" value="{{ old('foto_profile', $result->foto_profile) }}">
	<br>
    <label>Keahlian</label>
	<input type="text" name="keahlian" value="{{ old('keahlian', $result->keahlian) }}">
	<br>
    <label>Id Pengubah</label>
	<input type="text" name="id_pengubah" value="{{ old('id_pengubah', $result->id_pengubah) }}">
	<br>
	<button value="Submit" type="submit">Submit</button>

</form>
</body>
</html>
