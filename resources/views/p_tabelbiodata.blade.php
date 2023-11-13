<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Percobaan Table Biodata</h1>
<table>
<tr>
	<th>Nim</th>
	<th>Nama Lengkap</th>
	<th>Program Studi</th>
    <th>Semester</th>
    <th>Jenis Kelamin</th>
    <th>No Telepon</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Profile Singkat</th>
    <th>Keahlian</th>
    <th>Foto Profile</th>
    <th>Id Pengubah</th>
	<th>Action</th>
</tr>
@foreach ($result as $p)
<tr>
	<td>{{ $p->nim }}</td>
    <td>{{ $p->nama_lengkap }}</td>
    <td>{{ $p->program_studi}}</td>
    <td>{{ $p->semester }}</td>
    <td>{{ $p->jenis_kelamin }}</td>
    <td>{{ $p->no_telp }}</td>
    <td>{{ $p->email }}</td>
    <td>{{ $p->alamat }}</td>
    <td>{{ $p->tempat_lahir }}</td>
    <td>{{ $p->tanggal_lahir }}</td>
    <td>{{ $p->profile_singkat }}</td>
    <td>{{ $p->keahlian }}</td>
    <td><img src="{{ asset( $p->foto_profile) }}" alt="Deskripsi Gambar">
    </td>
    <td>{{ $p->id_pengubah }}</td>
    <td>
        <form method="POST" action="{{ url('/delete_biodata/'.$p->id_biodata) }}">
            @csrf
            @method('DELETE')
            <a href="{{ url('/get_detail_biodata/'.$p->id_biodata) }}">Edit</a>
            <button type="submit">Delete</button>
            <a href=""></a>
    </td>
</tr>
@endforeach
</table>
</body>
</html>
