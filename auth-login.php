<?php
include "config/connect.php";

$username	= $_POST['username'];
$password	= $_POST['password'];

$select			= "SELECT * FROM user WHERE username='$username'";
$query			= mysqli_query($con, $select);
$rows			= mysqli_num_rows($query);
$fetch			= mysqli_fetch_array($query);

if ($rows > 0) {
	if (($password) == $fetch['password']) {
		session_start();
		$_SESSION['userid'] = $fetch['username'];
		$_SESSION['userpass'] = $fetch['password'];
		
		
		if ($fetch['role'] == "member") {
			header("Location:/logbook/level/member");
		}  else if ($fetch['role'] == "Admin") {
			header("Location:/logbook/level/admin/");
		} else {
			header("Location:/logbook/level/superadmin/");
		}
	} else {
		header("Location:index.php?akun=password-salah");
	}
} else {
	header("Location:index.php?akun=belum-terdaftar");
}
?>