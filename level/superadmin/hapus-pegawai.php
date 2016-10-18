<?php
//panggil file config.php untuk menghubung ke server
include "../../config/connect.php";
session_start();
$nip = $_GET['nip'];

$query ="delete from user Where nip=$nip" ;

if(mysqli_query($con,$query))
	{
	echo "deleted successfully";
	}
else {echo "deleted failed";}
?>