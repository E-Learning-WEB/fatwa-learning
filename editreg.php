<?php
	if (isset($_POST['submit']))
	{
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nama_lengkap= $_POST['nama_lengkap'];
		$email = $_POST['email'];
		include('koneksi.php');	
		$sql="update tbpengguna set 	username = '$username',
										password = '$password',
										nama_lengkap = '$nama_lengkap',
										email = '$email'
										where username = '$username'";
		mysql_query($sql);
		header('location:registrasi.php');	
		
	}
	if (isset($_GET['username']))
	{
		mysql_connect("localhost","root","");
		mysql_select_db("baru");
		$username = $_GET['username'];
		$sql = "select * from tbpengguna where username='$username'";
		$data = mysql_query($sql);
		if (mysql_num_rows($data)>0) 
		{
			$row = mysql_fetch_assoc($data);
			?>
			
		<ul class="list-style2">
			<form action="editreg.php" method="post">
				<table>
					<tr>
						<tr></tr>
						<td>Username </td>
						<td>:</td>
						<td><input name="username" type="text" size="20" maxlength="40" readonly="readonly" value="<?php echo $row['Username']; ?>"></td>
					</tr>
					</tr>
					<tr>	
						<tr></tr>
						<td>Password </td>
						<td>:</td>
						<td><input name="password" type="password" size="20" maxlength="40" value="<?php echo $row['password']; ?>"> </td>
					</tr>
					<tr>
						<tr></tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td><input name="nama_lengkap" type="text" size="40" maxlength="40" value="<?php echo $row['nama_lengkap']; ?>"> </td>
					</tr>
					<tr>
						<tr></tr>
						<td>E-Mail </td>
						<td>:</td>
						<td><input name="email" type="text" size="40" maxlength="40" value="<?php echo $row['email']; ?>"> </td>
					</tr>
				
					<tr>
						<tr></tr>
						<td></td>
						<td></td>
						<td height="26" colspan="3"><input name="submit" type="submit" value="submit" /></td>
					</tr>
				</table>
			</form>
			</ul>
<?php
		}
	}

	?>