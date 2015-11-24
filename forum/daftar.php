<?php
	include('../koneksi.php');
	include 'baru.php';
?>
	
<table width="100%" border="1">
  <tr>
    <td>JUDUL</td>
    <td>WAKTU</td>
  </tr>
  <?php
  $sql = 'select * from tbkomunikasi WHERE tipe=1 AND status=0';
  $data = mysql_query($sql);
  while($row = mysql_fetch_assoc($data))
  {
  ?>
  <tr>
    <td><a href="tempforumadmin.php?id=<?php echo $row['id_kom']?>"> 
	<?php echo $row['judul'] ?></a></td>
   
    <td><?php echo date('d-m-Y H:i:s A',$row['waktu'])?></td>
  </tr>
  <?php
  }
  ?>
</table>


