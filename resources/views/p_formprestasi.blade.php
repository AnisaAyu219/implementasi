<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Form Percobaan Input Prestasi</h1>
<form action="/input_prestasi" method="POST" enctype="multipart/form-data">
    @csrf
	<label>NIM</label>
	<input type="text" name="nim">
	<br>
	<label>Nama Prestasi</label>
	<input type="text" name="nama_prestasi">
    <br>
    <label>Program Studi</label>
	<input type="text" name="program_studi">
	<br>
    <label>Jenis Keahlian</label>
	<input type="text" name="jenis_keahlian">
	<br>
    <label>Tingkat Prestasi</label>
	<input type="text" name="tingkat_prestasi">
	<br>
    <label>Tahun Prestasi</label>
	<input type="text" name="tahun_prestasi">
	<br>
    <label>Tanggal Pencapaian</label>
	<input type="text" name="tanggal_pencapaian">
	<br>
    <label>Penyelenggara</label>
	<input type="text" name="penyelenggara">
	<br>
    <label>Lokasi Penyelenggara</label>
	<input type="text" name="lokasi_penyelenggara">
	<br>
    <label>Jenis Pencapaian</label>
	<input type="text" name="jenis_pencapaian">
	<br>
    <label>Dokumentasi Prestasi</label>
	<input type="file" name="dokumentasi_prestasi">
	<br>
    <label>Jenis Aktifitas Mahasiswa</label>
	<input type="text" name="jenis_aktifitas_mahasiswa">
	<br>
    <label>Dosen Pembimbing</label>
	<input type="text" name="dosen_pembimbing">
	<br>
    <label>No Surat Tugas</label>
	<input type="text" name="no_surat_tugas">
	<br>
    <label>Deskripsi</label>
	<input type="text" name="deskripsi">
	<br>
    <label>Keterangan</label>
	<input type="text" name="keterangan">
	<br>
    <label>Id Pengubah</label>
	<input type="text" name="id_pengubah">
	<br>
	<button value="Submit" type="submit">Submit</button>

</form>
</body>
</html>
