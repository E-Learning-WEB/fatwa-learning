<?php
if(!isset($_SESSION['login']))
{
	session_start();
}
if(isset($_POST['kirimforum']))
{
	include '../koneksi.php';
	$id_anggota = $_SESSION['id_anggota']; 
	$isi = mysql_real_escape_string ($_POST['isi']);
	$waktu = time();
	
	$tipe = 1;
	$id_materi = 0; 
	//jika balas komentar
	if(isset($_GET['id']))
	{
		$tipe = 0;
		$id_materi = $_GET['id'];
	}
	
	$sql = "insert into tbkomunikasi set 	tipe=$tipe,
										 	judul='$_POST[judul]',
											id_materi ='$id_materi',
											id_anggota='$id_anggota',
											waktu='$waktu',
											isi='$isi'";
							
	mysql_query($sql);
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
<link href="../plugin/bootstrap.min.css" type="text/css" rel="stylesheet">    
<link href="../plugin/bootstrap-themes.css" type="text/css" rel="stylesheet">    
</head>
<body>
<div id="comments">
	<div id="respond">
                       
<?php
$judul_input = 'Input Forum Baru';
if(isset($_GET['id']))
{
	$judul_input = 'Balas Forum';
}
?>
<p><h3><?php echo $judul_input?></h3></p>
<form method="post" action="" id="commentform">
	<div class="row">
    	<p class="comment-form-author span3">
    	<label for="author">Judul</label>
        	<input name="judul" type="text" value="" style="height:30px"/>
        </p>
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
		<p class="comment-form-comment span9">
        	<label for="">Komentar</label>
            <textarea id="comment" name="isi" cols="45" rows="8" style="height:200px; width:400px"><?php echo $isi?></textarea>
        </p>
        <div class="span9">
         	<p class="form-submit">
            	<input type="submit" name="kirimforum" value="kirim">
            </p>
        </div>
        </div>
		

	</div>
</form>
</div>
</div>
</body>
</html>
<!--  Scripts-->
<script src="../plugin/bootstrap.min.js"></script>
<script src="../plugin/jquery-2.1.4.min.js"></script>
<script src="../plugin/markdown.js"></script>
