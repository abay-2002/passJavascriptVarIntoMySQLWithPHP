<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pass Javascript var to PHP</title>
</head>
<body>
<!-- 
	<form method="POST">
		<label form="nama">Nama: </label>
		<input type="text" name="nama" id="nama">

		<label form="email">email: </label>
		<input type="text" name="email" id="email">

		<label form="gambar">gambar: </label>
		<input type="text" name="gambar" id="gambar">

		<button type="submit" name="kirim">Kirim</button>
	</form>
 -->
	<form method="POST">
		<h3 id="tampilItem" name="nama">0</h3>
		<button id="tambah">+</button>
		<button id="kurang">-</button>
	
		<button type="submit">Kirim</button>
	</form>



</body>
</html>
<?php 
	require('function.php');
?>

<script src="script.js"></script>
<!-- idenya adalah mengambil data dari variable javascript untuk kemudian di POST menggunakan PHP

variable dari javascript kemudian innerHTML = variable dari javascript
ketika innerHTML = variable kemudia POST data ke Mysql menggunakan POST PHP
 -->