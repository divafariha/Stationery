<!--
buat mroses ngedit ya brooo.......!
-->
<?php
	include "../koneksi.php";
	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$stok_barang = $_POST['stok_barang'];
	$deskripsi_barang = $_POST['deskripsi_barang'];
	$harga_barang = $_POST['harga_barang'];
	$modal=mysqli_query($koneksi,"UPDATE tb_barang SET nama_barang = '$nama_barang', stok_barang = '$stok_barang', deskripsi_barang = '$deskripsi_barang', harga_barang = '$harga_barang' WHERE id_barang = '$id_barang'");
	header('location:index.php');
?>