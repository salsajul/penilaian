<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Siswa</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container">
        <div class="side-kiri">
            <div class="identitas">
                <div class="logo">
                    <img src="../gambar/logo.png">
                </div>
                <div class="judul">
                Aplikasi Penilaian Siswa
                </div>
            </div>
            <div class="side-menu">
                <img src="../gambar/dashboard.png">
                <a href="beranda.php">Beranda</a>
            </div>
            <div class="side-menu">
                <img src="../gambar/jabatan.png">
                <a href="tampilan/data_matpel.php">Mata Pelajaran</a>
            </div>
            <div class="side-menu">
                <img src="../gambar/pegawai.png">
                <a href="tampilan/data_guru.php">Guru</a>
            </div>
            <div class="side-menu">
                <img src="../gambar/pegawai.png">
                <a href="tampilan/data_kelas.php">Kelas</a>
            </div>
            <div class="side-menu">
                <img src="../gambar/pegawai.png">
                <a href="tampilan/data_siswa.php">Siswa</a>
            </div>
            <div class="side-menu">
                <img src="../gambar/pegawai.png">
                <a href="tampilan/data_absen.php">Absen</a>
            </div>
            <div class="side-menu">
                <img src="../gambar/gaji.png">
                <a href="tampilan/data_nilai.php">Nilai</a>
            </div>
            <div class="side-menu">
                <img src="../gambar/penilaian.png">
                <a href="tampilan/penilaian.php">penilaian</a>
            </div>
        </div>
        <div class="side-kanan">
            <div class="kepala">
            <div class="kepala-garis"><img src="../gambar/garis.png"></div>
                <div class="logout"><a href="../logout.php">Logout</a></div>
            </div>
            <div class="judul-halaman">
                <h1>Dashboard</h1>
            </div>
            <div class="halaman-beranda">
                <div class="kotak-info">
                    <div class="info-karyawan">
                    Jumlah Siswa
                    <h2>					  
                        <?php
                        include "../koneksi.php";
                        $sql = "SELECT COUNT(*) as jumlah_siswa FROM siswa";
                        $result = mysqli_query($koneksi, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $jumlah_siswa = $row['jumlah_siswa'];
                        echo $jumlah_siswa;
                        mysqli_close($koneksi);
                        ?>
                    </h2>
                    </div>
                    <div class="info-gambar">
                        <img src="../gambar/pegawai.png">
                    </div>
                </div>
                <div class="kotak-info">
                <div class="info-karyawan">
                    Jumlah Guru
                    <h2><?php
                        include "../koneksi.php";
                        $sql = "SELECT COUNT(*) as jumlah_guru FROM guru";
                        $result = mysqli_query($koneksi, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $jumlah_guru = $row['jumlah_guru'];
                        echo $jumlah_guru;
                        mysqli_close($koneksi);
                        ?>
                    </h2>
                    </div>
                    <div class="info-gambar">
                        <img src="../gambar/pegawai.png">
                    </div>
                </div>
                <div class="kotak-info">
                <div class="info-karyawan">
                    Jumlah Guru
                    <h2><?php
                        include "../koneksi.php";
                        $sql = "SELECT COUNT(*) as jumlah_guru FROM guru";
                        $result = mysqli_query($koneksi, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $jumlah_guru = $row['jumlah_guru'];
                        echo $jumlah_guru;
                        mysqli_close($koneksi);
                        ?>
                    </h2>
                    </div>
                    <div class="info-gambar">
                        <img src="../gambar/pegawai.png">
                    </div>
                </div>
            </div>
            <div class="kaki">
                Copyright@by Admin
            </div>
        </div>
    </div>
</body>
</html>