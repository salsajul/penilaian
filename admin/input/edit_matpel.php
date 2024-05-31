<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Siswa</title>
    <link rel="stylesheet" href="../../css/style.css">
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
            <div class="kepala-garis"><img src="../../gambar/garis.png"></div>
                <div class="logout"><a href="../../logout.php">Logout</a></div>
            </div>
            <div class="judul-halaman">
                <h1>Edit Data Mata Pelajaran</h1>
            </div>
            <div class="halaman-beranda">
                <div class="kotak_input">

                <?php
// Mengambil koneksi ke database
include "../../koneksi.php";

// Memeriksa apakah form telah disubmit
if(isset($_POST['submit'])) {
  // Mengambil data dari form
  $kd_matpel = $_POST['kd_matpel'];
  $nm_matpel = $_POST['nm_matpel'];

  // Mengupdate data di dalam tabel jabatan
  $sql = "UPDATE matpel SET nm_matpel='$nm_matpel' WHERE kd_matpel='$kd_matpel'";
  if(mysqli_query($koneksi, $sql)){
    header("location:../tampilan/data_matpel.php");
  } else{
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
  }
}

// Menampilkan data jabatan yang akan diupdate
$kd_matpel = $_GET['kd_matpel'];
$sql = "SELECT * FROM matpel WHERE kd_matpel='$kd_matpel'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);

// Menutup koneksi
mysqli_close($koneksi);
?>

                <form method="POST" action="">
                    <div class="label">Kode Mata Pelajaran</div>
                    <input type="text" name="kd_matpel" value="<?php echo $data['kd_matpel']; ?>" readonly>
                    <div class="label">Nama Mata Pelajaran</div>
                    <input type="text" name="nm_matpel" value="<?php echo $data['nm_matpel']; ?>">
                    <input type="submit" value="EDIT" name="submit"  onclick="return confirm('Apakah anda yakin mengedit data?')">
                    <a href='../tampilan/data_matpel.php' ><button>CANCEL</button></a>
                </div>
                <div class="kotak_input">
                    <div class="label">&nbsp;</div>
                </div>
            </div>
            <div class="kaki">
                Copyright@by Admin
            </div>
        </div>
    </div>
    
</body>
</html>