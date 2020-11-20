<!doctype html>
<html lang="en">
<head>
	<title>Data Mahasiswa</title>
	<link rel="stylesheet"
		  href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2980b9">
	<div class="container">
		<a class="navbar-brand" href="#">Tugas</a>
		<div class="navbar-nav mr-auto">
			<a href="<?= site_url('mahasiswa/index') ?>" class="nav-link active">Home</a>
			<a href="<?= site_url('mahasiswa/tambah')?>" class="nav-link">Tambah data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="#" class="nav-link">Nama user</a>
		</div>
	</div>
</nav>

<div class="alert alert-success text-center mt-3">
	Data Mahasiswa
</div>

<div class="container">
	<table class="table table-bordered table-sm">
		<thead>
		<tr>
			<th class="text-center" width="5%">Nomor</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th class="text-center" width="15%">Aksi</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$no = 1;
		foreach ($tabel as $isi) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $isi->nim; ?></td>
				<td><?php echo $isi->nama; ?></td>
				<td><?php echo $isi->alamat; ?></td>
				<td>
					<a href="#" class="btn btn-warning btn-sm">Edit</a>
					<a href="#" class="btn btn-danger btn-sm">Delete</a>
				</td>
			</tr>
			<?php
		}
		?>
		</tbody>
	</table>
</div>
</body>
</html>
