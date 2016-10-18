
<style>

body {
  margin: 0;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 20px;
  color: #333333;
  background-color: #ffffff;
}




p {
  margin: 0 0 10px;
}



table {
  max-width: 100%;
  background-color: transparent;
  border-collapse: collapse;
  border-spacing: 0;
}

.table {
  width: 100%;
  margin-bottom: 20px;
}

.table th,
.table td {
  padding: 8px;
  line-height: 20px;
  text-align: left;
  vertical-align: top;
  border-top: 1px solid #dddddd;
}

.table th {
  font-weight: bold;
}

.table thead th {
  vertical-align: bottom;
}

.table caption + thead tr:first-child th,
.table caption + thead tr:first-child td,
.table colgroup + thead tr:first-child th,
.table colgroup + thead tr:first-child td,
.table thead:first-child tr:first-child th,
.table thead:first-child tr:first-child td {
  border-top: 0;
}

.table tbody + tbody {
  border-top: 2px solid #dddddd;
}

.table-condensed th,
.table-condensed td {
  padding: 4px 5px;
}

.table-bordered {
  border: 1px solid #dddddd;
  border-collapse: separate;
  *border-collapse: collapse;
  border-left: 0;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}

.table-bordered th,
.table-bordered td {
  border-left: 1px solid #dddddd;
}

.table-bordered caption + thead tr:first-child th,
.table-bordered caption + tbody tr:first-child th,
.table-bordered caption + tbody tr:first-child td,
.table-bordered colgroup + thead tr:first-child th,
.table-bordered colgroup + tbody tr:first-child th,
.table-bordered colgroup + tbody tr:first-child td,
.table-bordered thead:first-child tr:first-child th,
.table-bordered tbody:first-child tr:first-child th,
.table-bordered tbody:first-child tr:first-child td {
  border-top: 0;
}



</style>



<?php
include "../../config/connect.php";
session_start();
$id = $_GET['id'];
$user = $_SESSION['userid'];

if (!isset($user)){
header('Location: ../../index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		
		<title>BPTP Jakarta</title>

		
	</head>
	<body>

		
			
				
					
					
					<h2 id="headings"> Laporan Harian </h2>
										
					<table  class="table  table-condensed table-hover">
					
	
	<?php
			$query ="select * from uraian_tugas where id_laporan='$id'";
			$data = mysqli_query($con,$query);
			$fetch	= mysqli_fetch_array($data);
			?>
		<tbody>


		
		<tr>
			<th>Nama</th>
			<td>: <?php echo $fetch['Nama']?></td>
		</tr>
		
		<tr>
			<th>Judul</th>
			<td>: <?php echo $fetch['judul_laporan']?></td>
		</tr>
		
		<tr>
			<th>Tanggal</th>
			<td>: <?php echo $fetch['Tanggal_tugas']?></td>
		</tr>
		
		<tr>
			<th>Deskripsi</th>
			<td>: <?php echo $fetch['Isi_tugas']?></td>
		</tr>
		
		<tr>
			<td></td>
			<td></td>
		</tr>
		
	</tbody>
</table>


					
					

	</body>
</html>
