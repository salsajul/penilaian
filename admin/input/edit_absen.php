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
                <h1>Edit Data Absen</h1>
            </div>
            <div class="halaman-beranda">
                <div class="kotak_input">

                <?php
// Mengambil koneksi ke database
include "../../koneksi.php";

// Memeriksa apakah form telah disubmit
if(isset($_POST['submit'])) {
  // Mengambil data dari form
  $kd_absen = $_POST["kd_absen"];
  $nm_bulan = $_POST["nm_bulan"];
  $nis = $_POST["nis"];
  $nm_siswa = $_POST["nm_siswa"];
  $jml_hadir = $_POST["jml_hadir"];
  $alfa = $_POST["alfa"];
  $izin = $_POST["izin"];
  $sakit = $_POST["sakit"];

  // Mengupdate data di dalam tabel jabatan
  $sql = "UPDATE absen SET nm_bulan='$nm_bulan',nis='$nis',nm_siswa='$nm_siswa',jml_hadir='$jml_hadir',alfa='$alfa',izin='$izin',sakit='$sakit' WHERE kd_absen='$kd_absen'";
  if(mysqli_query($koneksi, $sql)){
    header("location:../tampilan/data_absen.php");
  } else{
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
  }
}

// Menampilkan data jabatan yang akan diupdate
$kd_absen = $_GET['kd_absen'];
$sql = "SELECT * FROM absen WHERE kd_absen='$kd_absen'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);

// Menutup koneksi
mysqli_close($koneksi);
?>

                <form method="POST" action="">
                    <div class="label">Bulan</div>
                    <input type="text" name="bulan" value="<?php echo $data['bulan']; ?>">
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
                    <div class="label">Jumlah Hadir</div>
                    <input type="text" name="jml_hadir" value="<?php echo $data['jml_hadir']; ?>">
                </div>
                <div class="kotak_input">
                    <div class="label">Alfa</div>
                    <input type="text" name="alfa" value="<?php echo $data['alfa']; ?>">
                    <div class="label">Izin</div>
                    <input type="text" name="izin" value="<?php echo $data['izin']; ?>">
                    <div class="label">Sakit</div>
                    <input type="text" name="sakit" value="<?php echo $data['sakit']; ?>">
                    <input type="submit" value="SIMPAN" name="submit">
                    <a href='../tampilan/data_absen.php' ><button>CANCEL</button></a>
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