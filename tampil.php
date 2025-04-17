<!DOCTYPE html>
<html>
<head>
	<title>Biodata Saya</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="kotak">
 
		<div class="judul">
			<h1>
				<a href="index.html">Home</a> ||
				<a href="profile.html">Profile</a> || 
				<a href="peta.html">Peta</a> ||
				<a href="if.php">Flowgorithm</a> ||
				<a href="tampil.php">Data</a>
			</h1>
		</div>
 
		<div class="blok">
			<div class="subjudul">
 			<h2>Data Pertanahan Di Padukuhan Banyraden</h2>
	<br/>
	<table class="table1">
		<tr>
			<th class="div1">NO</th>
			<th class="div1">NIT</th>
			<th class="div1">Nama Taruna</th>
			<th class="div1">Alamat</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from taruna");
		while ($d = mysqli_fetch_array($data)){
			?>
			<tr>s
				<td class="div3"><?php echo $no++; ?></td>
				<td class="div3"><?php echo $d['nit']; ?></td>
				<td class="div3"><?php echo $d['nama_taruna']; ?></td>
				<td class="div3"><?php echo $d['alamat']; ?></td>
				
			</tr>
			<?php 
		}
		?>
	</table>
 			</div>	
		</div>
	</div>
</body>
</html>