<?php
//panggil file config.php untuk menghubung ke server
include "../../config/connect.php";
session_start();
$id = $_GET['id_file'];

//tangkap data dari form
$nama = $_POST['nama_file'];


$deskripsi = $_POST['deskripsi'];

//simpan data ke database
$query ="update upload set nama_file='$nama', deskripsi='$deskripsi' where id_file='$id'";
	
if(mysqli_query($con,$query))
	{
	header('location:halaman-upload.php?update=berhasil');
	}
else {header('location:update-pegawai.php?error=error');}
?>