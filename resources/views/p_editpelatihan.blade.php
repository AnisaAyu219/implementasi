<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Form Percobaan Edit Pelatihan</h1>
<form action="{{ url('update_pelatihan/'.$result->id_pelatihan) }}" method="POST" enctype="multipart/form-data">
    @csrf
	<label>NIM</label>
	<input type="text" name="nim" value="{{ old('nim', $result->nim) }}">
	<br>
	<label>Nama Pelatihan</label>
	<input type="text" name="nama_pelatihan" value="{{ old('nama_pelatihan', $result->nama_pelatihan) }}">
    <br>
    <label>Total Waktu</label>
	<input type="text" name="toral_waktu" value="{{ old('total_waktu', $result->total_waktu) }}">
	<br>
    <label>Institusi Pelatihan</label>
	<input type="text" name="institusi_pelatihan" value="{{ old('institusi_pelatihan', $result->institusi_pelatihan) }}">
	<br>
    <label>Nama Pembimbing</label>
	<input type="text" name="nama_pembimbing" value="{{ old('nama_pembimbing', $result->nama_pembimbing) }}">
	<br>
    <label>Deskripsi</label>
	<input type="text" name="deskripsi" value="{{ old('deskripsi', $result->deskripsi) }}">
	<br>
    <label>Sertifikat Peserta</label>
	<input type="file" name="sertifikat_pesertas">
	<br>
    <label>Sertfikat Kompetensi</label>
	<input type="file" name="sertifikat_kompetensi">
	<br>
    <label>Tahun Pelaksanan</label>
	<input type="text" name="tahun_pelaksanaan" value="{{ old('tahun_pelaksanaan', $result->tahun_pelaksanaan) }}">
	<br>
    <label>Id Pengubah</label>
	<input type="text" name="id_pengubah" value="{{ old('id_pengubah', $result->id_pengubah) }}">
	<br>
	<button value="Submit" type="submit">Submit</button>

</form>
</body>
</html>
