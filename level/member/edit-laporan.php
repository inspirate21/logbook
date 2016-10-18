<!DOCTYPE html>
<?php
include "../../config/connect.php";
session_start();

$user = $_SESSION['userid'];


if (!isset($user)){
header('Location: ../../index.php');
}
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
<script type="text/javascript" src="../../nicEdit/nicEditlatest.js"></script> 
<script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas( {maxHeight : 261}) 
		});
  //]]>
  </script>
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
	 <div class="row">
        <div class="span8">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-report"></i>
              <h3> Laporan Harian</h3>
            </div>
            <!-- /widget-header -->
			
			<?php
			$id = $_GET['id'];
			
			//ambil data laporan
			$query ="select * from uraian_tugas where id_laporan='$id'";
			$data = mysqli_query($con,$query);
			$fetch = mysqli_fetch_array($data);
           ?>
		   <form method="POST" action="update-laporan.php?id=<?php echo $fetch['id_laporan']; ?>">
		   <table width="100%" border="0" cellpadding="5" cellspacing="0">
    
        <tr>
            <td>Judul Laporan</td>
            
            <td ><input size="350" type="text" class="form" name="judul_laporan" id="judul_laporan" value="<?php echo $fetch['judul_laporan']; ?>" ></td>
        </tr>
		 <tr>
            <td>Tanggal Tugas</td>
            
            <td><input size="350" type="date" class="form" name="tanggal_tugas" id="tanggal_tugas" value="<?php echo $fetch['Tanggal_tugas'];?>">
			*format tanggal(YYYY-MM-DD) </td>
        </tr>
		<tr>
            <td>Deskripsi Tugas</td>
            
            <td><textarea rows="1" cols="500" type="text" class="form" name="deskripsi" id="deskripsi" style="width: 637px; height: 261px;"> <?php echo $fetch['Isi_tugas']; ?></textarea> </td>
			
	   </tr>
        <tr>
            <td align="center" colspan="3">
			<input class="btn btn-primary" type="submit" name="submit" value="Simpan" /> 
		</table>
	</form>   
		   
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
