<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Data</title>
</head>

<body>
    <div class="video-background">
        <video autoplay loop muted id="bg-video">
            <source src="../bg-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="content">
            <div class="form-container glass-effect-bg">
                <h3>TAMBAH DATA MAHASISWA</h3>

                <form action="/action_page.php" autocomplete="off">
                    <label for="NIM">NIM</label>
                    <input type="text" id="NIM" name="nim" placeholder="Nomor Induk Mahasiswa" required>

                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>

                    <label for="tglLahir">Tanggal Lahir</label>
                    <p></p>
                    <input type="date" id="tglLahir" name="tgllahir" placeholder="Masukkan Tanggal Lahir"
                        value="1998-01-01" min="1998-01-01" max="2006-12-31" required>
                    <p></p>

                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email" required>

                    <label for="notelp">No Telepon</label>
                    <input type="tel" id="notelp" name="notelp" placeholder="Masukkan No Telepon" required>

                    <label for="fakultas">Fakultas</label>
                    <select id="fakultas" name="fakultas">
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                        <option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
                        <option value="Psikologi">Psikologi</option>
                        <option value="Teknik">Teknik</option>
                        <option value="Ekonomi & Bisnis">Ekonomi & Bisnis</option>
                    </select>

                    <label for="jurusan">Jurusan</label>
                    <select id="jurusan" name="jurusan">
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                        <option value="Administrasi Publik">Administrasi Publik</option>
                        <option value="Psikologi">Psikologi</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Manajemen Akutansi">Manajemen Akutansi</option>
                    </select>

                    <a href="#"><button>Tambah Data</button></a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>