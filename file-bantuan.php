<?php
include "config/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Login - BPTP Jakarta</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<link href="assets/css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<div class="nav-collapse">
				<ul class="nav pull-left">
					<img src="BPTP.png" width="300px" height="450px"> </img>
					
				</ul>
				
			</div><!--/.nav-collapse -->
					
			
				
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="container">
	 <div class="row">
        <div class="span8">
	
	<h1>File Bantuan</h1>
	<p>Silahkan download file dibawah ini untuk panduan.</p>
		
<div class="table-responsives">
<table class="table table-hover">
        <tr>
			
			
			<td align=	"center"><b>Nama File</td>
			<td><b>Deskripsi</td>
			<td><b>Download</td>
			
			
        </tr>

    <?php
			
			
			//ambil nip
			$query ="select * from upload";
			
			$data = mysqli_query($con,$query);
			
			
    while ($fetch = mysqli_fetch_array($data)) {
    
	?>
        <tr>
            <td><?php echo $fetch['nama_file']; ?></td>
			<td><?php echo $fetch['deskripsi']; ?></</td>
			<?php $simpan= $fetch['file'];
			$path = substr($simpan,6); 
			
			?>
			
			          
            <td>
			
           <a href="<?php echo $path;?>"><button button class="btn btn-primary">   <font color="white">Download</font></button></a></td>
		</tr>
    <?php
        
    }
	 ?>
	 <tr><a href="index.php"><button button class="btn"> <font color="black">kembali ke halaman utama</font></button></a>
   
</table>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
</div>

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>
