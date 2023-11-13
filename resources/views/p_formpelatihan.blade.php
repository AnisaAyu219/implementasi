<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Form Percobaan Input Pelatihan</h1>
<form action="/input_pelatihan" method="POST" enctype="multipart/form-data">
    @csrf
	<label>NIM</label>
	<input type="text" name="nim">
	<br>
	<label>Nama Pelatihan</label>
	<input type="text" name="nama_pelatihan">
    <br>
    <label>Total Waktu</label>
	<input type="text" name="total_waktu">
	<br>
    <label>Institusi Pelatihan</label>
	<input type="text" name="institusi_pelatihan">
	<br>
    <label>Nama Pembimbing</label>
	<input type="text" name="nama_pembimbing">
	<br>
    <label>Deskripsi</label>
	<input type="text" name="deskripsi">
	<br>
    <label>Sertifikat Peserta</label>
	<input type="file" name="sertifikat_peserta">
	<br>
    <label>Sertifikat Kompetensi</label>
	<input type="file" name="sertifikat_kompetensi">
	<br>
    <label>Tahun Pelaksanaan</label>
	<input type="text" name="tahun_pelaksanaan">
	<br>
    <label>Id Pengubah</label>
	<input type="text" name="id_pengubah">
	<br>
	<button value="Submit" type="submit">Submit</button>

</form>
</body>
</html>
