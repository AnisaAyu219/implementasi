<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Form Input Komentar</h1>
<form action="/input_komentar" method="POST">
    @csrf
	<label>Id Karya</label>
	<input type="text" name="id_karya">
	<br>
	<label>Isi</label>
	<input type="text" name="isi">
    <br>
    <label>Nim</label>
	<input type="text" name="nim">
    <br>
	<button value="Submit" type="submit">Submit</button>

</form>
</body>
</html>
