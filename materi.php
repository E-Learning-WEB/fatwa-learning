<?php
	if (isset($_POST['save']))
	{
		$judul = $_POST['judul'];
		$materi = $_POST['materi'];
		$video = $_POST['video'];
		include('koneksi.php');
			$sql="Insert into tbpengguna set judul = '$judul',
												materi = '$materi',
												video = '$video'";
				mysql_query($sql);
				echo "Data pengguna berhasil disimpan";
				echo"<p style='text-align:center'><a class='button small' href='registrasi.php'>KEMBALI</a></p>";
	}
	else
		{
		?>
	<h2>Form Materi</h2>
		<ul class="list-style2">
			<li class="first"><form action="materi.php" method="post"></li>
				<table>
					<tr>
						<tr></tr>
						<td>id </td>
						<td>:</td>
						<td><input name="username" type="text" size="20" maxlength="40" pa/></td>
					</tr>
					</tr>
					<tr>	
						<tr></tr>
						<td>judul </td>
						<td>:</td>
						<td><input name="password" type="password" size="20" maxlength="40"/> </td>
					</tr>
					<tr>
						<tr></tr>
						<td>materi</td>
						<td>:</td>
						<td><input name="nama_lengkap" type="text" size="40" maxlength="40"/> </td>
					</tr>
					<tr>
						<tr></tr>
						<td>video </td>
						<td>:</td>
						<td><input name="email" type="text" size="40" maxlength="40"/> </td>
					</tr>
				
					<tr>
						<tr></tr>
						<td></td>
						<td></td>
						<td height="26" colspan="3"><input name="save" type="submit" value="save" /></td>
					</tr>
				</table>
			</form>
			</ul>
		<?php
		}
			?>
