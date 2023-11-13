<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Percobaan Table Pelatihan</h1>
<table>
<tr>
	<th>Nama Pelatihan</th>
	<th>Total Waktu</th>
    <th>Institusi Pelatihan</th>
    <th>Nama Pembimbing</th>
    <th>Deskripsi</th>
    <th>Sertifikat Peserta</th>
    <th>Sertifikat Kompetensi</th>
    <th>Tahun Pelaksanaan</th>
    <th>NIM</th>
    <th>Id Pengubah</th>
	<th>Action</th>
</tr>
@foreach ($result as $p)
<tr>
	<td>{{ $p->nama_pelatihan }}</td>
    <td>{{ $p->total_waktu }}</td>
    <td>{{ $p->institusi_pelatihan }}</td>
    <td>{{ $p->nama_pembimbing }}</td>
    <td>{{ $p->deskripsi }}</td>
    <td>
        <img src="{{ $p->sertifikat_peserta }}" alt="Dokumentasi Karya" width="100"></td>
        <td>
            <img src="{{ $p->sertifikat_kompetensi }}" alt="Dokumentasi Karya" width="100"></td>
    <td>
    <td>{{ $p->tahun_pelaksanaan }}</td>
    <td>{{ $p->nim }}</td>
    <td>
        <form method="POST" action="{{ url('/delete_pelatihan/'.$p->id_pelatihan) }}">
            @csrf
            @method('DELETE')
            <a href="{{ url('/get_detail_pelatihan/'.$p->id_pelatihan) }}">Edit</a>
            <button type="submit">Delete</button>
        </form>
        </td>


</tr>
@endforeach
</table>
</body>
</html>
