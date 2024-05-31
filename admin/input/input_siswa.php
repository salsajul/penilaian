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
                <h1>Input Data Siswa</h1>
            </div>
            <div class="halaman-beranda">
                <div class="kotak_input">

                <?php
  // include file koneksi
  include "../../koneksi.php";

  // cek apakah form telah di-submit
  if($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // ambil data dari form
    $nis = $_POST["nis"];
    $nm_siswa = $_POST["nm_siswa"];
    $tmp_lahir = $_POST["tmp_lahir"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $jkel = $_POST["jkel"];
    $alamat = $_POST["alamat"];
    $telp = $_POST["telp"];
    $nm_wali = $_POST["nm_wali"];
    $kd_kelas = $_POST["kd_kelas"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // query untuk menyimpan data ke database
    $query = "INSERT INTO siswa (nis,nm_siswa,tmp_lahir,tgl_lahir,jkel,alamat,telp,nm_wali,kd_kelas,username,password) VALUES ('$nis','$nm_siswa','$tmp_lahir','$tgl_lahir','$jkel','$alamat','$telp','$nm_wali','$kd_kelas','$username','$password')";
    
    // jalankan query
    if(mysqli_query($koneksi, $query)) {
        header("location:../tampilan/data_siswa.php");
    } else {
      echo "Data mata pelajaran gagal ditambahkan";
    }
  }
?>

                <form method="POST" action="">
                    <div class="label">NIS</div>
                    <input type="text" name="nis" placeholder="Masukan Angka NIS">
                    <div class="label">Nama Siswa</div>
                    <input type="text" name="nm_siswa">
                    <div class="label">Tempat Lahir</div>
                    <input type="text" name="tmp_lahir">
                    <div class="label">Tanggal  Lahir</div>
                    <input type="date" name="tgl_lahir">
                    <div class="label">Jenis Kelamin</div>
                    <select  name="jkel">
                            <option>-- Jenis Kelamin --</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select >
                    <div class="label">Alamat</div>
                    <input type="text" name="alamat">
                </div>
                <div class="kotak_input">
                    <div class="label">Telepon</div>
                    <input type="text" name="telp" placeholder="08xxxxxxxxxx">
                    <div class="label">Nama Wali</div>
                    <input type="text" name="nm_wali">
                    <div class="label">Kode Kelas</div>
                    <select  name="kd_kelas">
                        <option>-- Kode Kelas --</option>
                        <?php
										include "../../koneksi.php";
		
										$sql=mysqli_query($koneksi,"select * from kelas");
										while ($hasil=mysqli_fetch_array($sql)){
		
										echo "<option value='$hasil[kd_kelas]'>
										$hasil[kd_kelas] -> $hasil[nm_kelas]";
		
										}
		
									?>

                        </select >
                        
                    <div class="label">Username</div>
                    <input type="text" name="username">
                    <div class="label">Password</div>
                    <input type="text" name="password">
                    <input type="submit" value="SIMPAN" name="submit">
                    <a href='../tampilan/data_siswa.php' ><button>CANCEL</button></a>
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