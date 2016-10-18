<?php
include "../../config/connect.php";
session_start();
$id = $_GET['id'];

$user = $_SESSION['userid'];

if (!isset($user)){
header('Location: ../../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>BPTP Jakarta</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->
		<link href="../../assets/css/print-bootstrap.css" rel="stylesheet">
		<style type="text/css">	body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
</style>
		<link href="../../assets/css/print-bootstrap-responsive.css" rel="stylesheet">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- Le fav and touch icons -->
		<script type="text/javascript" src="../../assets/js/jquery.js"></script>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner"></div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="span8 offset2">
					<div>
					
					<h2 id="headings"> Laporan Harian </h2>
				

					
					<table  class="table  table-condensed table-hover">
					
	
	<?php
			$query ="select * from uraian_tugas where id_laporan='$id'";
			$data = mysqli_query($con,$query);
			$fetch	= mysqli_fetch_array($data);
			?>
	<tbody>


		
		<tr>
			<td>Nama</td>
			<td><?php echo $fetch['Nama']?></td>
		</tr>
		
		<tr>
			<td>Judul</td>
			<td><?php echo $fetch['judul_laporan']?></td>
		</tr>
		
		<tr>
			<td>Tanggal</td>
			<td><?php echo $fetch['Tanggal_tugas']?></td>
		</tr>
		
		<tr>
			<td>Deskripsi</td>
			<td><?php echo $fetch['Isi_tugas']?></td>
		</tr>
		
		<tr>
			<td></td>
			<td></td>
		</tr>
		
	</tbody>
</table>

<script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>

<!-- <p align='center'>
		<a href="cetak.php" cls='btn' onClick="window.print()"> <i class='icon-print'></i>Cetak </a>
			</p> __>

					</div><!--/span-->
				</div><!--/row-->
			</div>
			<!--<footer>
				<p style="text-align: center">
					&copy;belajar 2012
				</p>
			</footer> -->
		</div><!--/.fluid-container-->
	</body>
</html>
