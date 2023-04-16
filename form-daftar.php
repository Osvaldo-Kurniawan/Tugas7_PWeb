<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
	<style>
		body {
			background-color: #f2f2ff;
		}
		.card {
			max-width: 500px;
			margin: 50px auto;
			padding: 20px;
			border-radius: 10px;
			background-color: #e6f1ff;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
		}
		.card-header {
			font-size: 24px;
			font-weight: bold;
			color: #3366cc;
		}
		.card-body {
			margin-top: 20px;
		}
		label {
			display: inline-block;
			margin-bottom: 10px;
			font-weight: bold;
			color: #3366cc;
		}
		input[type="text"],
		textarea,
		select {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type="radio"] {
			margin-right: 10px;
		}
		input[type="submit"] {
			background-color: #3366cc;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			transition: background-color 0.3s;
		}
		input[type="submit"]:hover {
			background-color: #1a4188;
		}
		fieldset {
			border: none;
			padding: 0;
		}
		legend {
			font-size: 20px;
			font-weight: bold;
			color: #3366cc;
			margin-bottom: 20px;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<div class="card">
		<div class="card-header mx-auto text-center">
			<h1>Formulir Pendaftaran Siswa Baru</h1>
		</div>
		<div class="card-body">
			<form action="proses-pendaftaran.php" method="POST">	
				<fieldset>	
				<p>
					<label for="nama">Nama: </label>
					<input type="text" name="nama" placeholder="nama lengkap" />
				</p>
				<p>
					<label for="alamat">Alamat: </label>
					<textarea name="alamat"></textarea>
				</p>
				<p>
					<label for="jenis_kelamin">Jenis Kelamin: </label>
					<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
					<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
				</p>
				<p>
					<label for="agama">Agama: </label>
					<select name="agama">
						<option>Islam</option>
						<option>Kristen</option>
						<option>Katolik</option>
						<option>Hindu</option>
						<option>Budha</option>
						<option>Atheis</option>
					</select>
				</p>
				<p>
					<label for="sekolah_asal">Sekolah Asal: </label>
					<input type="text" name="sekolah_asal" placeholder="nama sekolah" />
				</p>
				<p>
					<input type="submit" value="Daftar" name="daftar" />
				</p>	
			</fieldset>
		</form>
		</div>
	</div>	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
