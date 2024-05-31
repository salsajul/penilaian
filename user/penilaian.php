<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Siswa</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container">
        <div class="side-kiri">
            <div class="identitas">
                <div class="logo">
                    <img src="../gambar/logo.png">
                </div>
                <div class="judul">
                Aplikasi Penilaian Siswa
                </div>
            </div>
            <div class="side-menu">
                <img src="../gambar/dashboard.png">
                <a href="beranda.php">Beranda</a>
            </div>
            <div class="side-menu">
                <img src="../gambar/penilaian.png">
                <a href="penilaian.php">Penilaian</a>
            </div>
        </div>
        <div class="side-kanan">
            <div class="kepala">
            <div class="kepala-garis"><img src="../gambar/garis.png"></div>
                <div class="logout"><a href="../logout.php">Logout</a></div>
            </div>
            <div class="judul-halaman">
                <h1>Data Penilaian</h1>
            </div>
            <div class="halaman-data">

                <table class="tabel1">
                    <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                    </tr>
                    <tr>
                    <?php 
                        include '../koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"select * from siswa");
                        while($row = mysqli_fetch_array($data)){
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nis']; ?></td>
                        <td><?php echo $row['nm_siswa']; ?></td>
                        <td><?php echo $row['tmp_lahir']; ?></td>
                        <td><?php echo $row['tgl_lahir']; ?></td>
                        <td><?php echo $row['jkel']; ?></td>
                        <td>
                            <div class="aksi_detail">
                            <a href='detail_penilaian.php?nis=<?php echo $row['nis']; ?>'><button>Detail</button></a>
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