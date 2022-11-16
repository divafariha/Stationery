<!--
buat mroses ngedit ya brooo.......!
-->
<?php
	include "../koneksi.php";
	$id_pembeli=$_POST['id_pembeli'];
	$nama_pembeli = $_POST['nama_pembeli'];
	$alamat_pembeli = $_POST['alamat_pembeli'];
	$notelp_pembeli= $_POST['notelp_pembeli'];
	$modal=mysqli_query($koneksi,"UPDATE tb_pembeli SET nama_pembeli = '$nama_pembeli',alamat_pembeli = '$alamat_pembeli',notelp_pembeli = '$notelp_pembeli' WHERE id_pembeli = '$id_pembeli'");
	header('location:index.php');
?>