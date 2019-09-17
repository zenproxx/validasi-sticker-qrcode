<?php 
session_start();
if(isset($_SESSION['login'])){
	include "koneksi.php";
?>



<!DOCTYPE html>
<html>
<head>
	<title>Stiker QR Code</title>
	<link rel="icon" href="./assets/img/logo.png">
	<style type="text/css">
		body{
			font-family: Arial;
		}

		@media print{
			.no-print{
				display: none;
			}
		}

		table{
			border-collapse: collapse;
		}
		
		.wrapper{width: 100%; height: auto;}
		.text-center{text-align: center;}
		.no-print{background: #ddd; padding: 5px 25px; color: #444; border-radius: 5px; text-decoration: none;}
	</style>
</head>

<body>
<?php
		$sql=mysqli_query($konek, "SELECT * FROM mahasiswa WHERE id='$_GET[id]'");
		$d=mysqli_fetch_array($sql);
		?>
<div class="wrapper">
	<table border="2" width="100%">
		<tr>
			<td><img src="assets/img/logo.png" width="150px"></td>
			<td><h1 class="text-center">PT. PERKEBUNAN NUSANTARA IV</h1></td>
			<td>&nbsp;</td>
		</tr>
		
		<tr>
			<td colspan="3"><h1 class="text-center">NO IDENTIFIKASI ANGKUTAN TBS</h1></td>
		</tr>
		
		<tr>
			<td colspan="2"><h3 class="text-center"><?php echo $d['ipk']; ?> - <?php echo $d['npm']; ?> - <?php echo $d['tgl_lulus']; ?> - <?php echo $d['nama_mhs']; ?></h3></td>
			<td><img src="temp/<?php echo $d['npm'].".png"; ?>"></td>
		</tr>
		
		<tr>
			<td colspan="3"><h2 class="text-center">BERLAKU SAMPAI DENGAN DESEMBER 2019</h2></td>
		</tr>
	</table>
	
	<br>
	<center><a href="#" class="no-print" onclick="window.print();">Cetak/Print</a></center>
</div>

<!--
<table border="6" cellpadding="80" cellspacing="0" width="100%">
<tr>
	<td>
	<table width="100%">
		<tr>
			<td colspan="12">
				<left>
				<img src="assets/img/logo.png" width="150px">
				</left></br>
				
				<p></p>
				<p><h1><center>PT. PERKEBUNAN  </h1></center></p>
				<p><h1><center>NUSANTARA IV </h1></center></p>
				<p><h1><center>NO IDENTIFIKASI ANGKUTAN TBS :</h1></center></p>
				
				<tr>
							<td><?php // echo $d['ipk']; ?></td> 
                            <td><?php // echo $d['npm']; ?></td> 
							<td><?php // echo $d['tgl_lulus']; ?></td>
                            <td><?php // echo $d['nama_mhs']; ?></td> 
                            
                        </tr>

						
			
			</td>
		</tr>
		<tr>
			<td><img src="temp/<?php // echo $d['npm'].".png"; ?>"</td>
			<td></td>
			
		</tr>
	</table>
	</td>
</tr>
</table>
 -->
<br>

</body>
</html>

<?php
}else{
	header('location:login.php');
}
?>