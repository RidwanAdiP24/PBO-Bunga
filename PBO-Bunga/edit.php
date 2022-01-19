<?php 	
include('koneksi.php');
$db = new database();
$id = $_GET['id'];
if(! is_null($id))
{
	$data_bunga = $db->get_by_id($id);
}

else
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Tambah data</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
<h3>Update Bunga</h3>
<hr/>

<section class="row">
<div class="col-md-6 offset-md-3 align-self-center">
<form method="post" action="proses_bunga.php?action=update">
<input type="hidden" name="id" value="<?php echo $data_bunga['id']; ?>"/>
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $data_bunga['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>Pinjaman</td>
		<td>:</td>
		<td><input type="text" name="jumlah" value="<?php echo $data_bunga['jumlah']; ?>"/></td>
	</tr>
	<tr>
		<td>Bunga</td>
		<td>:</td>
		<td><input type="text" name="jumlah_bunga" value="<?php echo $data_bunga['jumlah_bunga']; ?>"/></td>
	</tr>
	<tr>
		<td>Jangka Waktu</td>
		<td>:</td>
		<td><input type="text" name="jangka_waktu" value="<?php echo $data_bunga['jangka_waktu']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>
			<input type="submit"  class="btn btn-info text-white" name="tombol" value="Update"/>
			<a href="index.php" type="button" class="btn btn-info text-white">Kembali</a>
	   </td>
	</tr>
</table>
</form>
</div>
</section>
</body>
</html>