
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css.css">
	<title>postingan</title>
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
		<li style="text-decoration: none; list-style: none; margin-right:5%; "><a href="login.php" style="background-color:#d817cf; height: 2%; width:40%; color:white; margin-top: 4%; border-radius: 5px; padding-bottom:55px;">LOGOUT</a></li>
		<li><a href="halamanawal.php">Beranda</a></li>
		<li><a href="posting.php">Posting</a></li>
		<li><a href="daftarposting.php">Daftar Posting</a></li>
		<li><a href="semuaposting.php">Timeline</a></li>
		<li><a href="edit.php">Edit</a></li>
	</ul>		
 	<br><br><br><br><br>
	<center>
		<h2><b> Buat Postingan</b></h2>
		<form action="" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td><b>Judul Postingan</b> </td>
					<td><input type="text" name="judul_postingan" required="" style= "border-color: black"></td>
				</tr>
				<tr>
					<td><b>Tanggal Postingan </b></td>
					<td><input type="date" name="tanggal_postingan" required="" style= "border-color: black"></td>
				</tr>
				<tr>
					<td><b>Masukkan Cerita</b></td>
					<td> <input type="textarea" name="status"
					row='20' cols='80' style= "border-color: black"></td>
				</tr>	
				<tr>
					<td><b>Foto</b> </td>
					<td> <input type="file" name="foto" style="width: 80%; height: 20px; border-radius: 10%"></td>
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
  session_start();
  if(isset($_POST['submit'])){
  	$judul_postingan=$_POST['judul_postingan'];
  	$tanggal_postingan=$_POST['tanggal_postingan'];
	$status=$_POST['status'];
	$foto= $_FILES["foto"]["name"];
	$hasil = str_word_count($status);
		if ($hasil < 30) {
			echo "ERROR";
		}else{
			echo "Jumlah Kata :" .$hasil;
		}
   	//$foto = "gambar/".$_FILES['gambar']['name'];
   	$query=mysqli_query($konek,"INSERT INTO ta_6 VALUES ($nim,'$nama','$kelas','$jenis_kelamin','$hobi','$fakultas','$alamat','$status','$foto','$judul_postingan','$tanggal_postingan')");
    //if (move_uploaded_file($_FILES['image']['tmp_name'],$foto)) {
      //echo "Upload Sukses!";
   		// }else {
      //echo "Upload Gagal...";
 // }
}
 ?>