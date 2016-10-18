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

<script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas( {maxHeight : 261}) 
		});
  //]]>
  $('.SeeMore2').click(function(){
		var $this = $(this);
		$this.toggleClass('SeeMore2');
		if($this.hasClass('SeeMore2')){
			$this.text('See More');			
		} else {
			$this.text('See Less');
		}
	});
  </script>

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
	  <li ><a href="index.php"><i class="icon-home"></i><span>Home</span> </a> </li>
	  <li><a href="report.php"><i class="icon-list-alt"></i><span>Daftar Laporan Saya</span> </a> </li>
	   <li><a href="report-pegawai.php?sort=all"><i class="icon-list-alt"></i><span>Daftar Laporan Pegawai</span> </a> </li>
	  <li><a href="daftar-pegawai.php"><i class="icon-list-alt"></i><span>Daftar Pegawai</span> </a> </li>
	  <li class="active"><a href="halaman-upload.php"><i class="icon-upload-alt"></i><span>Upload File Bantuan</span> </a> </li>
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
	 
        <div class="span6">
		<div id="content">
        	<!--<h2>Upload</h2>-->
            
            <?php
			include "../../config/connect.php";
			if(isset($_POST['upload'])){
				$allowed_ext	= array('pdf');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				$nama			= $_POST['nama'];
				$deskripsi			= $_POST['deskripsi'];
				
				
				
				
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 1044070){
						$lokasi = '../../files/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$query = "INSERT INTO upload(id_file, nama_file, deskripsi, file) VALUES (NULL, '$nama', '$deskripsi', '$lokasi')";
						if(mysqli_query($con,$query)){
						
						echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
						//header('location:notulensia.php');
							
						}else{
						echo '<div class="error">ERROR: Gagal upload file!</div>';
						//header('location:notulensia.php');
							
						}
					}else{
					echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
					//header('location:notulensia.php');
						
					}
				}else{
					echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
					//header('location:notulensia.php');
					
				}
			}
			?>
            
            <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-upload"></i>
              <h3> Upload FIle</h3>
            </div>
			<div class="alert"><p align="justify" ><font size="2.5">Upload file Anda dengan melengkapi form di bawah ini. 
			<br>File yang bisa di Upload hanya file dengan ekstensi <b>.pdf</b> dan besar file (file size) maksimal hanya 1 MB.</font></p>
            </div>
			
            <form action="" method="post" enctype="multipart/form-data">
            <table width="100%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0">
            	<tr>
                	<td><b>Nama File</b></td>
					<td><input type="text" name="nama" size="40" required /></td>
                </tr>
                <tr>
					<td><b>Deskripsi File</b></td></td>
                	<td><textarea type="text" name="deskripsi" id="deskripsi" placeholder="masukkan laporan tugas anda"> </textarea></td>
                </tr>
				<tr>
                	<td><b>Pilih File</b></td><td><input type="file" name="file" required /></td>
                </tr>
                <tr>
                	<td>&nbsp;</td>
					<td>
					<input class="btn btn-primary" type="submit" name="upload" value="upload" />
					</a></td>
                </tr>
            </table>
            </form>
            
        </div>
    </div>
          
        </div>
        <!-- /span6 -->
        
    
        <div class="span6">
		
          <div class="widget">
            <div class="widget-header"> <i class="icon-file"></i>
              <h3>File yang sudah di upload</h3>
            </div>
			
			<?php
		if(isset($_GET["delete"])){
		if(($_GET["delete"]) == "berhasil"){
		 echo "<div class='alert alert-success'>
							<span style=''> <font color='CC3300'>File berhasil dihapus. </font></span>
						  </div>";}}
			
		if(isset($_GET["update"])){
		if(($_GET["update"]) == "berhasil"){
		 echo "<div class='alert alert-success'>
							<span style=''><font color='CC3300'> File berhasil diperbarui. </font></span>
						  </div>";}}
			
			?>
            <!-- /widget-header -->
            <div class="widget-content">
			<?php if(isset($_GET["edit"])){ 
			$id=$_GET["edit"];
			
			$query1 ="select * from upload where id_file=$id";
			$data1 = mysqli_query($con,$query1);
			$fetch1 = mysqli_fetch_array($data1);
			
			
			?>
				<form action="update-file.php?id_file=<?php echo $id;?>" method="post" enctype="multipart/form-data">
            <table width="100%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0">
            	<tr>
                	<td><b>Nama File</b></td>
					<td><input type="text" name="nama_file" size="40" value="<?php echo $fetch1['nama_file']?>"required /></td>
                </tr>
                <tr>
					<td><b>Deskripsi File</b></td></td>
                	<td><textarea type="text" name="deskripsi" id="deskripsi" > <?php echo $fetch1['deskripsi']?></textarea></td>
                </tr>
				<tr>
                	<td><b>Pilih File</b><br>*kosongkan jika tidak ingin mengganti file</td><td><input type="file" name="file" name="b" /></td>
                </tr>
                <tr>
                	<td>&nbsp;</td>
					<td>
					<input class="btn btn-primary" type="submit" name="upload" value="upload" />
					</a></td>
                </tr>
            </table>
            </form>
        
				
             
		<?php
			}
			
			
			$query ="select * from upload";
			$data = mysqli_query($con,$query);
			
			if(mysqli_num_rows($data)>0){
			?>
			
            
			<div class="table-responsives">
			<table class="table table-hover" width="100%">
			<tr>
			
			
			<td><b>Nama File</td>
			<td><b>Deskripsi</td>
			<td><b>Aksi</td>
			
        </tr>
		<?php		
		while ($fetch = mysqli_fetch_array($data)) {
		
	
		?>
	
        <tr>
            <td><?php  echo $fetch['nama_file']; 
				?>
				</td>
				
			<td><?php echo $fetch['deskripsi']; ?>
			</td>
			<td>
			<a href="halaman-upload.php?edit=<?php echo $fetch['id_file'];?>"> <button button class="btn"><font color="black">Edit</font></button></a>
		    <a href="<?php echo $fetch['file'];?>"><button button class="btn btn-primary"> <font color="white">Lihat</font></button></a>
		    <button button class="btn btn-danger" data-toggle="confirmation-singleton" href="hapus-file-bantuan.php?id_file=<?php echo $fetch['id_file'];?>">Hapus</button>
        </td>
        </tr>
    <?php
    }}
	else
	{echo"<div class='alert'>
	<span style=''> <font color='#B82E00'>Data belum ada yang di upload</font> </span>
	</div>";}
    
    ?>
</table>
				
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
<script src="../../assets/js/bootstrap-confirmation.min.js"></script>
<script>
  $('[data-toggle=confirmation]').confirmation();
  $('[data-toggle=confirmation-singleton]').confirmation({ singleton:true });
  $('[data-toggle=confirmation-popout]').confirmation({ popout: true });
</script>
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 
</body>
</html>
