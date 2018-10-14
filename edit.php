<?php
session_start();
$nim = $_SESSION['nim'];
$konek = mysqli_connect('localhost','root','','ta6');
$query =("SELECT * FROM ta_6 WHERE nim = '$nim'");
$hasil=mysqli_query($konek,$query);
$akhir=mysqli_query($hasil);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css.css">
	<title>Halaman edit</title>
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
	<ul>
		<li style="text-decoration: none; list-style: none; margin-right:5%; "><a href="login.php" style="background-color:#d817cf; height: 5%; width:40%; color:white; margin-top: 4%; border-radius: 5px; padding-bottom:55px;">LOGOUT</a></li>
		<li><a href="halamanawal.php">Beranda</a></li>
		<li><a href="posting.php">Posting</a></li>
		<li><a href="daftarposting.php">Daftar Posting</a></li>
		<li><a href="semuaposting.php">Timeline</a></li>
		<li><a href="edit.html">Edit</a></li> 
	</ul>
	<br><br><br><br>
	<center>		
	<h2><b>Edit Profil</b></h2>
		<table border="2">
			<form action="" method="POST" enctype="multipart/form-data">
			<tr>
				<td><b>NIM</b></td>
				<td> : </td>
				<td><input type="text" name="nim" required=""></td><?php echo $akhir['nim']; ?><br>
			</tr>
			<tr>
				<td><b>Nama</b></td>
				<td> : </td>
				<td><input type="text" name="nama" required=""></td><?php echo $akhir['nama']; ?><br>
			</tr>
			<tr>
				<td><b>Kelas</b></td>
				<td> : </td>
				<td><input type="radio" name="kelas" value="D3MI-41-01" required="">D3MI-41-01<?php echo $akhir['kelas']; ?><?php echo $akhir['kelas']; ?><br>
				<input type="radio" name="kelas" value="D3MI-41-02"D3MI-41-02"D3MI-41-02
				<input type="radio" name="kelas" value="D3MI-41-03"D3MI-41-03"D3MI-41-01
				<input type="radio" name="kelas" value="D3MI-41-04"D3MI-41-04"D3MI-41-01
			</tr>
			<tr>
				<td><b>Jenis Kelamin</b></td>
				<td> : </td>
				<td><input type="radio" name="jenis_kelamin" value="Laki-Laki" required="">Laki-Laki<?php echo $akhir['jenis_kelamin']; ?> <?php echo $akhir['jenis_kelamin']; ?><br>
				<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td><input type="checkbox" name="hobi[]" value="Membaca">Membaca<?php echo $akhir['hobi']; ?> <?php echo $akhir['hobi']; ?><br>
				<input type="checkbox" name="hobi[]" value="Menulis">Menulis
				<input type="checkbox" name="hobi[]" value="Menari">Menari
				<input type="checkbox" name="hobi[]" value="Menyanyi">Menyanyi
				<input type="checkbox" name="hobi[]" value="Melukis">Melukis</td>
			</tr>
			<tr>
				<td><b>Fakultas</b></td>
				<td> :</td>
				<td><select name="fakultas" required=""><?php echo $akhir['fakultas']; ?><?php echo $akhir['fakultas']; ?><br>
					<option value="pilih">====Pilih Fakultas====</option>
    				<option value="FTE">Fakultas Teknik Elektro</option>
    				<option value="FIT">Fakultas Ilmu Terapan</option>
    				<option value="FEB">Fakultas Ekonomi Bisnis</option>
    				<option value="FIK">Fakultas Industri Kreatif</option>
    				<option value="FRI">Fakultas Rekayasa Industri</option>
    			</select></td>
    		</tr>
    		<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat" placeholder="Masukan Alamat Anda Disini"></textarea></td><?php echo $akhir['alamat']; ?> <?php echo $akhir['alamat']; ?><br>
			</tr>
			<tr>
				<td>Judul Postingan</td>
				<td> :</td>
				<td><input type="text" name="judul_postingan" required=""></td><?php echo $akhir['judul_postingan']; ?> <?php echo $akhir['judul_postingan']; ?><br>
			</tr>
			<tr>
				<td>Tanggal Postingan</td>
				<td> : </td>
				<td><input type="text" name="tanggal_postingan" required=""></td><?php echo $akhir['tanggal_postingan']; ?> <?php echo $akhir['tanggal_postingan']; ?><br>
			</tr>
			<tr>
				<td> Status </td>
				<td> :</td>
				<td><textarea name="status" placeholder="Apa Yang Anda Pikirkan"></textarea></td><?php echo $akhir['status']; ?> <?php echo $akhir['status']; ?><br>
			</tr>
			<tr>
				<td>Foto</td>
				<td> : </td> 
				<td> <input type="file" name="foto" style="width: 80%; height: 20px; border-radius: 10%"></td><?php echo $akhir['foto']; ?> <?php echo $akhir['foto']; ?><br>
			</tr>
			<tr>
				<td colspan="4"><br><center><input type="submit" name="submit"></center></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$kelas=$_POST['kelas'];
		$jenis_kelamin=$_POST['jenis_kelamin'];
		$hobi=$_POST['hobi'];
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];
		$hobby = "";
  		$judul_postingan=$_POST['judul_postingan'];
  		$tanggal_postingan=$_POST['tanggal_postingan'];
		$status=$_POST['status'];
    	$foto = $_POST['foto'];
    	$query=mysqli_query($konek,"INSERT INTO ta_6 VALUES ($nim,'$nama','$kelas','$jenis_kelamin','$hobby','$fakultas','$alamat','$status','$foto','$judul_postingan','$tanggal_postingan')");
    }
?>
