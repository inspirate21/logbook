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




<div class="account-container">

	
	<div class="content clearfix">
		
		<form method="POST" action="auth-login.php">
		
			<h1>Login</h1>		
			
			<div class="login-fields">
				<?php 
				if(isset($_GET["akun"])){
					if(($_GET["akun"]) == "password-salah"){
					echo "<div class='alert'>
							<strong style='color:red'>Warning!</strong> <span style='color:red'> Password Anda salah </span>
						  </div>";
					}
					elseif(($_GET["akun"]) == "belum-terdaftar"){
					echo "<div class='alert'>
							<strong style='color:red'>Warning!</strong> <span style='color:red'> Anda belum terdaftar </span>
						  </div>";
					}
				
				}
				?>
				<p>Silahkan masukkan username dan password anda</p>
				
				<div class="field">
					<label for="username">Username</label>
					<input required type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input required type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<input type="submit" class="button btn btn-success btn-large" value="Sign In" />
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>
