<!--
buat delete alias hapus ya brooo.......!
-->
<?php
	include "../koneksi.php";
	$id_barang=$_GET['id_barang'];
	$tb_barang=mysqli_query($koneksi,"Delete FROM tb_barang WHERE id_barang='$id_barang'");
	header('location:index.php');
?>