<!DOCTYPE html>
<html>
<head>
	 <title>Portofolio Mahasiswa TI POLIWANGI</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="inputpelatihan.css">
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
	<div class="title">Form Input Data Pelatihan / Seminar</div>
	<div class="content">
		<form action="#">
			<div class="user-details">
                <input type="hidden" name="nim" value="21001">
				<div class="input-inbox">
					<span class="details">Nama Pelatihan / Seminar</span>
					<input type="text" name="" placeholder="Masukkan Nama Pelatihan atau Seminar">
				</div>

				<div class="input-inbox">
					<span class="details">Institusi Pelatihan / Seminar</span>
					<input type="text" name="" placeholder="Masukkan Institusi Pelatihan / Seminar">
				</div>

                <div class="input-inbox">
					<span class="details">Link Karya</span>
					<input type="text" name="" placeholder="Masukkan Link Karya">
				</div>

                        <div class="input-inbox">
                            <span class="details">Bidang / Jenis Pelatihan</span>
                            <select id="buah" name="bidang">
                                 <option value="">--Pilih Jenis Karya--</option>
                                <option value="Website Development">Website Development</option>
                                <option value="Mobile Development">Mobile Development</option>
                            </select>

                        </div>

                        <div class="input-doc">
                            <span class="details">Upload Sertifikat</span>
                                    <input type="file"name="" ><br>
                                </div>

				<div class="input-inbox">
					<span class="details">Deskripsi</span>
					<textarea  rows="4" cols="50" name=""></textarea>
				</div>
			</div>
			<div class="button">
				<input type="submit" name="" value="Submit">
			</div>
		</form>
	</div>
</div>

<!-- Include Bootstrap JS (Opsional) -->
    <script src="scripts.js"></script>

</body>
</html>
