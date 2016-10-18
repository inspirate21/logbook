<?PHP ob_start(); // buka library laporan

include "../../config/connect.php";
session_start();
$id = $_GET['id'];
$user = $_SESSION['userid'];

if (!isset($user)){
header('Location: ../../index.php');
}

?>
<?php

	$query ="select * from uraian_tugas where id_laporan=$id";
			
			
			
			
			$data = mysqli_query($con,$query);
			
			
    $fetch = mysqli_fetch_array($data);
	$nama= $fetch['Nama'];
	$judul= $fetch['judul_laporan'];
	$tanggal= $fetch['Tanggal_tugas'];
	$isi= $fetch['Isi_tugas'];
	
	
		
include(dirname(__FILE__).'/pdf.php');// memanggil file laporan 





$content = ob_get_clean();

// conversion HTML => PDF
require_once(dirname(__FILE__).'./../../html2pdf/html2pdf.class.php');
try
{
$html2pdf = new HTML2PDF('P','A4', 'en', false, 'ISO-8859-15', array(10, 5, 30, 10));
$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
$html2pdf->Output($judul.'.pdf');//output laporan setelah di download
}
catch(HTML2PDF_exception $e) { echo $e; }	?>
