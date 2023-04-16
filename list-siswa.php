<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<style>	
		.card {
			margin: 20px auto;
			background-color: #fff;
			box-shadow: 0 2px 5px rgba(0,0,0,0.1);
			padding: 20px;
		}
		.card-header {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 20px;
		}
		.card-body {
			padding: 0;
		}
		.card-header h1 {
			font-size: 36px;
			font-weight: bold;
			text-align: center;
		}
		.card-body p {
			font-size: 16px;
			font-weight: bold;
			margin-top: 20px;
		}
		.btn {
			display: inline-block;
			padding: 10px 20px;
			font-size: 18px;
			font-weight: bold;
			text-align: center;
			text-decoration: none;
			background-color: #3498db;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		.btn:hover {
			background-color: #21618c;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}	
		th, td {
			text-align: left;
			padding: 8px;
			border: 1px solid #ddd;
		}		
		th {
			background-color: #3498db;
			color: #fff;
		}	
		a {
			color: #3498db;
			text-decoration: none;
		}	
		a:hover {
			color: #21618c;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
	<div class="card">
		<div class="card-header mx-auto text-center">
			<h1>Siswa yang sudah mendaftar</h1>
		</div>
		<div class="card-body">
			<nav>
				<a href="form-daftar.php" class="btn btn-warning">[+] Tambah Baru</a>
			</nav>
			<br>	
			<table border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Jenis Kelamin</th>
						<th>Agama</th>
						<th>Sekolah Asal</th>
						<th>Tindakan</th>
					</tr>
				</thead>
				<tbody>		
					<?php
					$sql = "SELECT * FROM calon_siswa";
					$query = mysqli_query($db, $sql);
					
					while($siswa = mysqli_fetch_array($query)){
						echo "<tr>";	
						echo "<td>".$siswa['id']."</td>";
						echo "<td>".$siswa['nama']."</td>";
						echo "<td>".$siswa['alamat']."</td>";
						echo "<td>".$siswa['jenis_kelamin']."</td>";
						echo "<td>".$siswa['agama']."</td>";
						echo "<td>".$siswa['sekolah_asal']."</td>";
						echo "<td>";
						echo "<a href='form-edit.php?id=".$siswa['id']."' class='btn btn-success'>Edit</a> | ";
						echo "<a href='hapus.php?id=".$siswa['id']."' class='btn btn-danger'>Hapus</a>";
						echo "</td>";	
						echo "</tr>";
					}		
					?>	
				</tbody>
			</table>
			
			<p>Total: <?php echo mysqli_num_rows($query) ?></p>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
