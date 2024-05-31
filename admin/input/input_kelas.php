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
                <h1>Input Data Kelas</h1>
            </div>
            <div class="halaman-beranda">
                <div class="kotak_input">

                <?php
  // include file koneksi
  include "../../koneksi.php";

  // cek apakah form telah di-submit
  if($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // ambil data dari form
    $kd_kelas = $_POST["kd_kelas"];
    $nm_kelas = $_POST["nm_kelas"];
    $jml_siswa = $_POST["jml_siswa"];
    $thn_ajaran = $_POST["thn_ajaran"];
    $nip = $_POST["nip"];
    $nm_guru = $_POST["nm_guru"];
    
    // query untuk menyimpan data ke database
    $query = "INSERT INTO kelas (kd_kelas,nm_kelas,jml_siswa,thn_ajaran,nip,nm_guru) VALUES ('$kd_kelas','$nm_kelas','$jml_siswa','$thn_ajaran','$nip','$nm_guru')";
    
    // jalankan query
    if(mysqli_query($koneksi, $query)) {
        header("location:../tampilan/data_kelas.php");
    } else {
      echo "Data mata pelajaran gagal ditambahkan";
    }
  }
?>

                <form method="POST" action="">
                    <div class="label">Kode Kelas</div>
                    <input type="text" name="kd_kelas" placeholder="A00">
                    <div class="label">Nama Kelas</div>
                    <input type="text" name="nm_kelas">
                    <div class="label">Jumlah Siswa</div>
                    <input type="text" name="jml_siswa">
                    <div class="label">Tahun Ajaran</div>
                    <input type="text" name="thn_ajaran">
                </div>
                <div class="kotak_input">
                    <div class="label">NIP</div>
                    <select  name="nip">
                        <option>-- NIP --</option>
                        <?php
										include "../../koneksi.php";
		
										$sql=mysqli_query($koneksi,"select * from guru");
										while ($hasil=mysqli_fetch_array($sql)){
		
										echo "<option value='$hasil[nip]'>
										$hasil[nip] -> $hasil[nm_guru]";
		
										}
		
									?>

                        </select >
                    <div class="label">Nama Guru</div>
                    <select  name="nm_guru">
                        <option>--Mata Pelajaran --</option>
                        <?php
										include "../../koneksi.php";
		
										$sql=mysqli_query($koneksi,"select * from guru");
										while ($hasil=mysqli_fetch_array($sql)){
		
										echo "<option value='$hasil[nm_guru]'>
										$hasil[nip] -> $hasil[nm_guru]";
		
										}
		
									?>

                        </select >
                    <input type="submit" value="SIMPAN" name="submit">
                    <a href='../tampilan/data_kelas.php' ><button>CANCEL</button></a>
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