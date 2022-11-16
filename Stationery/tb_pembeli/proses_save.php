<!--
iki proses nyimpenya njih....
-->
<?php
include "../koneksi.php";
$nama_pembeli = $_POST['nama_pembeli'];
$alamat_pembeli = $_POST['alamat_pembeli'];
$notelp_pembeli = $_POST['notelp_pembeli'];
mysqli_query($koneksi,"INSERT INTO tb_pembeli (nama_pembeli,alamat_pembeli,notelp_pembeli) VALUES ('$nama_pembeli','$alamat_pembeli','$notelp_pembeli')");
header('location:index.php');
?>