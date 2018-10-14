<!DOCTYPE html>
<html>
<head>
	<title>Regis</title>
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
		<h1>Selamat Datang Dihalaman Registrasi</h1>
		<h3>Masukan Data Anda!</h3>
		<h2><b>Registrasi</b></h2>
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
				<td><b>Kelas</b></td>
				<td> : </td>
				<td><input type="radio" name="kelas" value="D3MI-41-01" required="">D3MI-41-01
				<input type="radio" name="kelas" value="D3MI-41-02">D3MI-41-02
				<input type="radio" name="kelas" value="D3MI-41-03">D3MI-41-03
				<input type="radio" name="kelas" value="D3MI-41-04">D3MI-41-04
			</tr>
			<tr>
				<td><b>Jenis Kelamin</b></td>
				<td> : </td>
				<td><input type="radio" name="jenis_kelamin" value="Laki-Laki" required="">Laki-Laki
				<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td><b>Hobi</b></td>
				<td>:</td>
				<td><input type="checkbox" name="hobi[]" value="Membaca">Membaca
				<input type="checkbox" name="hobi[]" value="Menulis">Menulis
				<input type="checkbox" name="hobi[]" value="Menari">Menari
				<input type="checkbox" name="hobi[]" value="Menyanyi">Menyanyi
				<input type="checkbox" name="hobi[]" value="Melukis">Melukis</td>
			</tr>
			<tr>
				<td><b>Fakultas</b></td>
				<td> :</td>
				<td><select name="fakultas" required="">
					<option value="pilih">====Pilih Fakultas====</option>
    				<option value="FTE">Fakultas Teknik Elektro</option>
    				<option value="FIT">Fakultas Ilmu Terapan</option>
    				<option value="FEB">Fakultas Ekonomi Bisnis</option>
    				<option value="FIK">Fakultas Industri Kreatif</option>
    				<option value="FRI">Fakultas Rekayasa Industri</option>
    			</select></td>
    		</tr>
    		<tr>
				<td><b>Alamat</b></td>
				<td>:</td>
				<td><textarea name="alamat" placeholder="Masukan Alamat Anda Disini"></textarea></td>
			</tr>
			<tr>
				<td colspan="4"><br><center><input type="submit" name="submit"></center></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>

<?php
	$konek = mysqli_connect('localhost','root','','ta6');
	session_start();
	if(isset($_POST['submit'])){
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$kelas=$_POST['kelas'];
		$jenis_kelamin=$_POST['jenis_kelamin'];
		$hobi=$_POST['hobi'];
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];
		$hobby = "";

 		if (!empty($hobi)) {
 			foreach ($hobi as $value) {
 				$hobby .= $value.", ";
 			}
 		}
		$error=array();
		if(strlen($_POST['nim']) != 10){
			$error['nim']=="Harus 10";
		} if(empty($kelas)){
			$error['kelas']=="kelas harus diisi";
		}if(empty($jenis_kelamin)){
			$error['jenis_kelamin']=="Jenis Kelamin harus diisi";
		} if(empty($hobby)){
			$error['hobby']=="hobi harus diisi";
		}if(empty($fakultas)){
			$error['fakultas']=="Fakultas harus diisi";
		}if(empty($alamat)){
			$error['alamat']=="alamat harus diisi";
		}

	$query=mysqli_query($konek,"INSERT INTO ta_6 VALUES ($nim,'$nama','$kelas','$jenis_kelamin','$hobby','$fakultas','$alamat','','','','')");
	if($query){
		header('Location:login.php');
	}
}
	
?>

	