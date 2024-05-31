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
                <a href="../tampilan/data_matpel.php">Mata Pelajaran</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/pegawai.png">
                <a href="../tampilan/data_guru.php">Guru</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/pegawai.png">
                <a href="../tampilan/data_kelas.php">Kelas</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/pegawai.png">
                <a href="../tampilan/data_siswa.php">Siswa</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/pegawai.png">
                <a href="../tampilan/data_absen.php">Absen</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/gaji.png">
                <a href="../tampilan/data_nilai.php">Nilai</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/penilaian.png">
                <a href="../tampilan/penilaian.php">penilaian</a>
            </div>
        </div>
        <div class="side-kanan">
            <div class="kepala">
            <div class="kepala-garis"><img src="../../gambar/garis.png"></div>
                <div class="logout"><a href="../../logout.php">Logout</a></div>
            </div>
            <div class="judul-halaman">
                <h1>Input Data Mata Pelajaran</h1>
            </div>
            <div class="halaman-beranda">
                <div class="kotak_input">

                <?php
  // include file koneksi
  include "../../koneksi.php";

  // cek apakah form telah di-submit
  if($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // ambil data dari form
    $kd_matpel = $_POST["kd_matpel"];
    $nm_matpel = $_POST["nm_matpel"];
    
    // query untuk menyimpan data ke database
    $query = "INSERT INTO matpel (kd_matpel,nm_matpel) VALUES ('$kd_matpel','$nm_matpel')";
    
    // jalankan query
    if(mysqli_query($koneksi, $query)) {
        header("location:../tampilan/data_matpel.php");
    } else {
      echo "Data mata pelajaran gagal ditambahkan";
    }
  }
?>

                <form method="POST" action="">
                    <div class="label">Kode Mata Pelajaran</div>
                    <input type="text" name="kd_matpel" placeholder="MP000">
                    <div class="label">Nama Mata Pelajaran</div>
                    <input type="text" name="nm_matpel" placeholder="Mata Pelajaran">
                    <input type="submit" value="SIMPAN" name="submit">
                    <a href='../tampilan/data_matkul.php' ><button>CANCEL</button></a>
                </div>
                <div class="kotak_input">
                    <div class="label">&nbsp;</div>
                    </form>
                </div>
            </div>
            <div class="kaki">
                Copyright@by Admin
            </div>
        </div>
    </div>
    
</body>
</html>