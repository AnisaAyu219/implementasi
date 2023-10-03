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
	<th>Nama</th>
	<th>Deskripsi</th>
	<th>Bidang</th>
	<th>Dokumentasi</th>
	<th>Link Karya</th>
	<th>NIM</th>
	<th>Action</th>
</tr>
@foreach ($result as $p)
<tr>
	<td>{{ $p->nama }}</td>
    <td>{{ $p->deskripsi }}</td>
    <td>{{ $p->bidang }}</td>
    <td>
    <img src="{{ $p->dokumentasi }}" alt="Dokumentasi Karya" width="100"></td>
    <td>{{ $p->link_karya }}</td>
    <td>{{ $p->nim }}</td>
    <td>
        <form action="{{ url('/get_edit_karya/'.$p->id_karya) }}" method="Post">
        <a href="{{ url('/delete_karya/'.$p->id_karya) }}">delete</a>
        @csrf
        @method('GET')
        <button type="submit" >Edit</button>
        </form>
        </td>
</tr>
@endforeach
</table>
</body>
</html>
