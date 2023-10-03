<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Table Pelatihan</h1>
<table>
<tr>
	<th>Nama</th>
	<th>Deskripsi</th>
	<th>Bidang</th>
	<th>Sertifikat</th>
	<th>Tahun Pelaksanaan</th>
	<th>NIM</th>
	<th>Action</th>
</tr>
@foreach ($result as $p)
<tr>
	<td>{{ $p->nama }}</td>
    <td>{{ $p->deskripsi }}</td>
    <td>{{ $p->bidang }}</td>
    <td>
    <img src="{{ $p->sertifikat }}" alt="Sertifikat" width="100"></td>
    <td>{{ $p->tahun_pelaksanaan }}</td>
    <td>{{ $p->nim }}</td>
    <td>Edit || Delete</td>
</tr>
@endforeach
</table>
</body>
</html>
