<?php
if (isset($_POST['submit']))
	{
		$judul 		= $_POST['judul'];
		$komentar	= $_POST['komentar'];
		include('koneksi.php');
		$sql = "update forum set 	judul = '$judul',
									komentar = '$komentar'
									where judul = '$judul'";
		mysql_query($sql);
		header('location:tampilanforum.php');
	}
	if (isset($_GET['judul']))
	{
		mysql_connect("localhost","root","");
		mysql_select_db("baru");
		$judul = $_GET['judul'];
		$sql = "select * from forum where judul='$judul'";
		$data = mysql_query($sql);
		if (mysql_num_rows($data)>0) 
		{
			$row = mysql_fetch_assoc($data);
			?>
<h2>Edit Forum</h2>
		<form action="edit.php" method="post">
				<table>
					<tr>
						<tr>
						<td>Judul</td><br/>
						</tr>
						<tr>
						<td><input name="judul" type="text" placeholder="isikan judul anda" size="55" maxlength="70" rows="5" value="<?php echo $row['judul']; ?>"></td>
						</tr>
					</tr>
					<tr>
						<tr>	
						<td>Komentar</td><br/>
						</tr>
						<tr>
						<td><textarea name="komentar" type="text" rows="10" cols="50" value="x"><?php echo $row['komentar']; ?>
						</textarea></td>
						</tr>
					</tr>
					<tr>
						<tr></tr>
						<td></td>
						<td height="26" colspan="3"><input name="submit" type="submit" value="submit" /></td>
					</tr>
				</table>
			</form>
<?php
		}
	}

	?>