<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Percobaan Table Prestasi</h1>
<table>
<tr>
	<th>Nim</th>
	<th>Nama Prestasi</th>
	<th>Program Studi</th>
    <th>Tingkat Prestasi</th>
    <th>Tahun Prestasi</th>
    <th>Taggal Pencapaian</th>
    <th>Penyelenggara</th>
    <th>Lokasi Peneyelenggara</th>
    <th>Jenis Pencapaian</th>
    <th>Dokumentasi Prestasi</th>
    <th>Jenis Aktifitas Mahasiswa</th>
    <th>Dosen Pembimbing</th>
    <th>No Surat Tugas</th>
    <th>Deskripsi</th>
    <th>Keterangan</th>
    <th>Id Pengubah</th>
	<th>Action</th>
</tr>
@foreach ($result as $p)
<tr>
	<td>{{ $p->nim }}</td>
    <td>{{ $p->nama_prestasi }}</td>
    <td>{{ $p->program_studi}}</td>
    <td>{{ $p->jenis_keahlian }}</td>
    <td>{{ $p->tingkat_prestasi }}</td>
    <td>{{ $p->tahun_prestasi }}</td>
    <td>{{ $p->tanggal_pencapaian }}</td>
    <td>{{ $p->penyelenggara }}</td>
    <td>{{ $p->lokasi_penyelenggara }}</td>
    <td>{{ $p->jenis_pencapaian }}</td>
    <td><img src="{{ asset( $p->dokumentasi_prestasi) }}" alt="Deskripsi Gambar">
    </td>
    <td>{{ $p->jenis_aktifitas_mahasiswa }}</td>
    <td>{{ $p->dosen_pembimbing }}</td>
    <td>{{ $p->no_surat_tugas }}</td>
    <td>{{ $p->deskripsi }}</td>
    <td>{{ $p->keterangan }}</td>
    <td>{{ $p->id_pengubah }}</td>
    <td>
        <form method="POST" action="{{ url('/delete_prestasi/'.$p->id_prestasi) }}">
            @csrf
            @method('DELETE')
            <a href="{{ url('/get_detail_prestasi/'.$p->id_prestasi) }}">Edit</a>
            <button type="submit">Delete</button>
            <a href=""></a>
    </td>
</tr>
@endforeach
</table>
</body>
</html>
