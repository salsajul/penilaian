
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Penggajian</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>


<?php
    include "../../koneksi.php";

    $nis = $_GET['nis'];
    $sql = "SELECT * FROM siswa WHERE nis='$nis'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nis = $row["nis"];
        $nm_siswa = $row["nm_siswa"];
        $tmp_lahir = $row["tmp_lahir"];
        $tgl_lahir = $row["tgl_lahir"];
        $jkel = $row["jkel"];
        $alamat = $row["alamat"];
        $telp = $row["telp"];
        $nm_wali = $row["nm_wali"];
        $kd_kelas = $row["kd_kelas"];
        $username = $row["username"];
        $password = $row["password"];
    }
?>

    <div class="container">
    <div class="side-kiri">
            <div class="identitas">
                <div class="logo">
                    <img src="../../gambar/logo.png">
                </div>
                <div class="judul">
                Aplikasi Penilaian Siswa
                </div>
            </div>
            <div class="side-menu">
                <img src="../../gambar/dashboard.png">
                <a href="../beranda.php">Beranda</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/jabatan.png">
                <a href="data_matpel.php">Mata Pelajaran</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/pegawai.png">
                <a href="data_guru.php">Guru</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/pegawai.png">
                <a href="data_kelas.php">Kelas</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/pegawai.png">
                <a href="data_siswa.php">Siswa</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/pegawai.png">
                <a href="data_absen.php">Absen</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/gaji.png">
                <a href="data_nilai.php">Nilai</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/penilaian.png">
                <a href="penilaian.php">penilaian</a>
            </div>
        </div>
        <div class="side-kanan">
            <div class="kepala">
                <div class="kepala-garis"><img src="../../gambar/garis.png"></div>
                <div class="logout"><a href="../../logout.php">Logout</a></div>
            </div>
            <div class="judul-halaman">
                <div class="judul-detail">Detail Data Siswa</div>
                <div class="link"><a href="data_siswa.php">Data Siswa</a>/Detail Data Siswa</div>
            </div>
            <div class="kotak-judul-detail">
                Detail Data Siswa
            </div> 
            <div class="halaman-beranda">
                <div class="detail-foto">
                    <h4><?php echo $nis; ?></h4>
                    <h3><?php echo $nm_siswa; ?></h3>
                    <h4><?php echo $tmp_lahir; ?>, <?php echo $tgl_lahir; ?></h4>
                </div>
                <div class="detail-identitas">
                    <br>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">NIS</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $nis; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Nama Siswa</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $nm_siswa; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Tempat Lahir</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $tmp_lahir; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Tanggal Lahir</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $tgl_lahir; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Jenis Kelamin</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $jkel; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Alamat</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $alamat; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Kode Kelas</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $kd_kelas; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Username</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $username; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Password</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $password; ?></div>
                    </div>
            </div>
            
        </div>
        <div class="kaki">
                Copyright@by Admin
            </div>
    </div>
    
</body>
</html>