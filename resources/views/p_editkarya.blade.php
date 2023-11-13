<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Form Percobaan Edit Karya</h1>
<form action="{{ url('update_karya/'.$result->id_karya) }}" method="POST" enctype="multipart/form-data">
    @csrf
	<label>NIM</label>
	<input type="text" name="nim" value="{{ old('nim', $result->nim) }}">
	<br>
	<label>Nama Karya</label>
	<input type="text" name="nama_karya" value="{{ old('nama_karya', $result->nama_karya) }}">
    <br>
    <label>Tanggal Pembuatan</label>
	<input type="text" name="tanggal_pembuatan" value="{{ old('tanggal_pembuatan', $result->tanggal_pembuatan) }}">
	<br>
    <label>Jenis Keahlian</label>
	<input type="text" name="jenis_keahlian" value="{{ old('jenis_keahlian', $result->jenis_keahlian) }}">
	<br>
    <label>Link Karya</label>
	<input type="text" name="link_karya" value="{{ old('link_karya', $result->link_karya) }}">
	<br>
    <label>Deskripsi</label>
	<input type="text" name="deskripsi" value="{{ old('deskripsi', $result->deskripsi) }}">
	<br>
    <label>Dosen Pembimbing</label>
	<input type="text" name="dosen_pembimbing" value="{{ old('dosen_pembimbing', $result->dosen_pembimbing) }}">
	<br>
    <label>Dokumentasi</label>
	<input type="file" name="dokumentasi">
	<br>
    <label>Id Pengubah</label>
	<input type="text" name="id_pengubah" value="{{ old('id_pengubah', $result->id_pengubah) }}">
	<br>
	<button value="Submit" type="submit">Submit</button>

</form>
</body>
</html>
