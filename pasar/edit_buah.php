[02:52, 10/22/2019] +62 8339290800: <!DOCTYPE html>
<html>
<head>
	<title>Tambah Buah</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="index.html" class="navbar-brand">Pasar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.html">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="home.html">Daftar Buah</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="tentang.html">Tentang Kami</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="jumbotron">
		<h1 class="display-4">Pasar Buah</h1>
		<p class="lead">Selamat datang di pasar buah, anda belanja kami kaya</p>
	</div>
	<h3 style="text-align: center;">Edit Buah</h3>
		<?php
		include "koneksi.php";
		// menampung id dari home.php
		$id = $_GET['id'];
		//mengambil data berdasarkan id
		$sql = "SELECT * FROM tb_buah WHERE kode_buah=$id";
		$buah = mysqli_query($koneksi, $sql);
		//tampung yg atas
		foreach ($buah as $b) {
			$NamaBuah = $b['nama_buah'];
			$JenisBuah = $b['jenis_buah'];
			$stokBuah = $b['stok_buah'];
			$hargaBuah = $b['harga_buah'];
		}
		
		?>
	<form method="POST" action="proses_edit.php">
		<div class="row">
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-2">
						<label>Nama Buah</label>
					</div>
					<div class="col-sm-6">
						<!-- menampilkan di textbox -->
						<input value="<?php echo $NamaBuah ?>" type="text" name="nama_buah" class="form-control">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-2">
						<label>Jenis Buah</label>
					</div>
					<div class="col-sm-6">
						<input value="<?php echo $JenisBuah ?>"type="text" name="jenis_buah" class="form-control">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-2">
						<label>Stok Buah</label>
					</div>
					<div class="col-sm-6">
						<input value="<?php echo $stokBuah ?>"type="text" name="stok_buah" class="form-control">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-2">
						<label>Harga Buah</label>
					</div>
					<div class="col-sm-6">
						<input value="<?php echo $hargaBuah ?>"type="text" name="harga_buah" class="form-control">
					</div>
				</div>
			</div>
		</div>
		<!-- mengirim id ke proses_edit.php -->
		<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-3">
				<!-- memberi aksi ke proses_edit.php -->
				<button type="submit" class="btn btn-success btn-block">
					Edit Buah
				</button>
			</div>
		</div>
	</form>
	<script>
		$(document).ready(function() {
			$('#tampil').click(function() {
				$('#nama_buah').prop('hidden', false);
			})
		})
	</script>
</body>
</html>