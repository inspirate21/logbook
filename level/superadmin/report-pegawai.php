<?php
include "../../config/connect.php";
include "../../config/change-month.php";
session_start();
$user = $_SESSION['userid'];

if (!isset($user)){
header('Location: ../../index.php');
}
if(isset($_GET["sort"])){
if (substr(($_GET['sort']),4,1)=="-"){
$search = $_GET['sort'];}
elseif( $_GET['sort'] !== "nama" and $_GET['sort'] !== "tanggal" and substr(($_GET['sort']),0,4)!==2015){
$search=$_GET['sort'];}
}


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
              <h3> Sorting semua laporan berdasarkan:</h3> <a href="report-pegawai.php?sort=tanggal">Tanggal Tugas</a>||<a href="report-pegawai.php?sort=nama">Nama Pegawai</a> 
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
           
              
        
			<form  name="cari_transaksi" action="search-laporan.php?=" method="post">
				<input type= "text" name="cari_laporan" placeholder="Masukkan Nama Pegawai"/>
				<select name="hari" style="width:100px">
					<option selected value="">Tanggal</option>
		<?php	$tgl = 1;
				while ($tgl < 32) { ?>
					<option value="<?php echo $tgl; ?>"><?php echo $tgl; ?></option>
		<?php  	$tgl++;
				}	?>
				</select>
				
				<select required name="bulan" style="width:100px">
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
				
				
				<input type="text" name="tahun" value="<?php echo $year; ?>" style="width:30px">
				
				<input style="margin-bottom:8px" type="submit" class="btn btn-primary" name="submit" value="Cari"  /> 
			</form> 
			</div>
              <h3> Laporan Harian Pegawai</h3>
            </div>
            <!-- /widget-header -->
           
		   

<div class="table-responsives">
<table class="table table-bordered">
        <tr>
			<td>Id Laporan</td>
			<td>Judul Laporan</td>
			<td>Nama Pegawai</td>
			<td>Tanggal Tugas</td>
			<td>Tanggal Input</td>
            
        </tr>

    <?php
			$perpage= 10;
			
			if(isset($_GET["page"])){
			$page = intval($_GET["page"]);
			}
			else{
			$page=1;
			}
			
			$calc= $perpage * $page;
			$start= $calc - $perpage;
			
			
			//ambil nip
			$query1 ="select * from user where username='$user'";
			$data1 = mysqli_query($con,$query1);
			$fetch1	= mysqli_fetch_array($data1);
			$nip= $fetch1['nip'];
			
			if(isset($_GET["sort"])){
			
			
			if ($_GET['sort']=="tanggal"){$query ="select * from uraian_tugas order by Tanggal_tugas Limit $start, $perpage";
										  $total="select Count(*) As Total from uraian_tugas order by Tanggal_tugas";}
			
			elseif ($_GET['sort']=="nama"){$query ="select * from uraian_tugas order by nama Limit $start, $perpage";
										$total="select Count(*) As Total from uraian_tugas order by nama";}
			
			elseif ($_GET['sort']=="all"){$query ="select * from uraian_tugas Limit $start, $perpage";
										 $total="select Count(*) As Total from uraian_tugas";}
			
			elseif (substr(($_GET['sort']),4,1)=="-"){$query ="select * from uraian_tugas where Tanggal_tugas='$search' Limit $start, $perpage";
													    $total="select Count(*) As Total from uraian_tugas where Tanggal_tugas='$search'";}
			
			elseif ( $_GET['sort'] !== "nama" and $_GET['sort'] !== "tanggal" and substr(($_GET['sort']),0,4)!==2015){$query ="select * from uraian_tugas where Nama='$search' Limit $start, $perpage";
																													$total="select Count(*) As Total from uraian_tugas where Nama='$search'";}
			}
			else{
			$query ="select * from uraian_tugas Limit $start, $perpage";
			$total="select Count(*) As Total from uraian_tugas";
			}
			
			
			$data = mysqli_query($con,$query);
			
			
    while ($fetch = mysqli_fetch_array($data)) {
    
	?>
        <tr>
            <td><?php echo $fetch['id_laporan']; ?></td>
			<td><?php echo $fetch['judul_laporan']; ?></</td>
			<td><?php echo $fetch['Nama']; ?></</td>
			<td><?php echo $fetch['Tanggal_tugas']; ?></td>
            <td><?php echo $fetch['Tanggal_input']; ?></td>            
            
           </tr>
    <?php
        
    }
    ?>
</table>
		<?php
		$result = mysqli_query($con,$total);
		$ambil= mysqli_fetch_array($result);
		$totaldata= $ambil["Total"];
		
		if($totaldata >= $perpage){
		if(isset($page)){	
		
		
		//$rows = mysqli_num_rows($result);
		
		//if($rows)
		//{
		//$rs = mysqli_fetch_assoc($result);
		//$total = $rs["Total"];
		//}
		
		$totalpages = ceil($totaldata / $perpage);
		
		?>
		<ul class="pagination">
		<?php
		if($page <= 1){
		echo "<li class='disabled'><a>< Prev</a></li>";
		}
		
		else{
		$j = $page - 1;
		echo "<li><a href='report-pegawai.php?page=$j'>< Prev</a></li>";
		}
		for($i=1; $i <= $totalpages;$i++){
		if($i<>$page){
		echo "<li><a href='report-pegawai.php?page=$i'>$i</a></li>";
		}
		else{
		echo "<li class='disabled'><a>$i</a></li>";
		}
		}
		if($page == $totalpages){
		echo "<li class='disabled'><a>Next ></a></li>";
		}
		else{
		$j = $page+1;
		echo "<li><a href='report-pegawai.php?page=$j'>Next ></a></li>";
		}
		}
		}
		
		
			?>
			</ul>
	
		   
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