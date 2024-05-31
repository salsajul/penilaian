<?php
include '../../koneksi.php';
extract($_POST);
$kd_nilai = $_GET['kd_nilai'];

$query = mysqli_query($koneksi, "DELETE FROM nilai WHERE kd_nilai='$kd_nilai'");

header("location:data_nilai.php");

?>