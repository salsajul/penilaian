<?php
include '../../koneksi.php';
extract($_POST);
$nis = $_GET['nis'];

$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE nis='$nis'");

header("location:data_siswa.php");

?>