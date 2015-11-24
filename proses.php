<?php 
session_start();

//forum 
if(isset($_POST['kirimforum']))
{
	include 'koneksi.php';
	$id_anggota = $_SESSION['id_anggota']; 
	$isi = mysql_real_escape_string ($_POST['isi']);
	$waktu = time();
	if(isset($_POST['judul']))
	{
		$judul = $_POST['judul'];
	}
	else
	{
		$judul = null;
	}
	
	$tipe = 1;
	$id_materi = 0; 
	
	//jika balas komentar
	if(!isset($_POST['judul']))
	{
		$tipe = 0;
		$id_materi = $_POST['id'];
	}
	
	$sql = "insert into tbkomunikasi set 	tipe=$tipe,
										 	judul='$judul',
											id_materi ='$id_materi',
											id_anggota='$id_anggota',
											waktu='$waktu',
											isi='$isi'";
							
	mysql_query($sql);
	if(isset($_POST['id']))
	{
	$link_id = 'forum/tempforumadmin.php?id='. $_POST['id'];
	}
	else
	{
		$link_id = 'forum/tempdata.php';
	}
	
	header('refresh:2;'.$link_id);
}




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
	if(isset($_GET['aksi'])){
	if($_GET['aksi']=='hapus-topikforum')
	{
		include 'koneksi.php';
		$sql = "UPDATE tbkomunikasi SET status =2 Where id_kom = $_GET[id]";
		mysql_query($sql);
		header("refresh:1;url=http://localhost/kimia/forum/tempforumadmin.php?id=$_GET[id]");
		$pesan = "Topik sudah dihapus";
	}
	}
	
	
	
