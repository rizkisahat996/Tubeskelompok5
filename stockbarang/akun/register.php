<?php

    require_once '../includes/koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];

	$sql = "INSERT INTO usertable (username, password, nama, email) VALUES ('$username','$password','$nama','$email')";

	if($koneksi->query($sql)===TRUE){
		echo "<h2>Registrasi usertable Anda Berhasil</h2>";
		echo "selamat";
	} else {
		echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
	}

	$koneksi->close();

?>

</body>
</html>