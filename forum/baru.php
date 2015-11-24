<?php
if(!isset($_SESSION['login']))
{
	session_start();
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
  <p>
  <h3><?php echo $judul_input?></h3>
  </p>
  <form method="post" action="../proses.php" id="commentform">
    <div class="row">
      <p class="comment-form-author span3">
        <?php 	
	if(!isset($_GET['id']))
	{
		?>
        <label for="author">Judul</label>
        <input name="judul" type="text" value="" style="height:30px"/>
        <?php
	}
	else
	{
	?>
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
        <?php
	}
	?>
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