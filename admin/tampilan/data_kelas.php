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
                <h1>Data Kelas</h1>
            </div>
            <div class="halaman-data">
                <div class="tambah">
                <a href="../input/input_kelas.php"><button>Tambah Data Kelas</button></a>
                </div>
                <table class="tabel1">
                    <tr>
                    <th>No</th>
                    <th>Kode Kelas</th>
                    <th>Nama Kelas</th>
                    <th>Jumlah Siswa</th>
                    <th>Tahun Ajaran</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th colspan="2">Aksi</th>
                    </tr>
                    <tr>
                    <?php 
                        include '../../koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"select * from kelas");
                        while($row = mysqli_fetch_array($data)){
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['kd_kelas']; ?></td>
                        <td><?php echo $row['nm_kelas']; ?></td>
                        <td><?php echo $row['jml_siswa']; ?></td>
                        <td><?php echo $row['thn_ajaran']; ?></td>
                        <td><?php echo $row['nip']; ?></td>
                        <td><?php echo $row['nm_guru']; ?></td>
                        <td>
                            <div class="aksi_edit">
                            <a href='../input/edit_kelas.php?kd_kelas=<?php echo $row['kd_kelas']; ?>'><button>Edit</button></a>
                            </div>
                        </td>
                        <td>
                        <div class="aksi_hapus">
                        <a href='delete_kelas.php?kd_kelas=<?php echo $row['kd_kelas']; ?>' onclick="return confirm('Apakah anda yakin hapus data ini?')"><button>Hapus</button></a>
                            </div>
                        </td>
                    </tr>
                    <?php 
                    }
                    ?>
                   
                </table>
            </div>
            <div class="kaki">
                Copyright@by Admin
            </div>
        </div>
    </div>
    
</body>
</html>