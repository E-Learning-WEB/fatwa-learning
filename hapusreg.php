<?php
	mysql_connect("localhost","root","");
	mysql_select_db("baru");
	$id=$_GET['id'];
	$sql = "delete from tbpengguna where id_anggota='$id'";
	mysql_query($sql);
	header('location:registrasi.php');
?>

