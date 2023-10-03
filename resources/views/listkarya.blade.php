<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Karya</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <!-- Include custom CSS -->
    <link rel="stylesheet" href="list.css">
    <style>
        .centered-text {
    text-align: center;
    margin-top: 2vh; /* Mengatur margin atas 25% dari tinggi viewport */
    margin-left: auto; /* Mengatur margin kiri dan kanan otomatis */
    margin-right: auto;
    padding-left: 10px; /* Mengatur padding kiri sejauh yang diinginkan */
    padding-right: 900px; /* Mengatur padding kanan sejauh yang diinginkan */
    color: #0b0d3a;
}
.card {
    width: 15rem;
    margin-bottom: 20px;
    margin: 20px; /* Mengurangi margin di sekitar card */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
    </style>
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
    <div class="centered-text">
        <h5><b>Daftar Karya</h5>
        <hr style="border-bottom: 1px solid #080e36; width: 165%; margin-left: 40%;">

    </div>

          <div class="container">
              <div class="card" style="width: 18rem; float: right; margin: 40px 70px 30px 40px;">
                  <img src="img/dis.jpg" class="card-img-top" alt="Karya 1">
                  <div class="card-body">
                      <h5 class="card-title"><u><b>Nama Karya</b></u></h5>
                      <p class="card-text" style="font-weight: lighter;">Deskripsi..</p>
                      <a href="#" class="btn btn-link" style="position: absolute; right: 0; bottom: 0; color: blue;">Lihat Detail >></a>
                  </div>
              </div>

              <div class="card" style="width: 18rem; float: right; margin: 40px 70px 30px 40px;">
                  <img src="img/dis.jpg" class="card-img-top" alt="Karya 2">
                  <div class="card-body">
                      <h5 class="card-title"><u><b>Nama Karya</b></u></h5>
                      <p class="card-text" style="font-weight: lighter;">Deskripsi..</p>
                      <a href="#" class="btn btn-link" style="position: absolute; right: 0; bottom: 0; color: blue;">Lihat Detail >></a>
                  </div>
              </div>

              <div class="card" style="width: 18rem; float: right; margin: 40px 70px 30px 40px;">
                  <img src="img/dis.jpg" class="card-img-top" alt="Karya 3">
                  <div class="card-body">
                      <h5 class="card-title"><u><b>Nama Karya</b></u></h5>
                      <p class="card-text" style="font-weight: lighter;">Deskripsi..</p>
                      <a href="#" class="btn btn-link" style="position: absolute; right: 0; bottom: 0; color: blue;">Lihat Detail >></a>
                  </div>
              </div>

              <div class="card" style="width: 18rem; float: right; margin: 40px 70px 30px 40px;">
                  <img src="img/dis.jpg" class="card-img-top" alt="Karya 4">
                  <div class="card-body">
                      <h5 class="card-title"><u><b>Nama Karya</b></u></h5>
                      <p class="card-text" style="font-weight: lighter;">Deskripsi..</p>
                      <a href="#" class="btn btn-link" style="position: absolute; right: 0; bottom: 0; color: blue;">Lihat Detail >></a>
                  </div>
              </div>

              <div class="card" style="width: 18rem; float: right; margin: 40px 70px 30px 40px;">
                  <img src="img/dis.jpg" class="card-img-top" alt="Karya 5">
                  <div class="card-body">
                      <h5 class="card-title"><u><b>Nama Karya</b></u></h5>
                      <p class="card-text" style="font-weight: lighter;">Deskripsi..</p>
                      <a href="#" class="btn btn-link" style="position: absolute; right: 0; bottom: 0; color: blue;">Lihat Detail >></a>
                  </div>
              </div>

              <div class="card" style="width: 18rem; float: right; margin: 40px 70px 30px 40px;">
                  <img src="img/dis.jpg" class="card-img-top" alt="Karya 6">
                  <div class="card-body">
                      <h5 class="card-title"><u><b>Nama Karya</b></u></h5>
                      <p class="card-text" style="font-weight: lighter;">Deskripsi..</p>
                      <a href="#" class="btn btn-link" style="position: absolute; right: 0; bottom: 0; color: blue;">Lihat Detail >></a>
                  </div>
              </div>

              <div class="card" style="width: 18rem; float: right; margin: 40px 70px 30px 40px;">
                  <img src="img/dis.jpg" class="card-img-top" alt="Karya 7">
                  <div class="card-body">
                      <h5 class="card-title"><u><b>Nama Karya</b></u></h5>
                      <p class="card-text" style="font-weight: lighter;">Deskripsi..</p>
                      <a href="#" class="btn btn-link" style="position: absolute; right: 0; bottom: 0; color: blue;">Lihat Detail >></a>
                  </div>
              </div>

              <div class="card" style="width: 18rem; float: right; margin: 40px 70px 30px 40px;">
                  <img src="img/dis.jpg" class="card-img-top" alt="Karya 8">
                  <div class="card-body">
                      <h5 class="card-title"><u><b>Nama Karya</b></u></h5>
                      <p class="card-text" style="font-weight: lighter;">Deskripsi..</p>
                      <a href="#" class="btn btn-link" style="position: absolute; right: 0; bottom: 0; color: blue;">Lihat Detail >></a>
                  </div>
              </div>

              <div class="card" style="width: 18rem; float: right; margin: 40px 70px 30px 40px;">
                  <img src="img/dis.jpg" class="card-img-top" alt="Karya 9">
                  <div class="card-body">
                      <h5 class="card-title"><u><b>Nama Karya</b></u></h5>
                      <p class="card-text" style="font-weight: lighter;">Deskripsi..</p>
                      <a href="#" class="btn btn-link" style="position: absolute; right: 0; bottom: 0; color: blue;">Lihat Detail >></a>
                  </div>
              </div>

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
</div>

<footer class="text-muted" style="clear: both;">
    <hr>
    <div class="container">
        <p class="float-right">
            <a href="#">Kembali ke Atas</a>
        </p>
    </div>
</footer>

    <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
              integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
              crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
              integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
              crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
              integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
              crossorigin="anonymous">
            </script>
            <!-- JavaScript untuk mengontrol tampilan sidebar -->
<script>
    function openSidebar() {
        document.getElementById('sidebar').style.right = '0';
    }

    function closeSidebar() {
        document.getElementById('sidebar').style.right = '-250px';
    }

    // Tambahkan event listener pada ikon profil
    document.querySelector('.profile-icon').addEventListener('click', openSidebar);
</script>
    <!-- Include Bootstrap JS (Opsional) -->
    <script src="list2.js"></script>
</body>
</html>
