<?php
//panggil file config.php untuk menghubung ke server
include "../../config/connect.php";


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
<?php
include "../../config/connect.php";
session_start();

$user = $_SESSION['userid'];
?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Logbook- BPTP Jakarta</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<?php
include "header-after-login.php";
?>
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
	  <li class="active"><a href="index.php"><i class="icon-home"></i><span>Home</span> </a> </li>
	  <li><a href="report.php"><i class="icon-list-alt"></i><span>Daftar Laporan</span> </a> </li>
      <li><a href="profile.php"><i class="icon-user"></i><span>Profile</span> </a> </li>
      <li class="nav navbar-nav navbar-right"><a href="logout.php"><i class="icon-off"></i><span>Logout</span> </a> </li>
       
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->


<div class="main">
  <div class="main-inner">
  
		<div class="container">
		<div class="error-container">
				
				<?php if(mysqli_query($con,$query2))
					{?>	
						<div class="error-details">
						Laporan berhasil dibuat.
						</div class="error-details">
					<?php } 
						else { ?>
						<div class="error-details">
						Laporan gagal dibuat.
						</div class="error-details">	
					<?php } ?>			
				
					
					
				
													
			</div> <!-- /error-container -->
			</div>
  
  
    <div class="container">
		
	 <div class="row">
        <div class="span8">
		
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-time"></i>
              <h3> Laporan Harian</h3>
            </div>
            <!-- /widget-header -->
           <form method="POST" action="insert-laporan.php">
		   <table width="100%" border="0" cellpadding="5" cellspacing="0">
    
        <tr>
            <td>Judul Laporan</td>
            
            <td ><input size="350" type="text" class="form" name="judul_laporan" id="judul_laporan" placeholder="masukkan judul laporan"></td>
        </tr>
		 <tr>
            <td>Tanggal Tugas</td>
            
            <td ><input size="350" type="date" class="form" name="tanggal_tugas" id="tanggal_tugas" placeholder="masukkan tanggal anda bertugas">
			*format tanggal(YYYY-MM-DD)</td>
        </tr>
		<tr>
            <td>Deskripsi Tugas</td>
            
            <td><textarea rows="1" cols="500" type="text" class="form" name="deskripsi" id="deskripsi" placeholder="masukkan laporan tugas anda" style="width: 637px; height: 261px;"> </textarea></td>
			
	   </tr>
        <tr>
            <td align="center" colspan="3">
			<input class="btn btn-primary" type="submit" name="submit" value="Simpan" /> 
		</table>
	</form>   
		   
          </div>
          
        </div>
        <!-- /span6 -->
        
    
        <div class="span4">
		
          <div class="widget">
            <div class="widget-header"> <i class="icon-user"></i>
              <h3>Profil</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
			<?php
			$query ="select * from user where username='$user'";
			$data = mysqli_query($con,$query);
			$fetch	= mysqli_fetch_array($data);
			?>
        
				
              <table class="table table-hover" width="100%">
						
				<td>Nama</td>
				<td><?php echo $fetch['nama']; ?></td>
				</tr>
				<tr>
				<td>NIP</td>
				<td><?php echo $fetch['nip']; ?></td>
				</tr>
				<tr>
				<td>Pangakat/Golongan</td>
				<td><?php echo $fetch['pangkat']; ?></td>
				</tr>
				<tr>
				<td>Jabatan</td>
				<td><?php echo $fetch['jabatan']; ?></td>
				</tr>
				
			  </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
          
          
          
        </div>
        <!-- /span6 --> 
      </div>
	  
      <!-- /row --> 
	
      
		</div>
	  <!-- /row -->
 


		  <!-- table -->
        
        <!-- /span6 --> 
      
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2015 <a href="index.php">Logbook - BPTP Jakarta</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 
</body>
</html>
						
			
		