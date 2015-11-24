<?php
	if (isset($_POST['login']))
	{
		include('koneksi.php');
		$sql = "select * from tbpengguna where username ='$_POST[username]' and password = '$_POST[password]'";
		$data = mysql_query($sql);
		if (mysql_num_rows($data)>0)
		{
			$row= mysql_fetch_assoc($data);
			$_SESSION['login']=True;
			$_SESSION['username'] = $row['Username'];
			$_SESSION['status'] = $row['status'];
			$_SESSION['id_anggota'] = $row['id_anggota'];
		}
	}
	if (isset($_SESSION['login']))
	{
		echo "Selamat Datang : ".$_SESSION['username'];		
		echo "<a href='logout.php'>Logout</a>";
	}
	else
	{?>
		<form action="index.php" method="post"> 
			<tr>	
				<td><input type="text" name="username"  placeholder="username"></td>

				<td><input type="password" name="password" placeholder="password"></td>
			</tr>
			<tr>
			<input name="login" type="submit" value="login" />
			<a href="registrasi.php">Registrasi</a>
			<a href="lupapasword.php">Lupa Password</a>
			</tr>
		</form>
	 <?php
	 }?>