<!--
koneksikan ke database ya broooo....
-->
<?php
	$host="localhost";
	$user="root";
	$pass="";
	$database="stationery";
	$koneksi=new mysqli($host,$user,$pass,$database);
	if (mysqli_connect_errno()) {
	  trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR); 
	}
?>