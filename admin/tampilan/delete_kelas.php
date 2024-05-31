<?php
include '../../koneksi.php';
extract($_POST);
$kd_kelas = $_GET['kd_kelas'];

$query = mysqli_query($koneksi, "DELETE FROM kelas WHERE kd_kelas='$kd_kelas'");

header("location:data_kelas.php");

?>