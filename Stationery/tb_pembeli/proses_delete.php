<!--
buat delete alias hapus ya brooo.......!
-->
<?php
	include "../koneksi.php";
	$id_pembeli=$_GET['id_pembeli'];
	$tb_pembeli=mysqli_query($koneksi,"Delete FROM tb_pembeli WHERE id_pembeli='$id_pembeli'");
	header('location:index.php');
?>