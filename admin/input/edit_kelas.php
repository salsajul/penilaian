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
                <h1>Edit Data Kelas</h1>
            </div>
            <div class="halaman-beranda">
                <div class="kotak_input">

                <?php
// Mengambil koneksi ke database
include "../../koneksi.php";

// Memeriksa apakah form telah disubmit
if(isset($_POST['submit'])) {
  // Mengambil data dari form
  $kd_kelas = $_POST["kd_kelas"];
  $nm_kelas = $_POST["nm_kelas"];
  $jml_siswa = $_POST["jml_siswa"];
  $thn_ajaran = $_POST["thn_ajaran"];
  $nip = $_POST["nip"];
  $nm_guru = $_POST["nm_guru"];

  // Mengupdate data di dalam tabel jabatan
  $sql = "UPDATE kelas SET nm_kelas='$nm_kelas',jml_siswa='$jml_siswa',thn_ajaran='$thn_ajaran',nip='$nip',nm_guru='$nm_guru' WHERE kd_kelas='$kd_kelas'";
  if(mysqli_query($koneksi, $sql)){
    header("location:../tampilan/data_kelas.php");
  } else{
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
  }
}

// Menampilkan data jabatan yang akan diupdate
$kd_kelas = $_GET['kd_kelas'];
$sql = "SELECT * FROM kelas WHERE kd_kelas='$kd_kelas'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);

// Menutup koneksi
mysqli_close($koneksi);
?>

                <form method="POST" action="">
                    <div class="label">Kode Kelas</div>
                    <input type="text" name="kd_kelas" value="<?php echo $data['kd_kelas']; ?>"readonly>
                    <div class="label">Nama Kelas</div>
                    <input type="text" name="nm_kelas" value="<?php echo $data['nm_kelas']; ?>">
                    <div class="label">Jumlah Siswa</div>
                    <input type="text" name="jml_siswa" value="<?php echo $data['jml_siswa']; ?>">
                    <div class="label">Tahun Ajaran</div>
                    <input type="text" name="thn_ajaran" value="<?php echo $data['thn_ajaran']; ?>">
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
                        <option>--Nama Guru --</option>
                        <?php
										include "../../koneksi.php";
		
										$sql=mysqli_query($koneksi,"select * from guru");
										while ($hasil=mysqli_fetch_array($sql)){
		
										echo "<option value='$hasil[nm_guru]'>
										$hasil[nip] -> $hasil[nm_guru]";
		
										}
		
									?>

                        </select >
                    <input type="submit" value="EDIT" name="submit">
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