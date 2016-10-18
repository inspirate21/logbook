<?php
//panggil file config.php untuk menghubung ke server
include "../../config/connect.php";
session_start();
$id = $_GET['id'];

$query ="delete from uraian_tugas Where id_laporan=$id" ;

$user = $_SESSION['userid'];

if (!isset($user)){
header('Location: ../../index.php');
}



				
				 if(mysqli_query($con,$query))
					{
						
						header('Location:report-pegawai.php?delete=berhasil');
					 } 
						else { 
						header('Location:report-pegawai.php?delete=gagal');
					 } 		
?>