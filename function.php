<?php 
	$conn = mysqli_connect("localhost", "root", "", "experiment");

	// apabila tombol submit dikirim maka tampung data table passjstophp yang berada pada database experiment
	if ( isset($_POST['kirim']) ) {
		mysqli_query($conn, "INSERT INTO passjsvartophp set
			nama = '$_POST[nama]'
			-- email = '$_POST[email]',
			-- gambar = '$_POST[gambar]'
		");
		// echo "terkirim";
	}
?>


<!-- idenya adalah mengambil data dari variable javascript untuk kemudian di POST menggunakan PHP

variable dari javascript kemudian innerHTML = variable dari javascript
ketika innerHTML = variable kemudia POST data ke Mysql menggunakan POST PHP
 -->