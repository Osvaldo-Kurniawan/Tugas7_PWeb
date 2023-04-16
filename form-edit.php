<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Siswa | SMK Coding</title>
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
			<h1>Formulir Edit Siswa</h1>
		</div>
		<div class="card-body">
			<form action="proses-edit.php" method="POST">	
			<fieldset>		
				<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
			<p>
				<label for="nama">Nama: </label>
				<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
			</p>
			<p>
				<label for="alamat">Alamat: </label>
				<textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
			</p>
			<p>
				<label for="jenis_kelamin">Jenis Kelamin: </label>
				<?php $jk = $siswa['jenis_kelamin']; ?>
				<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
				<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
			</p>
			<p>
				<label for="agama">Agama: </label>
				<?php $agama = $siswa['agama']; ?>
				<select name="agama">
					<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
					<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
					<option <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
					<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
					<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
					<option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
				</select>
			</p>
			<p>
				<label for="sekolah_asal">Sekolah Asal: </label>
				<input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
			</p>
			<p>
				<input type="submit" value="Simpan" name="simpan" />
			</p>
			</fieldset>
		</form>
		</div>
	</div>	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
