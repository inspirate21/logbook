<?php
session_start();
include "../../config/connect.php";
$userid		= $_SESSION['userid'];
$old		= $_POST['old'];
$new1		= $_POST['new1'];
$new2		= $_POST['new2'];
$select		= "SELECT * FROM user WHERE username='$userid'";
$query		= mysqli_query($con, $select);
$fetch		= mysqli_fetch_array($query);

if (!isset($userid)){
header('Location: ../../index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Error - Logbook</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
	    
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	
	<link href="../../assets/css/font-awesome.css" rel="stylesheet">
	    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	    
	<link href="../../assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
	
	<?php
include "header-after-login.php";
?>



<div class="container">
	
	<div class="row">
		
		<div class="span12">
			
			<div class="error-container">
<?php
if ($old !== $fetch['password']) {
?>
<h2>Password lama salah.</h2>
<?php
} else if ($new1 !== $new2) {
?>
<h2>Password baru tidak cocok</h2>
<?php
} else {
	// $encrypt = md5($new2);
	$update	= "UPDATE user SET password='$new2' WHERE username='$userid'";
	$query	= mysqli_query($con, $update);
	if ($query == TRUE) { 
	
    
	
	// remove all session variables
	session_unset(); 

// destroy the session 
	session_destroy(); 
	
    unset($_SESSION['userid']);
    

	?>
		<div class="error-details">
					Password berhasil diubah, silahkan klik disini untuk login kembali >>
					<a href="../../index.php"><button button class="btn btn-primary"> Login</button></a> 
					
				</div> <!-- /error-details -->
	<?php } else {
	
	
}
}
?>
				
				
				
				
				
							
			</div> <!-- /error-container -->			
			
		</div> <!-- /span12 -->
		
	</div> <!-- /row -->
	
</div> <!-- /container -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>

</html>
