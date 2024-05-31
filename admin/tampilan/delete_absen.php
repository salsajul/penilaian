<?php
include '../../koneksi.php';
extract($_POST);
$kd_absen = $_GET['kd_absen'];

$query = mysqli_query($koneksi, "DELETE FROM absen WHERE kd_absen='$kd_absen'");

header("location:data_absen.php");

?>