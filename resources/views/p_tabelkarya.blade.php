<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Table Karya</h1>
<table>
<tr>
	<th>Nama Karya</th>
	<th>Tanggal Pembuatan</th>
	<th>Jenis Keahlian</th>
	<th>Link Karya</th>
	<th>Deskripsi</th>
	<th>Dosen Pembimbing</th>
    <th>Dokumentasi</th>
    <th>Id Pengubah</th>
    <th>NIM</th>
	<th>Action</th>
</tr>
@foreach ($result as $p)
<tr>
	<td>{{ $p->nama_karya }}</td>
    <td>{{ $p->tanggal_pembuatan }}</td>
    <td>{{ $p->jenis_keahlian }}</td>
    <td>{{ $p->link_karya }}</td>
    <td>{{ $p->deskripsi }}</td>
    <td>{{ $p->dosen_pembimbing }}</td>
    <td>
        <img src="{{ $p->dokumentasi }}" alt="Dokumentasi Karya" width="100"></td>
    <td>{{ $p->id_pengubah }}</td>
    <td>{{ $p->nim }}</td>
    <td>
        <form method="POST" action="{{ url('/delete_karya/'.$p->id_karya) }}">
            @csrf
            @method('DELETE')
            <a href="{{ url('/get_detail_karya/'.$p->id_karya) }}">Edit</a>
            <button type="submit">Delete</button>
        </form>
        </td>
</tr>
@endforeach
</table>
</body>
</html>
