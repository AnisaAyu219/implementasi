<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Percobaan Table Admin</h1>
<table>
<tr>
	<th>Nama</th>
	<th>Username</th>
	<th>Password</th>
	<th>Action</th>
</tr>
@foreach ($result as $p)
<tr>
	<td>{{ $p->nama }}</td>
    <td>{{ $p->username }}</td>
    <td>{{ $p->password }}</td>
    <td>
        <form method="POST" action="{{ url('/delete_admin/'.$p->id_admin) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
    </td>
</tr>
@endforeach
</table>
</body>
</html>
