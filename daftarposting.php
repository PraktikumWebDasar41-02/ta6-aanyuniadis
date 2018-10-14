<?php
$konek = mysqli_connect('localhost','root','','ta6');
$result = mysqli_query($konek, "SELECT * FROM ta_6");

echo 
'<center><table border = "2px">
	<thead>
		<tr>
			<th> Judul Postingan</th>
			<th> Tanggal Postingan</th>
			<th> Photo </th>
		</tr>
	</thead>
<tbody>';

$row = mysqli_fetch_row($result);
echo
	'<tr>
		<td>'.$row[0].'</td>
		<td>'.$row[1].'</td>
		<td>'.$row[2].'</td>
	</tr></center>';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css.css">
	<title>Daftar Postingan</title>
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
		<li><a href="edit.php">Edit</a></li> 
	</ul>		
 	<br><br><br><br><br>
	<center>
		<h2><b>Daftar Postingan</b></h2>
	<form action="" method="POST">
	</form>
</body>
</html>
<?php
	session_start();
	if (isset($_POST['submit'])) {
  		$judul_postingan=$_POST['judul_postingan'];
  		$tanggal_postingan=$_POST['tanggal_postingan'];
		$status=$_POST['status'];
    	$foto = $_POST['foto'];
    }
?>