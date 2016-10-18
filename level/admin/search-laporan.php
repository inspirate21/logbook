<?php
include "../../config/connect.php";
include "../../config/change-bulan-to-nomor.php";
include "../../config/change-month.php";
session_start();
$user = $_SESSION['userid'];

if (!isset($user)){
header('Location: ../../index.php');
}

$search = $_POST['cari_laporan'];
$tahun=$_POST['tahun'];
$namabulan=$_POST['bulan'];
$bulan=changebulantonomor($namabulan);
if($_POST['hari'] <10){
$hari=("0".$_POST['hari']);
}
else{
$hari=$_POST['hari'];
}
if ($_POST['hari']== ''){
$tglcari= ($tahun."-".$bulan);}
else{
$tglcari= ($tahun."-".$bulan."-".$hari);}



$currDate		= date('Y-m-d');
$year       = substr($currDate,0,4);
$month      = substr($currDate,5,2);
$day        = substr($currDate,8,2);
$month_new  = changemonth($month);
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>Logbook- BPTP Jakarta</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../../assets/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="../../assets/css/font-awesome.css" rel="stylesheet">
<link href="../../assets/css/style.css" rel="stylesheet">
<link href="../../assets/css/pages/dashboard.css" rel="stylesheet">
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
	  <li><a href="index.php"><i class="icon-home"></i><span>Home</span> </a> </li>
	  <li><a href="report.php"><i class="icon-list-alt"></i><span>Daftar Laporan Saya</span> </a> </li>
	  <li class="active"><a href="report-pegawai.php?sort=all"><i class="icon-list-alt"></i><span>Daftar Laporan Pegawai</span> </a> </li>
	  <li><a href="daftar-pegawai.php"><i class="icon-list-alt"></i><span>Daftar Pegawai</span> </a> </li>
	  <li><a href="halaman-upload.php"><i class="icon-upload-alt"></i><span>Upload File Bantuan</span> </a> </li>      
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
	 <div class="row">
  <div class="widget widget-nopad">
			<div class="span6">
            <div class="widget-header"> <i class="icon-sort"></i>
              <h3> Sorting semua laporan berdasarkan:	</h3> <a href="report-pegawai.php?sort=tanggal">Tanggal Tugas</a>||<a href="report-pegawai.php?sort=nama">Nama Pegawai</a> 
            </div>
            <!-- /widget-header -->
	</div>
	</div>
	</div>
	</div>
	
	  <div class="container">
	 <div class="row">
  <div class="widget widget-nopad">
			<div class="span6">
            <div class="widget-header"> <i class="icon-sort"></i>
              <h3> Kelompokkan laporan berdasarkan:</h3> <a href="report-pegawai-kelompok.php?sort=kelompok-tanggal">Tanggal Tugas</a>||<a href="report-pegawai-kelompok.php?sort=nama">Nama Pegawai</a> 
            </div>
            <!-- /widget-header -->
	</div>
	</div>
	</div>
	</div>
	
	
	
  
    <div class="container">
	 <div class="row">
        <div class="span12">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-book"></i>
			<div class='pull-right'>
			
            <!-- /widget-header -->
           
              
        
			<form  name="cari_transaksi" action="search-laporan.php?" method="post">
				<input type= "text" name="cari_laporan" placeholder="Masukkan Nama Pegawai"/>
				<select name="hari" style="width:100px">
					<option selected value="">Tanggal</option>
		<?php	$tgl = 1;
				while ($tgl < 32) { ?>
					<option value="<?php echo $tgl; ?>"><?php echo $tgl; ?></option>
		<?php  	$tgl++;
				}	?>
				</select>
				
				<select required name="bulan" style="width:90px">
					<option value="">Bulan</option>
					<option value="Januari">Januari</option>
					<option value="Februari">Februari</option>
					<option value="Maret">Maret</option>
					<option value="April">April</option>
					<option value="Mei">Mei</option>
					<option value="Juni">Juni</option>
					<option value="Juli">Juli</option>
					<option value="Agustus">Agustus</option>
					<option value="Oktober">Oktober</option>
					<option value="November">November</option>
					<option value="Desember">Desember</option>
				</select>
				
				
				<input type="text" name="tahun" value="<?php echo $year; ?>" style="width:60px">
				
				<input style="margin-bottom:8px" type="submit" class="btn btn-primary" name="submit" value="Cari"  /> 
			</form> 
			</div>
              <h3> Laporan Harian Pegawai</h3>
            </div>
		   



    <?php
	
			//ambil nip
			$query1 ="select * from user where username='$user'";
			$data1 = mysqli_query($con,$query1);
			$fetch1	= mysqli_fetch_array($data1);
			$nip= $fetch1['nip'];
			
			//ambil data laporan
			$query ="select * from uraian_tugas where Nama like '%$search%' and Tanggal_tugas LIKE '%$tglcari%'";
			$data = mysqli_query($con,$query);
			
	if(mysqli_num_rows($data)>0){?>
	<div class="table-responsives">
<table class="table table-bordered">
        <tr>
			<td>Id Laporan</td>
			<td>Judul Laporan</td>
			<td>Nama Pegawai</td>
			<td>Tanggal Tugas</td>
			<td>Tanggal Input</td>
            <td>Aksi</td>
        </tr>
    <?php		
    while ($fetch = mysqli_fetch_array($data)) {
    
	?>
        <tr>
            <td><?php echo $fetch['id_laporan']; ?></td>
			<td><?php echo $fetch['judul_laporan']; ?></</td>
			<td><?php echo $fetch['Nama']; ?></</td>
			<td><?php echo $fetch['Tanggal_tugas']; ?></td>
            <td><?php echo $fetch['Tanggal_input']; ?></td>            
            
            <td><a href="html2.php?id=<?php echo $fetch['id_laporan']; ?>"><button button class="btn btn-primary"><font color="white">Download</font></button></a>
			<a href="cetak.php?id=<?php echo $fetch['id_laporan']; ?>"><button button class="btn btn-primary"><font color="white">Print</font></button></a>
			<a href="test.php?id=<?php echo $fetch['id_laporan']; ?>"><button button class="btn"><font color="black">Lihat</font></button></a>
			<button button class="btn btn-danger" data-toggle="confirmation-singleton" href="hapus2-laporan.php?id=<?php echo $fetch['id_laporan'];?>">Hapus</button></td>
       </tr>
    <?php
        
    }}
	else{echo "<div class='alert'>
	<span style=''> <font color='#B82E00'>Tidak ada data yang cocok dengan kata kunci.</font> </span>
	</div>";}
    ?>
</table>
	
		   
          </div>
          
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