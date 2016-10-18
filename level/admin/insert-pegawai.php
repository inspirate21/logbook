<?php
//panggil file config.php untuk menghubung ke server
include "../../config/connect.php";


//tangkap data dari form
$nama = $_POST['nama'];
$nip = $_POST['NIP'];
$pangkat = $_POST['pangkat'];
$jabatan = $_POST['jabatan'];
$username= $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

//simpan data ke database
$query2 ="insert into user(nama, nip, pangkat, jabatan, username,password, role) values('$nama','$nip','$pangkat','$jabatan','$username','$password','$role')" ;

	
	
	
if(mysqli_query($con,$query2))
	{
	header('Location:daftar-pegawai.php?insert=berhasil');
	}
else {header('Location:daftar-pegawai.php?insert=gagal');}
?>
 