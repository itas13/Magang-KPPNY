<?php
require 'functions.php';
$karyawan = query("SELECT * FROM karyawan");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
	<title>Daftar Karyawan</title>
</head>

<body>
	<!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
        <a class="navbar-brand" href="#">Daftar Karyawan</a>

      </div>
	</nav>
	<!--Akhir Navbar-->

	<div class="container data-mahasiswa mt-5">
	<a class="btn btn-primary" aria-current="page" href="tambah.php">Tambah Data Karyawan</a>
    </div>



	<!--tabel-->
	<div class="container mt-5">
		<table class="table table-striped" id="tabelKaryawan">
			<thead>
				<tr>
					<th scope="col">No.</th>
					<th scope="col">Nama</th>
					<th scope="col">NIP</th>
					<th scope="col">NIK</th>
					<th scope="col">Unit</th>
					<th scope="col">Email</th>
					<th scope="col">Status</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php $i = 1; ?>
				<?php foreach ($karyawan as $row) : ?>
					
					<tr>
						<td><?php echo $i++; ?> </td>
						<td><?php echo $row["nama"]; ?> </td>
						<td><?php echo $row["NIP"]; ?> </td>
						<td><?php echo $row["NIK"]; ?> </td>
						<td><?php echo $row["unit"]; ?> </td>
						<td><?php echo $row["email"]; ?> </td>
						<td><?php echo $row["status"]; ?> </td>
						<td>
							<a href="detail.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm text-white">DETAIL</a>
							<a href="ubah.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a>
							<a href="hapus.php?id=<?php echo $row['id']; ?>" class= "btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ini?')">HAPUS</a>
						</td>
					</tr>

				<?php endforeach; ?>
			</tbody>

		</table>
		

		</br>

		<a class="btn btn-primary plus mr-auto" aria-current="page" href="index.html">Kembali</a>


	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
	<script>
        $(document).ready(function(){
            $('#tabelKaryawan').DataTable();
        });
    </script>



</body>

</html>