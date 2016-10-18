<?php
//panggil file config.php untuk menghubung ke server
include "../../config/connect.php";
session_start();
$id = $_GET['id'];


//tangkap data dari form
$judul_laporan = $_POST['judul_laporan'];
$tanggal_tugas = $_POST['tanggal_tugas'];
$deskripsi = $_POST['deskripsi'];


$query ="update uraian_tugas set judul_laporan='$judul_laporan', Tanggal_tugas='$tanggal_tugas', Isi_tugas='$deskripsi' where id_laporan='$id'" ;

$user = $_SESSION['userid'];

if (!isset($user)){
header('Location: ../../index.php');
}	
	
 if(mysqli_query($con,$query))
					{
						
						header('Location:index.php?update=berhasil');
					 } 
						else { 
						header('Location:index.php?update=gagal');	}

?>
