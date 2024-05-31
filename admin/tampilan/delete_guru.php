<?php
include '../../koneksi.php';
extract($_POST);
$nip = $_GET['nip'];

$query = mysqli_query($koneksi, "DELETE FROM guru WHERE nip='$nip'");

header("location:data_guru.php");

?>