<?php
		include('koneksi.php');
	if (isset($_POST['upload']))
	{
		$waktu = time();
		
		$file =$_FILES['file'];
		$nama =$_FILES;
		$fileextensi = substr($file['name'],strpos($file['name'],'.')+1) ;
		
		$judul = $_POST['judul'];
		
		if($fileextensi == 'doc' OR $fileextensi == 'docx' OR $fileextensi == 'pdf')
		{
		move_uploaded_file($file['tmp_name'],"materi/$file[name]") or die ('gagal');
			$konten = 'materi = "'.$file['name'].'"';
		}
		else
		{
		move_uploaded_file($file['tmp_name'],"video/$file[name]") or die ('gagal');
			$konten = 'video ="'. $file['name']. '"';		
		}
		
		$sql="Insert into tbmateri set judul = '$judul',
										waktu='$waktu',
									$konten";
									
		mysql_query($sql);
}?>

<form action="tempupload.php" method="post" enctype="multipart/form-data">
	Judul : <input type="text" name="judul" />
	Nama File : <input type="file" name="file" />
	<input type="submit" value="upload" name="upload" />
</form>
<div class="short-table white"> 
	<table  width="100%">
		<tr>
            <th class="align-left">Judul</th>
			<th>MATERI</th>
			<th>VIDEO</th>
			<th>WAKTU</th>
        </tr>
<?php
	$sql = 'select * from tbmateri';
	$data = mysql_query($sql);
	while($row = mysql_fetch_assoc($data))
{
?>
	<tr>
    	<td><a href="blog-detail.php?id=<?php echo $row['id']?>"> 
		<?php echo $row['judul'] ?></a></td>
    	<td><?php echo $row['materi']?></td>
    	<td><?php echo $row['video']?></td>
    	<td><?php echo date('d-m-Y H:i:s A',$row['Waktu'])?></td>
  	</tr>
</div>
<?php
}
?>
</table>


