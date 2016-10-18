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
	  <li  class="active"><a href="report.php"><i class="icon-list-alt"></i><span>Daftar Laporan</span> </a> </li>
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
        <div class="span12">
		<?php
		if(isset($_GET["delete"])){
		if(($_GET["delete"]) == "berhasil"){
		 echo "<div class='alert alert-success'>
							<span style=''> <font color='CC3300'> Laporan berhasil dihapus. </font></span>
						  </div>";}}
			?>
		
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-book"></i>
              <h3> Laporan Harian Saya</h3>
            </div>
            <!-- /widget-header -->
           
		    <button button class="btn btn-info"><a href="index.php"><font color="white">+ Tambah Laporan</font></a></button>
		  
<div class="table-responsives">
<table class="table table-bordered">
        <tr>
			<td>Id Laporan</td>
            <td>Judul Laporan</td>
			<td>Tanggal Tugas</td>
			<td>Tanggal Input</td>
            <td>Aksi</td>
        </tr>

    <?php
			//ambil nip
			$query1 ="select * from user where username='$user'";
			$data1 = mysqli_query($con,$query1);
			$fetch1	= mysqli_fetch_array($data1);
			$nip= $fetch1['nip'];
			
			//ambil data laporan
			$query ="select * from uraian_tugas where NIP='$nip'";
			$data = mysqli_query($con,$query);
			
			
    while ($fetch = mysqli_fetch_array($data)) {
    
	?>
        <tr>
            <td><?php echo $fetch['id_laporan']; ?></td>
			<td><?php echo $fetch['judul_laporan']; ?></</td>
			<td><?php echo $fetch['Tanggal_tugas']; ?></td>
            <td><?php echo $fetch['Tanggal_input']; ?></td>            
            
            <td>
				<a href="html2.php?id=<?php echo $fetch['id_laporan']; ?>"><button button class="btn btn-primary"><font color="white">Download</font></button></a>
			<a href="cetak.php?id=<?php echo $fetch['id_laporan']; ?>"><button button class="btn btn-primary"><font color="white">Print</font></button></a>
			<a href="edit-laporan.php?id=<?php echo $fetch['id_laporan']; ?>"><button button class="btn"><font color="black">Edit</font></button></a>
			
			<a href="test.php?id=<?php echo $fetch['id_laporan']; ?>"><button button class="btn"><font color="black">Lihat</font></button>	</a>
		    <button button button class="btn btn-danger" data-toggle="confirmation-singleton" href="hapus-laporan.php?id=<?php echo $fetch['id_laporan']?>" >Hapus</button>
     
			 </tr>
    <?php
        
    }
    ?>
</table>
	<?php
		if(isset($page)){
		$result = mysqli_query($con,"select Count(*) As Total from uraian_tugas where NIP='$nip'");
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
		echo "<li><a href='report.php?page=$j'>< Prev</a></li>";
		}
		for($i=1; $i <= $totalpages;$i++){
		if($i<>$page){
		echo "<li><a href='report.php?page=$i'>$i</a></li>";
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
		echo "<li><a href='report.php?page=$j'>Next ></a></li>";
		}
		}
		
		
		
			?>
		   
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