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
                <h1>Edit Data Guru</h1>
            </div>
            <div class="halaman-beranda">
                <div class="kotak_input">

                <?php
// Mengambil koneksi ke database
include "../../koneksi.php";

// Memeriksa apakah form telah disubmit
if(isset($_POST['submit'])) {
  // Mengambil data dari form
    $nip = $_POST["nip"];
    $nm_guru = $_POST["nm_guru"];
    $tmp_lahir_guru = $_POST["tmp_lahir_guru"];
    $tgl_lahir_guru = $_POST["tgl_lahir_guru"];
    $jkel_guru = $_POST["jkel_guru"];
    $alamat = $_POST["alamat"];
    $telp = $_POST["telp"];
    $kd_matpel = $_POST["kd_matpel"];
    $nm_matpel = $_POST["nm_matpel"];

  // Mengupdate data di dalam tabel jabatan
  $sql = "UPDATE guru SET nm_guru='$nm_guru',tmp_lahir_guru='$tmp_lahir_guru',tgl_lahir_guru='$tgl_lahir_guru',jkel_guru='$jkel_guru',alamat='$alamat',telp='$telp',kd_matpel='$kd_matpel',nm_matpel='$nm_matpel' WHERE nip='$nip'";
  if(mysqli_query($koneksi, $sql)){
    header("location:../tampilan/data_guru.php");
  } else{
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
  }
}

// Menampilkan data jabatan yang akan diupdate
$nip = $_GET['nip'];
$sql = "SELECT * FROM guru WHERE nip='$nip'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);

// Menutup koneksi
mysqli_close($koneksi);
?>

                <form method="POST" action="">
                    <div class="label">NIP</div>
                    <input type="text" name="nip" value="<?php echo $data['nip']; ?>"readonly>
                    <div class="label">Nama Guru</div>
                    <input type="text" name="nm_guru" value="<?php echo $data['nm_guru']; ?>">
                    <div class="label">Tempat Lahir</div>
                    <input type="text" name="tmp_lahir_guru" value="<?php echo $data['tmp_lahir_guru']; ?>">
                    <div class="label">Tanggal  Lahir</div>
                    <input type="date" name="tgl_lahir_guru" value="<?php echo $data['tgl_lahir_guru']; ?>">
                    <div class="label">Jenis Kelamin</div>
                    <select  name="jkel_guru">
                            <option >-- Jenis Kelamin --</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select >
                </div>
                <div class="kotak_input">
                    <div class="label">Alamat</div>
                    <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>">
                    <div class="label">Telepon</div>
                    <input type="text" name="telp" value="<?php echo $data['telp']; ?>">
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
                        <option>--Mata Pelajaran --</option>
                        <?php
										include "../../koneksi.php";
		
										$sql=mysqli_query($koneksi,"select * from matpel");
										while ($hasil=mysqli_fetch_array($sql)){
		
										echo "<option value='$hasil[kd_matpel]'>
										$hasil[kd_matpel] -> $hasil[nm_matpel]";
		
										}
		
									?>

                        </select >
                    <input type="submit" value="EDIT" name="submit">
                    <a href='../tampilan/data_guru.php' ><button>CANCEL</button></a>
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