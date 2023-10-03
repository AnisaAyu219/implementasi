<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Table Komentar</h1>
<table>
<tr>
	<th>Id_Komentar</th>
	<th>Id_Karya</th>
    <th>Isi</th>
	<th>Action</th>
</tr>
@foreach ($result as $p)
<tr>
	<td>{{ $p->id_komentar }}</td>
    <td>{{ $p->id_karya }}</td>
    <td>{{ $p->isi }}</td>
    <td>
        <form action="{{ url('/delete_komentar/'.$p->id_komentar) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>

    </td>


</tr>
@endforeach
</table>
</body>
</html>
