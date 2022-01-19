<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nama'],$_POST['jumlah'],$_POST['jumlah_bunga'],$_POST['jangka_waktu']);
	header('location:index.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['nama'],$_POST['jumlah'],$_POST['jumlah_bunga'],$_POST['jangka_waktu'],$_POST['id']);
	header('location:index.php');
}
elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data($id);
	header('location:index.php');
}
?>