<?php
include "../../config/connect.php";

session_start();
$user		= $_SESSION['userid'];

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
	<script src="../../assets/js/jquery-1.7.2.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
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
        <div class="span10">
		<?php
		if(isset($_GET["insert"])){
		if(($_GET["insert"]) == "berhasil"){
		 echo "<div class='alert alert-success'>
							<span style=''><font color='CC3300'> Akun pegawai baru berhasil dibuat. </font></span>
						  </div>";}
		else if(($_GET["insert"]) == "gagal"){
		 echo "<div class='alert'>
							<span style=''><font color='#B82E00'> Akun pegawai baru gagal dibuat. </font></span>
						  </div>";}}
						  
		if(isset($_GET["update"])){
		if(($_GET["update"]) == "berhasil"){
		 echo "<div class='alert alert-success'>
							<span style=''><font color='CC3300'> Akun pegawai baru berhasil diperbarui. </font></span>
						  </div>";}
		else if(($_GET["update"]) == "gagal"){
		 echo "<div class='alert'>
							<span style=''><font color='#B82E00'> Akun pegawai baru gagal diperbarui. </font></span>
						  </div>";}}
						  
						  if(isset($_GET["delete"])){
		if(($_GET["delete"]) == "berhasil"){
		 echo "<div class='alert alert-success'>
							<span style=''><font color='CC3300'> Akun pegawai baru berhasil dihapus. </font></span>
						  </div>";}
		else if(($_GET["delete"]) == "gagal"){
		 echo "<div class='alert'>
							<span style=''><font color='#B82E00'> Akun pegawai baru gagal dihapus. </font></span>
						  </div>";}}
			?>
          <div class="widget widget-nopad">
		   
            <div class="widget-header"> <i class="icon-user"></i>
              <h3> Daftar Pegawai</h3>
            </div>
            <!-- /widget-header -->
           
		   <button button class="btn btn-info"><a href="tambah-pegawai.php"><font color="white">+ Tambah akun pegawai</font></a></button>

<div class="table-responsives">
<table class="table table-bordered">
        <tr>
			<td>Nama Pegawai</td>
            <td>NIP</td>
			<td>Pangkat/Gol</td>
			<td>Jabatan</td>
            <td>Username</td>
			<td>Aksi</td>
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
			$result = mysqli_query($con,"select * from user Limit $start, $perpage");
			
			
			//ambil nip
			//$query1 ="select * from user ";
			//$data1 = mysqli_query($con,$query1);
			
			
			
			
			
			
    while ($fetch = mysqli_fetch_array($result)) {
    
	?>
        <tr>
            <td><?php echo $fetch['nama']; ?></td>
			<td><?php echo $fetch['nip']; ?></</td>
			<td><?php echo $fetch['pangkat']; ?></td>
            <td><?php echo $fetch['jabatan']; ?></td>
			<td><?php echo $fetch['username']; ?></td>             
            
            <td><a href="edit-pegawai.php?nip=<?php echo $fetch['nip']; ?>"><button button class="btn"><font color="black">Edit</font></button></a>
			<button button class="btn btn-danger" data-toggle="confirmation-singleton" href="hapus-pegawai.php?nip=<?php echo $fetch['nip'];?>" ><font color="white">Hapus</font></a></button></td>
        </tr>
    <?php
        
    }
    ?>
</table>
	
		<?php
		if(isset($page)){
		$result = mysqli_query($con,"select Count(*) As Total from user");
		$rows = mysqli_num_rows($result);
		
		if($rows)
		{
		$rs = mysqli_fetch_assoc($result);
		$total = $rs["Total"];
		}
		
		$totalpages = ceil($total / $perpage);
		?>
		<ul class="pagination">
		<?php
		if($page <= 1){
		echo "<li class='disabled'><a>< Prev</a></li>";
		}
		
		else{
		$j = $page - 1;
		echo "<li><a href='daftar-pegawai.php?page=$j'>< Prev</a></li>";
		}
		for($i=1; $i <= $totalpages;$i++){
		if($i<>$page){
		echo "<li><a href='daftar-pegawai.php?page=$i'>$i</a></li>";
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
		echo "<li><a href='daftar-pegawai.php?page=$j'>Next ></a></li>";
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
<script src="../../assets/js/bootstrap-confirmation.min.js"></script>

<script>
  $('[data-toggle=confirmation]').confirmation();
  $('[data-toggle=confirmation-singleton]').confirmation({ singleton:true });
  $('[data-toggle=confirmation-popout]').confirmation({ popout: true });
</script>
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 

</body>
</html>