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

	
	
	

?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Log Out - Logbook BPTP Jakarta</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
	    
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	
	<link href="../../assets/css/font-awesome.css" rel="stylesheet">
	    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	    
	<link href="../../assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
							
			</a>		
			<div class="nav-collapse">
				<ul class="nav pull-left">
					<img src="BPTP.png" width="300px" height="450px"> </img>
					
				</ul>
				
			</div><!--/.nav-collapse -->
			
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="container">
	
	<div class="row">
		
		<div class="span12">
			
			<div class="error-container">
				
				<?php if(mysqli_query($con,$query2))
					{?>	
						<div class="error-details">
						Laporan berhasil dibuat.
						<div class="error-details">
					<?php } 
						else { ?>
						<div class="error-details">
						Laporan gagal dibuat.
						<div class="error-details">	
					<?php } ?>			
				
					
					
				</div> <!-- /error-details -->
				
				<div class="error-actions">
					<a href="index.php" class="btn btn-large btn-primary">
						<i class="icon-chevron-left"></i>
						&nbsp;
						Kembali						
					</a>
					
					
					
				</div> <!-- /error-actions -->
							
			</div> <!-- /error-container -->			
			
		</div> <!-- /span12 -->
		
	</div> <!-- /row -->
	
</div> <!-- /container -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>

</html>
 