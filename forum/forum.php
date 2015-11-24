<?php
include('../koneksi.php');
include('../function.php');
include('../plugin/Parsedown.php');
$Parsedown = new Parsedown();

$id = $_GET['id'];
$sql= "select * from tbkomunikasi where id_kom=$id AND tipe=1 AND status = 0" ;
$data = mysql_query($sql);
$row = mysql_fetch_assoc($data);

//check status hapus
if(mysql_num_rows($data)==0)
{
	echo "forum telah dihapus";
}
else
{
?>

<table width="100%" border="1">
  <tr style="background-color:#327ABC">
    <td style="color:#FDF6F6"><?php echo $fungsi->idanggota_to_username($row['id_anggota'])["nama_lengkap"]; ?>  <?php echo date('d F Y H:i:s A',$row['waktu'])?></td>
	
  </tr>
  <tr>
    <td><?php echo $Parsedown->text($row['isi']) ?></td>
  </tr>
  	<td><a href="../proses.php?aksi=hapus-topikforum&id=<?php echo $_GET['id']?>&id_kom=<?php echo $row['id_kom']?>"class="btn btn-small  btn-mfast-3"> Hapus</a>
	<a href="?id=<?php echo $_GET['id'];?>&aksi=balaskomentar&id_kom=<?php echo $row['id_kom']?>"class="btn btn-small  btn-mfast-3">Balas</a>
	</td>

</table>
<?php
//fungsi untuk menampilkan balasan yang ada di forum
$sql= "select * from tbkomunikasi where id_materi=$id AND tipe=0" ;
$data = mysql_query($sql);
while ($row = mysql_fetch_assoc($data))
{
?>
<table width="100%" border="1">
  <tr style="background-color:#1FCEEB">
    <td><?php echo $fungsi->idanggota_to_username($row['id_anggota'])["nama_lengkap"]; ?> <?php echo date('d F Y H:i:s A',$row['waktu'])?></td>
	
  </tr>
  <tr>
    <td><?php echo $Parsedown->text($row['isi']) ?></td>
  </tr>
  <div>
  	<td><a href="../proses.php?aksi=hapus-balasanforum&id=<?php echo $_GET['id']?>&id_kom=<?php echo $row['id_kom']?>" class="btn btn-small  btn-mfast-3">HAPUS</a>
	<a href="?id=<?php echo $_GET['id'];?>&aksi=balaskomentar&id_kom=<?php echo $row['id_kom']?>" class="btn btn-small  btn-mfast-3">BALAS</a>
	</td>
  </div>
</table>
<?php
}
//akhir fungsi dari menampilkan balasan forum
?>
<?php
include 'baru.php';
?>

<?php
}//cek status hapus
?>