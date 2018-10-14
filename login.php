<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="">
		table{
			font-family: verdana, helvetica, perpetua, sans-serif;
			font-style: 12px;
		}
		input{
			font-family: verdana, helvetica, perpetua, sans-serif;
			font-style: 12px;
			height:20px;
		}
	</style>
</head>
<body bgcolor="#f7a5d5">
 	<br><br><br>
	<center>
		<br><br>
		<h1>Selamat Datang Dihalaman Login</h1>
		<h3>Masukan Username dan Password Anda!</h3>
		<br>
		<h2><b>Login</b></h2>
	<form action="" method="POST">
		<table>
			<tr>
				<td><b>NIM</b></td>
				<td> : </td>
				<td><input type="text" name="nim" required=""></td>
			</tr>
			<tr>
				<td><b>Nama</b></td>
				<td> : </td>
				<td><input type="text" name="nama" required=""></td>
			</tr>
			<tr>
					<td colspan="4"><center><br><input type="submit" name="submit" value="Login"></center></td>
				</tr>
				<tr>
					<br>
					<td colspan="4"><center><a href="regis.php">Kembali Ke Halaman Registrasi</a></center></td>
				</tr>
			</form>
		</table>
	</center>
</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
	 	$nama = $_POST['nama'];
		$konek = mysqli_connect('localhost', 'root', '', 'ta6');
		if ($nim == is_numeric($nim)) {
			if (strlen($nim)==10) {
				if ( strlen($nama)<=35 && strlen($nama)>0) {
					$query = mysqli_query($db,"SELECT * FROM data WHERE nim = '".$nim."' AND nama = '".$nama."'");
					if (mysqli_fetch_row($query)) {
						$_SESSION['nim'] = $nim;
						echo "<script languange = 'javascript'>alert('Login berhasil!');
 						document.location=('halamanawal.php');</script>";
					}
					else{
						echo "<script languange = 'javascript'>alert('Username atau Password anda salah!!');
 						document.location=('login.php');</script>";
					}
				}
				else{
					echo "<script languange = 'javascript'>alert('Input harus diisi dan maksimal 35 huruf');
 					document.location=('login.php');</script>";
				}
			}
			else{
				echo "<script languange = 'javascript'>alert(''NIM harus berisikan 10 digit');
 				document.location=('login.php');</script>";
			}
		}
		else{
			echo "<script languange = 'javascript'>alert('NIM Harus Angka');
 			document.location=('login.php');</script>";
		}
		
	}
?>