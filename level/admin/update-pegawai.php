<?php
//panggil file config.php untuk menghubung ke server
include "../../config/connect.php";
session_start();
$nip = $_GET['nip'];

//tangkap data dari form
$nama = $_POST['nama'];

$pangkat = $_POST['pangkat'];
$jabatan = $_POST['jabatan'];
$username= $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

//simpan data ke database
$query ="update user set nama='$nama', pangkat='$pangkat', jabatan='$jabatan', username='$username',password='$password', role='$role' where nip='$nip'";
	
if(mysqli_query($con,$query))
	{
	header('location:daftar-pegawai.php?update=berhasil');
	}
else {header('location:daftar-pegawai.php?update=gagal');}
?>