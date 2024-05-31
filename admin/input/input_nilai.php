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
                <h1>Input Data Nilai</h1>
            </div>
            <div class="halaman-beranda">
                <div class="kotak_input">

                <?php
  // include file koneksi
  include "../../koneksi.php";

  // cek apakah form telah di-submit
  if($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // ambil data dari form
    $kd_nilai = $_POST["kd_nilai"];
    $nis = $_POST["nis"];
    $nm_siswa = $_POST["nm_siswa"];
    $kd_matpel = $_POST["kd_matpel"];
    $nm_matpel = $_POST["nm_matpel"];
    $uts_sem_ganjil = $_POST["uts_sem_ganjil"];
    $uas_sem_ganjil = $_POST["uas_sem_ganjil"];
    $uts_sem_genap = $_POST["uts_sem_genap"];
    $uas_sem_genap = $_POST["uas_sem_genap"];
    
    // query untuk menyimpan data ke database
    $query = "INSERT INTO nilai (kd_nilai,nis,nm_siswa,kd_matpel,nm_matpel,uts_sem_ganjil,uas_sem_ganjil,uts_sem_genap,uas_sem_genap) VALUES ('$kd_nilai','$nis','$nm_siswa','$kd_matpel','$nm_matpel','$uts_sem_ganjil','$uas_sem_ganjil','$uts_sem_genap','$uas_sem_genap')";
    
    // jalankan query
    if(mysqli_query($koneksi, $query)) {
        header("location:../tampilan/data_nilai.php");
    } else {
      echo "Data mata pelajaran gagal ditambahkan";
    }
  }
?>

                <form method="POST" action="">
                    <div class="label">NIS</div>
                    <select  name="nis">
                        <option>-- NIS --</option>
                        <?php
										include "../../koneksi.php";
		
										$sql=mysqli_query($koneksi,"select * from siswa");
										while ($hasil=mysqli_fetch_array($sql)){
		
										echo "<option value='$hasil[nis]'>
										$hasil[nis] -> $hasil[nm_siswa]";
		
										}
		
									?>

                        </select >
                    <div class="label">Nama Siswa</div>
                    <select  name="nm_siswa">
                        <option>--Nama Siswa --</option>
                        <?php
										include "../../koneksi.php";
		
										$sql=mysqli_query($koneksi,"select * from siswa");
										while ($hasil=mysqli_fetch_array($sql)){
		
										echo "<option value='$hasil[nm_siswa]'>
										$hasil[nis] -> $hasil[nm_siswa]";
		
										}
		
									?>

                        </select >
                        <div class="label">Kode Mata Pelajaran</div>
                    <select  name="kd_matpel">
                        <option>-- Kode Mata Pelajaran --</option>
                        <?php
										include "../../koneksi.php";
		
										$sql=mysqli_query($koneksi,"select * from matpel");
										while ($hasil=mysqli_fetch_array($sql)){
		
										echo "<option value='$hasil[kd_matpel]'>
										$hasil[kd_matpel] -> $hasil[nm_matpel]";
		
										}
		
									?>

                        </select >
                    <div class="label">Nama Mata Pelajaran</div>
                    <select  name="nm_matpel">
                        <option>--Nama Mata Pelajaran --</option>
                        <?php
										include "../../koneksi.php";
		
										$sql=mysqli_query($koneksi,"select * from matpel");
										while ($hasil=mysqli_fetch_array($sql)){
		
										echo "<option value='$hasil[nm_matpel]'>
										$hasil[kd_matpel] -> $hasil[nm_matpel]";
		
										}
		
									?>

                        </select >
                    <div class="label">UTS Semester Ganjil</div>
                    <input type="text" name="uts_sem_ganjil">
                </div>
                <div class="kotak_input">
                    <div class="label">UAS Semester Ganjil</div>
                    <input type="text" name="uas_sem_ganjil">
                    <div class="label">UTS Semester Genap</div>
                    <input type="text" name="uts_sem_genap">
                    <div class="label">UAS Semester Genap</div>
                    <input type="text" name="uas_sem_genap">
                    <input type="submit" value="SIMPAN" name="submit">
                    <a href='../tampilan/data_nilai.php' ><button>CANCEL</button></a>
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