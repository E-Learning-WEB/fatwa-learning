<?php 
session_start();

	if(isset($_POST['kirimkomentar_materi']))
	{
	$id_anggota= $_SESSION['id_anggota'];
	include 'koneksi.php';
	$id_materi = $_POST['id']; 
	$isi = mysql_real_escape_string ($_POST['isikomentar']);    
	$waktu = time();
	$sql = "insert into tbkomunikasi set 	tipe=2,
										 	id_materi='$id_materi',
											id_anggota='$id_anggota',
											waktu='$waktu',
											isi='$isi'";
							
	mysql_query($sql);
	$_SESSION['kutipan'] = null;
	
	$pesan ="Sukses";
	$redirect = header("refresh:1;url=http://localhost/kimia/blog-detail.php?id=$_POST[id]");
	}
	if(isset($_GET['aksi']))
	{
		if($_GET['aksi']=='hapus-balasanforum')
		include 'koneksi.php';
		$id_komunikasi = $_GET['id_kom'];
		$sql = "DELETE FROM tbkomunikasi WHERE id_kom = $id_komunikasi";
		mysql_query($sql);	
	
	$pesan ="Sukses";
	$redirect = header("refresh:1;url=http://localhost/kimia/forum/tempforumadmin.php?id=$_GET[id]");
	}
	
	//proses hapus topik forum
	if($_GET['aksi']=='hapus-topikforum')
	{
		include 'koneksi.php';
		$sql = "UPDATE tbkomunikasi SET status =2 Where id_kom = $_GET[id]";
		mysql_query($sql);
		header("refresh:1;url=http://localhost/kimia/forum/tempforumadmin.php?id=$_GET[id]");
		$pesan = "Topik sudah dihapus";
	}
	
	
	
