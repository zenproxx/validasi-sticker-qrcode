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
	</style>
</head>

<body>
<table border="6" cellpadding="80" cellspacing="0" width="100%">
<tr>
	<td>
	<table width="100%">
		<?php
		$sql=mysqli_query($konek, "SELECT * FROM mahasiswa WHERE id='$_GET[id]'");
		$d=mysqli_fetch_array($sql);
		?>
		
<h1>Belajar Tag Tabel</h1>
<table border="0">
    <tr>
        <td><h1>PT. JAYA WIRA MANGGALA</h1></td>
        <td><p></p>
				<p><h3><center>No Identifikasi Angkutan :</h3></center></p>

				<h2><center><u><?php echo $d['nama_mhs']; ?></center></u></h2>
				
				
					<p><center>Masa Berlaku</center></p>

				<h4><center><u> <?php echo $d['tgl_lulus']; ?></center></u></h4>
				
				<p><center>No Polisi</center></p>

				<h4><center><u> <?php echo $d['no_ijazah']; ?></center></u></h4>


				<p>.</p>
				<p>.</p>
				</center>
			</td>
		</tr></td>
        <td>Baris 1, Kolom 3</td>
    </tr>
    
</table>

		<tr>
			<td colspan="12">
				<center>
				<img src="assets/img/logo.png" width="90px">
								<h1>PT. JAYA WIRA MANGGALA</h1>
								<p>Komplek CBD Polonian Blok AA No. 89 , <br>
								Jln Padang Golf Suka Damai, Medan Polonia.<br>
								Medan - Sumatera Utara Kode Pos 20219<br>
								Email : info@wiraintegrated.com<br>
								Website : www.wiraintegrated.com</p>
						
				<p></p>
				<p><h3><center>No Identifikasi Angkutan :</h3></center></p>

				<h2><center><u><?php echo $d['nama_mhs']; ?></center></u></h2>
				
				
					<p><center>Masa Berlaku</center></p>

				<h4><center><u> <?php echo $d['tgl_lulus']; ?></center></u></h4>
				
				<p><center>No Polisi</center></p>

				<h4><center><u> <?php echo $d['no_ijazah']; ?></center></u></h4>


				<p>.</p>
				<p>.</p>
				</center>
			</td>
		</tr>
		<tr>
			<td><img src="temp/<?php echo $d['npm'].".png"; ?>"</td>
			<td></td>
			<td width="100px">
				<p>Medan , <?php echo tglIndonesia(date('Y-m-d')); ?><br/>
				Pengesah Stiker,</p>
				<br/>
				<br/>
				<br/>
				<p><b>www.wiraintegrated.com</b></p>
			</td>
		</tr>
	</table>
	</td>
</tr>
</table>
<br>
<center><a href="#" class="no-print" onclick="window.print();">Cetak/Print</a></center>
</body>
</html>

<?php
}else{
	header('location:login.php');
}
?>