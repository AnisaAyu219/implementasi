<HTML>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portofolio Mahasiswa TI POLIWANGI</title>
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
        <!-- Include custom CSS -->
        <link rel="stylesheet" href={{ asset('profile.css') }}>
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 col-6">
                        <div class="logo">Portofolio Mahasiswa TI POLIWANGI</div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="search-box">
                            <!-- Tempatkan kotak pencarian di sini -->
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari...">
                                <button class="btn btn-success" type="button">Cari</button>
                            </div>
                        </div>
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


        <!-- Include Bootstrap JS (Opsional) -->
        <script src="profile.js"></script>


        <div class="card-container">
          <div class="left-cards">

              <div class="card">
                <button align="right" type="button" class="kelola">Edit</button>
                <div class="circle"></div><br>
                <p align="center">{{ $data['nama'] }}</p><br>
                <p>NIM                   &ensp;:</p><p>{{ $data['nim'] }}</p>
                <p>Prodi                 &ensp;:</p>-
                <p>Semester              &ensp;:</p>
                <p>Jenis Kelamin         &ensp;:</p>
                <p>No telp               &ensp;:&ensp;{{ $data['no_telp'] }}</p>
                <p>Email                 &ensp;:</p>
                <p>Alamat                &ensp;:</p><p>{{ $data['alamat'] }}</p>
                <p>Tempat Tanggal Lahir  :</p><br>
                @csrf
                <h3>Profile Singkat</h3><br>
                <p>&ensp; &ensp;halo saya halo saya halo saya halo saya halo saya halo saya halo saya halo saya halo saya halo saya</p><br>
                <hr width="100%" color="#254877" size="3"><br>
                <h3>Pengalaman Kerja</h3><br>
                <p>&ensp;tidak ada</p><br>
                <hr width="100%" color="#254877" size="3"><br>
                <h3>Skill</h3><br>
                <div class="rounded-border-text">turu</div>
                <div class="rounded-border-text">mangan</div>
                <div class="rounded-border-text">dolan</div>
              </div>
              <div class="card"><h3>Pelatihan yang di ikuti</h3><br>
                <div class="containerr">
                  <div class="kotak">pelatihan 1</div>
                  <div class="kotak">pelatihan 2</div>
                </div>
                <div class="containerr">
                  <div class="kotak">pelatihan 3</div>
                  <div class="kotak">pelatihan 4</div>
                </div><br>
                <button type="button">Lihat Lebih Detail ==></button><br>
                <button align="right" type="button" class="kelola">Kelola</button>
                <br><br>

              </div>

          </div>
          <div class="right-cards">
              <div class="card">KARYA
                <div class="containerr">
                  <div class="kotak">karya 1</div>
                  <div class="kotak">karya 2</div>
                  <div class="kotak">karya 3</div>
                </div><br>
                <button type="button">Lihat Lebih Detail ==></button><br>
                <button align="right" type="button" class="kelola">Kelola</button>
                <br><br>
              </div>
              <div class="card">Prestasi
                <div class="containerr">
                  <div class="kotak">prestasi 1</div>
                  <div class="kotak">prestasi 2</div>
                  <div class="kotak">prestasi 3</div>
                </div><br>
                <button type="button">Lihat Lebih Detail ==></button><br>
                <button align="right" type="button" class="kelola">Kelola</button><br>
              </div>
              <div class="card">Komentar
                <div class="search-box">
                  <input type="text" placeholder="masukkan komentar....">
                  <button type="submit">komentar</button>
              </div>
              </div>
          </div>
        </div>


    </body>
    </html>
