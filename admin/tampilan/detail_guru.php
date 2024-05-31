
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

    $nip = $_GET['nip'];
    $sql = "SELECT * FROM guru WHERE nip='$nip'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nip = $row["nip"];
        $nm_guru = $row["nm_guru"];
        $tmp_lahir_guru = $row["tmp_lahir_guru"];
        $tgl_lahir_guru = $row["tgl_lahir_guru"];
        $jkel_guru = $row["jkel_guru"];
        $alamat = $row["alamat"];
        $telp = $row["telp"];
        $kd_matpel = $row["kd_matpel"];
        $nm_matpel = $row["nm_matpel"];
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
                <div class="judul-detail">Detail Data Guru</div>
                <div class="link"><a href="data_guru.php">Data Guru</a>/Detail Data Guru</div>
            </div>
            <div class="kotak-judul-detail">
                Detail Data Guru
            </div> 
            <div class="halaman-beranda">
                <div class="detail-foto">
                    <h4><?php echo $nip; ?></h4>
                    <h3><?php echo $nm_guru; ?></h3>
                    <h4><?php echo $tmp_lahir_guru; ?>, <?php echo $tgl_lahir_guru; ?></h4>
                </div>
                <div class="detail-identitas">
                    <br>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">NIP</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $nip; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Nama Guru</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $nm_guru; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Tempat Lahir</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $tmp_lahir_guru; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Tanggal Lahir</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $tgl_lahir_guru; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Jenis Kelamin</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $jkel_guru; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Alamat</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $alamat; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Telepon</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $telp; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Kode Mata Pelajaran</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $kd_matpel; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Nama Pelajaran</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $nm_matpel; ?></div>
                    </div>
            </div>
            
        </div>
        <div class="kaki">
                Copyright@by Admin
            </div>
    </div>
    
</body>
</html>