<!DOCTYPE html>
<html>
<head>
	<title>Portofolio Mahasiswa TI POLIWANGI</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('inputkarya.css') }}">

	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>

 <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 col-6">
                    <div class="logo">Portofolio Mahasiswa TI POLIWANGI</div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="profile-logo" onclick="toggleSidebar()">
                        <!-- Tempatkan gambar logo profil di sini -->
                        <img src="logo-profile.png" alt="Logo Profil">
                    </div>
                </div>
            </div>
        </div>
    </header>
    @csrf
    <div class="sidebar" id="sidebar">
        <button class="sidebar-close" onclick="toggleSidebar()">✖</button>
        <div class="sidebar-header">
            <img src="logo-profile.png" alt="Logo Profil">
        </div>
        <ul class="menu">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Karya</a></li>
            <li><a href="#">Prestasi</a></li>
            <li><a href="#">Pelatihan</a></li>
            <li><a href="#">Cetak Portofolio</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>

<div class="container_form">
	<div class="title">Form Edit Data Karya</div>
	<div class="content">
		<form action="{{ url('update_karya/'.$result->id_karya) }}" method="POST" enctype="multipart/form-data">
            @csrf
			<div class="user-details">
                <input type="hidden" name="nim" value="{{ old('nim', $result->nim) }}">
				<div class="input-inbox">
					<span class="details">Nama Karya</span>
					<input type="text" name="nama" placeholder="Masukkan Nama Karya" value="{{ old('nama', $result->nama) }}">
				</div>
				<div class="input-inbox">
					<span class="details">Bidang / Jenis Karya</span>
					<select id="buah" name="bidang">
                         <option value="{{ old('bidang', $result->bidang) }}">{{ old('bidang', $result->bidang) }}</option>
			            <option value="Website Development">Website Development</option>
			            <option value="Mobile Development">Mobile Development</option>
			        </select>

				</div>
				<div class="input-inbox">
					<span class="details">Link Karya</span>
					<input type="text" name="link_karya" placeholder="Masukkan Link Karya" value="{{ old('link_karya', $result->link_karya) }}">
				</div>
				<div class="">
					<span class="details">Dokumentasi Karya</span>
					<br>
					<br>
					<input type="file" name="dokumentasi">
				</div>
				<div class="input-inbox">
					<span class="details">Deskripsi</span>
					<textarea  rows="4" cols="50" name="deskripsi">{{ old('deskripsi', $result->deskripsi) }}</textarea>
				</div>
			</div>
			<div class="button">
				<input type="submit" name="" value="Submit">
			</div>
		</form>
	</div>
</div>
<script src="scripts.js"></script>
</body>
</html>
