<!DOCTYPE html>
<html>
<head>
	<title>Daftar buah </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style >
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="index.html" class="navbar-brand">pasar</a>
		<button class="navbar-togler" type="button" data-toggle="collapse" data-target= "#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label= "toggle navigation">
			<span class="navbar-togler-icon"></span>
		</button>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.html">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="home.php">Daftar Buah </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="tentang.html">Tentang Kami</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="jumbotron">
		<h1 class="display-4">pasar buah </h1>
		<p class="lead">selamat datang anda belanja saya dapet uang</p>
	</div>
	<h3 style="text-align: center;"> daftar buah</h3>
		<a  href="tambah_buah.html" class="btn btn-dark btn-sm">tambah_buah </a>
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>no</th>
				<th>nama buah</th>
				<th>jenis buah</th>
				<th>stok</th>
				<th>harga</th>
				<th>action</th>

				</tr>
				
			</thead>
			<tbody>
				<?php
				include "koneksi.php";
				
				$sql = "SELECT * FROM tb_buah";
				$buah = mysqli_query($koneksi, $sql);
				$no=1;
				foreach ($buah as $b) {
					$kode=$b['kode_buah'];
					?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $b['nama_buah'] ?></td>
						<td><?php echo $b['jenis_buah'] ?></td>
						<td><?php echo $b['stok_buah'] ?></td>
						<td><?php echo $b['harga_buah'] ?></td>
						<td>
							<!-- buton edit -->
							<a class="btn btn-primary" href="edit_buah.php?id=<?php echo $b['kode_buah'] ?>">edit</a>
							<!-- buton delete -->
						<a href="proses_delete.php?id=<?php echo $b['kode_buah'] ?>" class="btn btn-danger">Delete</a>

					</tr>
					<?php
					$no++;
				}
				?>
			</tbody>

		</table>
	</div>
</body>
</html>
