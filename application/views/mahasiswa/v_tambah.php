<!doctype html>
<html lang="en">
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet"
		  href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2980b9">
	<div class="container">
		<a class="navbar-brand" href="#">Tugas</a>
		<div class="navbar-nav mr-auto">
			<a href="<?= site_url('mahasiswa/index') ?>" class="nav-link active">Home</a>
			<a href="<?= site_url('mahasiswa/tambah') ?>" class="nav-link">Tambah data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="#" class="nav-link">Nama user</a>
		</div>
	</div>
</nav>
<div class="alert alert-success text-center mt-3">
	Tambah Data Mahasiswa
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">Form Data mahasiswa</div>
				<div class="card-body">
					<form action="<?= site_url('mahasiswa/proses_tambah') ?>" method="post">
						<div class="form-group">
							<label for="">NIM</label>
							<input type="text" class="form-control" name="txtnim">
						</div>
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" class="form-control" name="txtnama">
						</div>
						<div class="form-group">
							<label for="">Alamat</label>
							<textarea name="txtalamat" cols="30"
									  class="form-control" rows="3"></textarea>
						</div>
						<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
						<a href="<?= site_url('mahasiswa')?>" class="btn btn-warning">Batal</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
