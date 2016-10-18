<?php
//panggil file config.php untuk menghubung ke server
include "../../config/connect.php";
session_start();
$id_file = $_GET['id_file'];

$query ="delete from upload Where id_file=$id_file" ;

if(mysqli_query($con,$query))
	{header('Location:halaman-upload.php?delete=berhasil');
					 } 
						else { 
						header('Location:halaman-upload.php?delete=gagal');
					 } 		
?>