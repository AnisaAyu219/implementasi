<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Form Percobaan Edit Prestasi</h1>
<form action="{{ url('update_prestasi/'.$result->id_prestasi) }}" method="POST" enctype="multipart/form-data">
    @csrf
	<label>NIM</label>
	<input type="text" name="nim" value="{{ old('nim', $result->nim) }}">
	<br>
	<label>Nama Prestasi</label>
	<input type="text" name="nama_prestasi" value="{{ old('nama_prestasi', $result->nama_prestasi) }}">
    <br>
    <label>Program Studi</label>
	<input type="text" name="program_studi" value="{{ old('program_studi', $result->program_studi) }}">
	<br>
    <label>Jenis Keahlian</label>
	<input type="text" name="jenis_keahlian" value="{{ old('jenis_keahlian', $result->jenis_keahlian) }}">
	<br>
    <label>Tingkat Prestasi</label>
	<input type="text" name="tingkat_prestasi" value="{{ old('tingkat_prestasi', $result->tingkat_prestasi) }}">
	<br>
    <label>Tahun Prestasi</label>
	<input type="text" name="tahun_prestasi" value="{{ old('tahun_prestasi', $result->tahun_prestasi) }}">
	<br>
    <label>Tanggal Pencapaian</label>
	<input type="text" name="tanggal_pencapaian" value="{{ old('tanggal_pencapaian', $result->tanggal_pencapaian) }}">
	<br>
    <label>Penyelenggara</label>
	<input type="text" name="penyelenggara" value="{{ old('penyelenggara', $result->penyelenggara) }}">
	<br>
    <label>Lokasi Penyelenggara</label>
	<input type="text" name="lokasi_penyelenggara" value="{{ old('lokasi_peyelenggara', $result->lokasi_penyelenggara) }}">
	<br>
    <label>Jenis Pencapaian</label>
	<input type="text" name="jenis_pencapaian" value="{{ old('jenis_pencapaian', $result->jenis_pencapaian) }}">
	<br>
    <label>Dokumentasi Prestasi</label>
	<input type="file" name="dokumentasi_prestasi">
	<br>
    <label>Jenis Aktifitas Mahasiswa</label>
	<input type="text" name="jenis_aktifitas_mahasiswa" value="{{ old('jenis_aktifitas_mahasiswa', $result->jenis_aktifitas_mahasiswa) }}">
	<br>
    <label>Dosen Pembimbing</label>
	<input type="text" name="dosen_pembimbing" value="{{ old('dosen_pembimbing', $result->dosen_pembimbing) }}">
	<br>
    <label>No Surat Tugas</label>
	<input type="text" name="no_surat_tugas" value="{{ old('no_surat_tugas', $result->no_surat_tugas) }}">
	<br>
    <label>Deskripsi</label>
	<input type="text" name="deskripsi" value="{{ old('deskripsi', $result->deskripsi) }}">
	<br>
    <label>Keterangan</label>
	<input type="text" name="keterangan" value="{{ old('keterangan', $result->keterangan) }}">
	<br>
    <label>Id Pengubah</label>
	<input type="text" name="id_pengubah" value="{{ old('id_pengubah', $result->id_pengubah) }}">
	<br>
	<button value="Submit" type="submit">Submit</button>

</form>
</body>
</html>
