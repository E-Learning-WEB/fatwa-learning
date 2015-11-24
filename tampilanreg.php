<form actiion="load.php" method="post">
	kriteria : <select name="kriteria">
					<option value="id_anggota">id</option>
					<option value="username">username</option>
					<option value="password">password</option>
					<option value="nama_lengkap">Nama_Lengkap</option>
					<option value="email">email</option>
				</select>
	kondisi: <input type="test" name="cari" size="20" maxlength="20">
	<input type="submit" name="filter" value="filter">
</form>			
<?php
	mysql_connect("localhost","root","");
	mysql_select_db("baru");
	if (isset($_POST['filter']))
	{
		$kriteria = $_POST['kriteria'];
		$cari= $_POST['cari'];
		$sql="select * from tbpengguna where $kriteria like '%$cari%'";
		$data = mysql_query($sql) or die("$sql");
	}
	else
	{
	$sql="select * from tbpengguna";
	$data=mysql_query($sql);
	}
?>
	<div class="short-table white"> 
    <table  width="100%">
        <tr>
            <th class="align-left">id</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama Lengkap</th>
			<th>Email</th>
			<th>Proses</th>
        </tr>
<?php
	while ($row = mysql_fetch_assoc($data))
	{?>
		<tr>
			<td><?php echo $row['id_anggota'];?></td>
			<td><?php echo $row['Username'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><?php echo $row['nama_lengkap'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><a href="hapusreg.php?id=<?php echo $row['id_anggota'];?>" title="Hapus Data">Hapus</a>
            <a href="tempedit.php?username=<?php echo $row['Username'];?>" title="Edit Data">Edit</a>
            </td>
		</tr>
</div>
<?php
	}?>
</table>
