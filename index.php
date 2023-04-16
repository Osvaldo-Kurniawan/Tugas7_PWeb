<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<style>
        body {
            background-color: #f2f2f2;
        }    
        .card {
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .card-title {
            font-size: 4rem;
            color: #ff0000;
            text-shadow: 2px 2px #ccc;
            margin-bottom: 1rem;
        }
        .card-header {
            background-color: #ADD8E6;
            padding: 1rem;
        }
        .btn {
            font-size: 4rem;
            width: 300px;
            transition: transform 0.2s ease-in-out;
        }
        .btn:hover {
            transform: scale(1.1);
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
	<div class="card mx-auto text-center">
	<div class="card-header">
		<h1>Pendaftaran Siswa Baru SMK Coding</h1>
	</div>
	<div class="card-body d-flex align-items-center justify-content-center">
		<div class="card text-bg-dark">
			<img src="kelas.png" class="card-img" alt="...">
			<div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
				<h1 class="card-title">Menu</h1>
				<nav>
					<a href="form-daftar.php" class="btn btn-primary">Daftar Baru</a>
					<a href="list-siswa.php" class="btn btn-light">Pendaftar</a>	
				</nav>
				<?php if(isset($_GET['status'])): ?>
				<p>
					<?php
						if($_GET['status'] == 'sukses'){
							echo "Pendaftaran siswa baru berhasil!";
						} else {
							echo "Pendaftaran gagal!";
						}
					?>
				</p>
				<?php endif; ?>
			</div>
		</div> 
    </div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	</body>
</html>
