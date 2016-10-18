<!DOCTYPE html>
<?php
include "../../config/connect.php";
session_start();

$nip = $_GET['nip'];

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
	  <li  class="active"><a href="daftar-pegawai.php"><i class="icon-list-alt"></i><span>Daftar Pegawai</span> </a> </li>
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
        <div class="span8">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-time"></i>
              <h3> Laporan Harian</h3>
            </div>
            <!-- /widget-header -->
			
			<?php
			
			
			//ambil data laporan
			$query ="select * from user where nip='$nip'";
			$data = mysqli_query($con,$query);
			$fetch = mysqli_fetch_array($data);
           ?>
		   <form method="POST" action="update-pegawai.php?nip=<?php echo $fetch['nip']; ?>">
		   <table width="100%" border="0" cellpadding="5" cellspacing="0">
    
        
            <td>Nama Pegawai</td>
            
            <td ><input size="350" type="text" class="form" name="nama" id="nama" value="<?php echo $fetch['nama']; ?>" ></td>
        </tr>
		<tr>
            <td>NIP</td>
            
            <td ><input size="350" type="int" class="form" name="NIP" id="NIP" value="<?php echo $fetch['nip'];?>" disabled></td>
        </tr>
		<tr>
            <td>Pangkat/Gol</td>
            
            <td ><input size="350" type="text" class="form" name="pangkat" id="pangkat" value="<?php echo $fetch['pangkat']; ?>" ></td>
        </tr>
		<tr>
            <td>Jabatan</td>
            
            <td ><input size="350" type="text" class="form" name="jabatan" id="jabatan" value="<?php echo $fetch['jabatan']; ?>" ></td>
        </tr>
		<tr>
            <td>Username</td>
            
            <td ><input size="350" type="text" class="form" name="username" id="username" value="<?php echo $fetch['username']; ?>" ></td>
        </tr>
		<tr>
            <td>Password</td>
            
            <td ><input size="350" type="text" class="form" name="password" id="password" value="<?php echo $fetch['password']; ?>" ></td>
        </tr>
			<tr>
            <td>Role</td>
			<td>
			<?php if($fetch['role']=='member'){ ?>
			<select name="role" id="role">
					<option value="Super Admin">Super Admin</option>
					<option value="Admin">Admin</option>
					<option value="member" selected >Member</option>
					
				</select>
			<?php } ?>

			<?php if($fetch['role']=='Admin'){ ?>
			<select name="role" id="role">
					<option value="Super Admin">Super Admin</option>
					<option value="Admin" selected>Admin</option>
					<option value="member">Member</option>
					
				</select>
			<?php } ?>
			
			<?php if($fetch['role']=='Super Admin'){ ?>
			<select name="role" id="role">
					<option value="Super Admin" selected>Super Admin</option>
					<option value="Admin">Admin</option>
					<option value="member" >Member</option>
					
				</select>
			<?php } ?>
            
		</td>		
		</tr> 	
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
