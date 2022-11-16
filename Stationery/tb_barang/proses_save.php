<!--
iki proses nyimpenya njih....
-->
<?php
include "../koneksi.php";
$nama_barang = $_POST['nama_barang'];
$stok_barang = $_POST['stok_barang'];
$deskripsi_barang = $_POST['deskripsi_barang'];
$harga_barang = $_POST['harga_barang'];
mysqli_query($koneksi,"INSERT INTO tb_barang (nama_barang,stok_barang,deskripsi_barang,harga_barang) VALUES ('$nama_barang','$stok_barang','$deskripsi_barang','$harga_barang')");
header('location:index.php');
?>