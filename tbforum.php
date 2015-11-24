<?php
	if (isset($_POST['kirim']))
		{
			$judul = $_POST['judul'];
			$komentar = $_POST['komentar'];
			include('koneksi.php');

				$sql="Insert into forum set judul = '$judul',
											komentar ='$komentar'";
				mysql_query($sql);
				echo "<p style='text-align:center'>Tersimpan</p>";
				echo"<p style='text-align:center'><a class='button small' href='forum.php'>Kembali</a></p>";

		}
	else
		{
		?>
			
<h2>Forum</h2>
		<form action="forum.php" method="post">
				<table>
					<tr>
						<tr>
						<td>Judul</td><br/>
						</tr>
						<tr>
						<td><input name="judul" type="text" placeholder="isikan judul anda" size="55" maxlength="70" rows="5"/></td>
						</tr>
					</tr>
					<tr>
						<tr>	
						<td>Komentar</td><br/>
						</tr>
						<tr>
						<td><textarea name="komentar" type="text" palceholder="isikan komentar anda" rows="10" cols="50"/> 
						</textarea></td>
						</tr>
					</tr>
					<tr>
						<tr></tr>
						<td></td>
						<td height="26" colspan="3"><input name="kirim" type="submit" value="kirim" /></td>
					</tr>
				</table>
			</form>
		<?php
		}
			?>