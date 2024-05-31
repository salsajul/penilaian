
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


<?php
include "../koneksi.php";

$nis = $_GET['nis'];
$sql = "SELECT siswa.*, absen.jml_hadir, absen.alfa, absen.izin, absen.sakit, nilai.nm_matpel, nilai.uts_sem_ganjil, 
nilai.uas_sem_ganjil, nilai.uts_sem_genap, nilai.uas_sem_genap, kelas.nm_kelas, kelas.thn_ajaran
FROM siswa
JOIN absen ON siswa.nis = absen.nis
JOIN nilai ON siswa.nis = nilai.nis
JOIN kelas ON siswa.kd_kelas = kelas.kd_kelas
WHERE siswa.nis='$nis'";
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
    $jml_hadir = $row["jml_hadir"];
    $alfa = $row["alfa"];
    $izin = $row["izin"];
    $sakit = $row["sakit"];
    $nm_matpel = $row["nm_matpel"];
    $uts_sem_ganjil = $row["uts_sem_ganjil"];
    $uas_sem_ganjil = $row["uas_sem_ganjil"];
    $uts_sem_genap = $row["uts_sem_genap"];
    $uas_sem_genap = $row["uas_sem_genap"];
    $uts_sem_genap = $row["uts_sem_genap"];
    $uas_sem_genap = $row["uas_sem_genap"];
    $nm_kelas = $row["nm_kelas"];
    $thn_ajaran = $row["thn_ajaran"];
}
?>
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
                <img src="../gambar/penilaian.png">
                <a href="penilaian.php">penilaian</a>
            </div>
        </div>
        <div class="side-kanan">
            <div class="kepala">
                <div class="kepala-garis"><img src="../gambar/garis.png"></div>
                <div class="logout"><a href="../logout.php">Logout</a></div>
            </div>
            <div class="judul-halaman">
                <div class="judul-detail">Detail Data Penilaian</div>
                <div class="link"><a href="penilaian.php">Data Penilaian</a>/Detail Data Penilaian</div>
            </div>
            <div class="kotak-judul-detail">
                Detail Data Penilaian
            </div> 
            <div class="halaman-beranda">
                <div class="detail-foto">
                    <h4><?php echo $nis; ?></h4>
                    <h3><?php echo $nm_siswa; ?></h3>
                    <h4><?php echo $tmp_lahir; ?>, <?php echo $tgl_lahir; ?></h4>
                    <h4>Kelas <?php echo $nm_kelas; ?></h4>
                    <h4>Tahun Ajaran <?php echo $thn_ajaran; ?></h4>
                    
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
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Jumlah Hadir</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $jml_hadir; ?> Hari</div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Alfa</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $alfa; ?> Hari</div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Izin</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $izin; ?> Hari</div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Sakit</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $sakit; ?> Hari</div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">UTS Ganjil</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $uts_sem_ganjil; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">UAS Ganjil</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $uas_sem_ganjil; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">UTS Genap</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $uts_sem_genap; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">UAS Genap</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $uas_sem_genap; ?></div>
                    </div>
            </div>
            
        </div>
        <div class="kaki">
                Copyright@by Admin
            </div>
    </div>
    
</body>
</html>