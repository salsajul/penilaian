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
                <h1>Data Absen</h1>
            </div>
            <div class="halaman-data">
                <div class="tambah">
                <a href="../input/input_absen.php"><button>Tambah Data Absen</button></a>
                </div>
                <table class="tabel1">
                    <tr>
                    <th>No</th>
                    <th>Kode Absen</th>
                    <th>Bulan</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Jumlah Hadir</th>
                    <th>Alfa</th>
                    <th>Izin</th>
                    <th>Sakit</th>
                    <th colspan="2">Aksi</th>
                    </tr>
                    <tr>
                    <?php 
                        include '../../koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"select * from absen");
                        while($row = mysqli_fetch_array($data)){
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['kd_absen']; ?></td>
                        <td><?php echo $row['nm_bulan']; ?></td>
                        <td><?php echo $row['nis']; ?></td>
                        <td><?php echo $row['nm_siswa']; ?></td>
                        <td><?php echo $row['jml_hadir']; ?> Hari</td>
                        <td><?php echo $row['alfa']; ?> Hari</td>
                        <td><?php echo $row['izin']; ?> Hari</td>
                        <td><?php echo $row['sakit']; ?> Hari</td>
                        <td>
                            <div class="aksi_edit">
                            <a href='../input/edit_absen.php?kd_absen=<?php echo $row['kd_absen']; ?>'><button>Edit</button></a>
                            </div>
                        </td>
                        <td>
                        <div class="aksi_hapus">
                        <a href='delete_absen.php?kd_absen=<?php echo $row['kd_absen']; ?>' onclick="return confirm('Apakah anda yakin hapus data ini?')"><button>Hapus</button></a>
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