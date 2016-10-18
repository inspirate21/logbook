<?php
//panggil file config.php untuk menghubung ke server
include "../../config/connect.php";
session_start();

$user = $_SESSION['userid'];

if (!isset($user)){
header('Location: ../../index.php');
}

//tangkap data dari form
$judul_laporan = $_POST['judul_laporan'];
$tanggal_tugas = $_POST['tanggal_tugas'];
$deskripsi = $_POST['deskripsi'];
$judul_laporan = $_POST['judul_laporan'];
$tanggal_input=date('Y-m-d');

//ambil data pegawai
$query ="select * from user where username='$user'";
$data = mysqli_query($con,$query);
$fetch	= mysqli_fetch_array($data);
$nama = $fetch['nama'];
$nip = $fetch['nip'];

//simpan data ke database
$query2 ="insert into uraian_tugas (judul_laporan, Nama, NIP, Tanggal_input, Tanggal_tugas,Isi_tugas) values('$judul_laporan','$nama','$nip','$tanggal_input','$tanggal_tugas','$deskripsi')" ;

					 if(mysqli_query($con,$query2))
					{
						header('Location:index.php?insert=berhasil');
					 } 
						else { 
						header('Location:index.php?insert=gagal');
					 } 		
	
	

?>

 