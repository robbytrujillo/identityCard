<!DOCTYPE html>
<html>
<head>
	<title>Kartu Identitas</title>
	<style>
		.card {
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
			padding: 20px;
			width: 400px;
		}

		.card img {
			border-radius: 50%;
			height: 100px;
			width: 100px;
		}

		.card h1 {
			font-size: 24px;
			margin-bottom: 0;
		}

		.card p {
			font-size: 16px;
			margin-top: 0;
		}

		.card ul {
			list-style: none;
			margin: 0;
			padding: 0;
		}

		.card li {
			font-size: 14px;
			margin-bottom: 5px;
		}
	</style>
</head>
<body>
	<div class="card">
		<img src="<?= $photo ?>" alt="Foto">
		<h1><?= $nama ?></h1>
		<p><?= $alamat ?></p>
		<ul>
			<li>Tanggal Lahir: <?= $tanggal_lahir ?></li>
			<li>Jenis Kelamin: <?= $jenis_kelamin ?></li>
			<li>Nomor Telepon: <?= $nomor_telepon ?></li>
		</ul>
	</div>

	<form method="post">
		<label for="nama">Nama:</label><br>
		<input type="text" id="nama" name="nama"><br>

		<label for="alamat">Alamat:</label><br>
		<textarea id="alamat" name="alamat"></textarea><br>

		<label for="tanggal_lahir">Tanggal Lahir:</label><br>
		<input type="date" id="tanggal_lahir" name="tanggal_lahir"><br>

		<label for="jenis_kelamin">Jenis Kelamin:</label><br>
		<input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki">
		<label for="laki_laki">Laki-laki</label><br>
		<input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
		<label for="perempuan">Perempuan</label><br>

		<label for="nomor_telepon">Nomor Telepon:</label><br>
		<input type="tel" id="nomor_telepon" name="nomor_telepon"><br>

		<label for="photo">Foto:</label><br>
		<input type="file" id="photo" name="photo"><br>

		<input type="submit" value="Buat Kartu Identitas">
	</form>
</body>
</html>
