<?php 
	include('koneksi.php');
	$id = $_GET['id'];
	$query = mysql_query("delete from user where id_user='$id'") or die(mysql_error());
	if ($query) {
		header('location:admin/kelola.php?message=delete');
	}
?>