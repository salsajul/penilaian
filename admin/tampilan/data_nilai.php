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
                <h1>Data Nilai</h1>
            </div>
            <div class="halaman-data">
                <div class="tambah">
                <a href="../input/input_nilai.php"><button>Tambah Data Nilai</button></a>
                </div>
                <table class="tabel1">
                    <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Nama Matpel</th>
                    <th>UTS Ganjil</th>
                    <th>UAS Ganjil</th>
                    <th>UTS Genap</th>
                    <th>UAS Genap</th>
                    <th colspan="2">Aksi</th>
                    </tr>
                    <tr>
                    <?php 
                        include '../../koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"select * from nilai");
                        while($row = mysqli_fetch_array($data)){
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nis']; ?></td>
                        <td><?php echo $row['nm_siswa']; ?></td>
                        <td><?php echo $row['nm_matpel']; ?></td>
                        <td><?php echo $row['uts_sem_ganjil']; ?></td>
                        <td><?php echo $row['uas_sem_ganjil']; ?></td>
                        <td><?php echo $row['uts_sem_genap']; ?></td>
                        <td><?php echo $row['uas_sem_genap']; ?></td>
                        <td>
                            <div class="aksi_edit">
                            <a href='../input/edit_nilai.php?kd_nilai=<?php echo $row['kd_nilai']; ?>'><button>Edit</button></a>
                            </div>
                        </td>
                        <td>
                        <div class="aksi_hapus">
                        <a href='delete_nilai.php?kd_nilai=<?php echo $row['kd_nilai']; ?>' onclick="return confirm('Apakah anda yakin hapus data ini?')"><button>Hapus</button></a>
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