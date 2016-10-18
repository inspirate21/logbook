<?php
include "connect.php";
$select = "SELECT * FROM transaksi WHERE PlayDate='2015-05-05' AND Field='Semen'";
$query	= mysqli_query($con,$select);
$fetch	= mysqli_fetch_array($query);
while ($fetch['PlayStart'] >= 13) {
	echo "ADA"; break;
} echo "Tidak Ada";
?>