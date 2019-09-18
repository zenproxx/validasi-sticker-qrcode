<?php include "header.php"; ?>

<div class="container">

<?php
$view = isset($_GET['view']) ? $_GET['view'] : null;

switch($view){
	default:
	?>
	<div class="row">
		
				<h3 class="panel-title"><button class="btn btn-success"> Data Vendor Verifikasi</button></h3>
		
			<div class="panel-body">
				<a class="btn btn-primary" style="margin-bottom: 10px" href="data_vendor.php?view=tambah">Tambah Data</a>
				<table class="table table-bordered table-striped">
				<form class="form-inline">
			<input class="form-control mr-sm-2" type="search" 
			placeholder="Masukkan Kata Pencarian Disini" arial-label ="search">
			<button class="btn btn-light my-sm-0" type="submit">Temukan</Button>
			</form>
			

					<tr>
						<th>No</th>
						<th>Inisial Nama Kebun</th>
						<th>No Urut Angkutan</th>
						<th>Afdeling</th>
						<th>Masa Berlaku</th>
						<th>No Polisi Angkutan</th>
						<th>No Distrik</th>
						<th>Aksi</th>
						</tr>
				
					
					<?php
					$sql=mysqli_query($konek, "SELECT * FROM mahasiswa ORDER BY id ASC");
					$no=1;
					while($d=mysqli_fetch_array($sql)){
						echo "<tr>
							<td width='40px' align='center'>$no</td>
							<td>$d[npm]</td>
							<td>$d[nama_mhs]</td>
							<td>$d[prodi]</td>
							<td>$d[tgl_lulus]</td>
							<td>$d[no_ijazah]</td>
							<td>$d[ipk]</td>
							<td width='180px' align='center'>
								<a class='btn btn-danger btn-sm' href='buatQRCode.php?npm=$d[npm]&nomor=$d[no_ijazah]'>Buat Kode QR</a>
								<a class='btn btn-success btn-sm' href='cetak_stiker.php?id=$d[id]' target='_blank'>Cetak</a>
							</td>
						</tr>";
						$no++;
					}
					?>
				</table>
			</div>
		</div>
	</div>

<?php
	break;
	case "tambah":

?>
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Tambah Data Vendor Verivikasi</h3>
			</div>
			
			<div class="panel-body">
				
				<form method="post" action="aksi_mahasiswa.php?act=insert">
					<table class="table">
						
						
						<tr>
							<td>No Inisial Kebun</td>
							<td>
								<div class="col-md-4">
									<select name="npm" class="form-control">
									<option value="ADO">Adolina</option>
									<option value="AJA">Ajamu </option>
									<option value="BER">Berangir</option>
									<option value="BAJ">Bah Jambi</option>
									<option value="MAY">Mayang</option>
									<option value="PDM">Padang Matinggi</option>
									<option value="PAM">Pasir Mandoge</option>
									<option value="SAL">Sawit Langkat</option>
									<option value="TIN">Tinjowan</option>
									<option value="TON">Tonduhan</option>
									</select>
								</div>
							</td>
						</tr><tr>
							<td>No Urut Angkutan</td>
							<td><div class="col-md-4"><input class="form-control" type="text" name="nama" required /></div></td>
						</tr>
						<tr>
							<td>Afdeling</td>
							<td>
								<div class="col-md-4">
									<select name="prodi" class="form-control">
									<option value="Afdeling I">Afdeling Satu</option>
									<option value="Afdeling II">Afdeling Dua </option>
									<option value="Afdeling III">Afdeling Tiga</option>
									<option value="Afdeling IV">Afdeling Empat</option>
									<option value="Afdeling V">Afdeling Lima</option>
									<option value="Afdeling IV">Afdeling Enam</option>
									<option value=" Afdeling VII">Afdeling Tujuh</option>
									<option value="Afdeling VIII"> Afdeling Delapan</option>
									<option value="Afdeling IX">Afdeling Sembilan</option>
									<option value="Afdeling X">Afdeling Sepuluh</option>
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<td>Masa Berlaku</td>
							<td><div class="col-md-4"><input class="form-control" type="date" name="tgllulus" required /></div></td>
						</tr>
						<tr>
							<td>No. Plat Kendaraan</td>
							<td><div class="col-md-4"><input class="form-control" type="text" name="noijazah" required /></div></td>
						</tr>
						<tr>
							<td>No Distrik</td>
							<td>
								<div class="col-md-4">
									<select name="ipk" class="form-control">
									<option value="D1">Distrik I</option>
									<option value="D2">Distrik II</option>
									<option value="D3">Distrik III</option>
									<option value="D4">Distrik IV</option>
									</select>
								</div>
							</td>	
						</tr>
						<tr>
							<td>Keterangan Berlaku</td>
							<td>
								<div class="col-md-4">
								<textarea class="form-control" type="text" name="ket_berlaku" required /> </textarea>
								</div>
							</td>	
						</tr>
						<tr>
							<td></td>
							<td>
							<div class="col-md-6">
								<input class="btn btn-primary" type="submit" value="Simpan" />
								<a class="btn btn-danger" href="data_vendor.php">Kembali</a>
								</div>
							</td>
						</tr>
					</table>
				</form>

			</div>
		</div>
	</div>

<?php
	break;
}
?>

</div>

<?php include "footer.php"; ?>