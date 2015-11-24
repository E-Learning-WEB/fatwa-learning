<?php
if(!isset($_SESSION['login']))
{
	session_start();
}
include 'function.php';

//fungsi untuk memperindah tulisan
include 'plugin/parsedown.php';
$parsedown = new parsedown();
$id_anggota= $_SESSION['id_anggota'];

if(isset($_POST['kirimkomentar']))
{
	include 'koneksi.php';
	$id_materi = $row['id']; 
	$isi = mysql_real_escape_string ($_POST['isikomentar']);    
	$waktu = time();
	$sql = "insert into tbkomunikasi set 	tipe=2,
										 	id_materi='$id_materi',
											id_anggota='$id_anggota',
											waktu='$waktu',
											isi='$isi'";
							
	mysql_query($sql);
	$_SESSION['kutipan'] = null;		
}


//jika ada aksi
if(isset($_GET['aksi']))
{
	if($_GET['aksi'] == 'hapuskomentar')
	{
	$sql_kom = "DELETE FROM tbkomunikasi WHERE id_kom='$_GET[id_kom]'";
	mysql_query($sql_kom);
	}
	elseif($_GET['aksi'] == 'balaskomentar')
	{
		$sql_kom = "SELECT isi,id_anggota FROM tbkomunikasi WHERE id_kom='$_GET[id_kom]'";
		$data_kom = mysql_query($sql_kom);
		$datakutipan = mysql_fetch_assoc($data_kom);
		$_SESSION['kutipan'] = $datakutipan['isi'];
	}
}//akhir aksi
else
{
		$_SESSION['kutipan'] = null;
}
?>


<html>
<head>
<link href="plugin/bootstrap.min.css" type="text/css" rel="stylesheet">    
<link href="plugin/bootstrap-themes.css" type="text/css" rel="stylesheet">    
</head>
<body>
<table width="80%">
<tr>
	<td>
	<?php
	if(!empty($_SESSION['kutipan']))
	{
		$balasan_anggota = $fungsi->idanggota_to_username($datakutipan['id_anggota'])['nama_lengkap'];
		//var_dump ($balasan_anggota);
		$isi =
		"<blockquote>
		Membalas komentar ". $balasan_anggota.
		"<p>".$_SESSION['kutipan']."</p>".
		"</blockquote>";
		}
		else
		{
			$isi = null;
		}
?>
<form method="post" action="proses.php">
	<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
	<textarea data-provide="markdown" name="isikomentar" cols="40"><?php echo $isi; ?>
	</textarea>
	<input type="submit" name="kirimkomentar_materi" value="kirim">
</form>
    </td>
</tr>
</table>

<h3>KOMENTAR</h3>
<?php
//untuk daftar komentar

$id_materi =$_GET['id'];
$sql = "SELECT * FROM tbkomunikasi WHERE id_materi = '$id_materi' ORDER BY waktu DESC";
$data = mysql_query($sql);
while ($row = mysql_fetch_assoc($data))
{
	$namauser = $row['id_anggota'];
	$isi = $parsedown->text($row['isi']);

?>
<table width="100%" border="1">
  <tr>
    <td><?php echo $fungsi->idanggota_to_username($namauser)["nama_lengkap"]; ?> <?php echo date('d F Y H:i:s A',$row['waktu'])?></td>
	
  </tr>
  <tr>
    <td><?php echo $isi ?></td>
  </tr>
  <tr>
  	<td>LINK : <a href="?id=<?php echo $_GET['id'];?>&aksi=hapuskomentar&id_kom=<?php echo $row['id_kom']?>">Hapus</a>
	<a href="?id=<?php echo $_GET['id'];?>&aksi=balaskomentar&id_kom=<?php echo $row['id_kom']?>">Balas</a>
	</td>
  </tr>
</table>
<?php
}
?>

<!--  Scripts-->
<script src="plugin/bootstrap.min.js"></script>
<script src="plugin/jquery-2.1.4.min.js"></script>
<script src="plugin/markdown.js"></script>
</body>
</html>