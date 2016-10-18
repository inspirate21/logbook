<?php
include "../../config/connect.php";

session_start();
$user = $_SESSION['userid'];

if (!isset($user)){
header('Location: ../../index.php');
}
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
	  <li><a href="report-pegawai.php?sort=all"><i class="icon-list-alt"></i><span>Daftar Laporan Pegawai</span> </a> </li>
	  <li class="active"><a href="daftar-pegawai.php"><i class="icon-list-alt"></i><span>Daftar Pegawai</span> </a> </li>
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
        <div class="span10">
          <div class="widget widget-nopad">
		   
            <div class="widget-header"> <i class="icon-user"></i>
              <h3> Daftar Pegawai</h3>
            </div>
            <!-- /widget-header -->
           
		   

<div class="table-responsives">
<table class="table table-bordered">
        <tr>
			<td>Nama Pegawai</td>
            <td>NIP</td>
			<td>Pangkat/Gol</td>
			<td>Jabatan</td>
            <td>Username</td>
		</tr>

    <?php
			//ambil nip
			$query1 ="select * from user ";
			$data1 = mysqli_query($con,$query1);
			
			
			
			
			
			
    while ($fetch = mysqli_fetch_array($data1)) {
    
	?>
        <tr>
            <td><?php echo $fetch['nama']; ?></td>
			<td><?php echo $fetch['nip']; ?></</td>
			<td><?php echo $fetch['pangkat']; ?></td>
            <td><?php echo $fetch['jabatan']; ?></td>
			<td><?php echo $fetch['username']; ?></td>             
        </tr>
    <?php
        
    }
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