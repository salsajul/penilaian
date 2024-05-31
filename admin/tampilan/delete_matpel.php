<?php
include '../../koneksi.php';
extract($_POST);
$kd_matpel = $_GET['kd_matpel'];

$query = mysqli_query($koneksi, "DELETE FROM matpel WHERE kd_matpel='$kd_matpel'");

header("location:data_matpel.php");

?>