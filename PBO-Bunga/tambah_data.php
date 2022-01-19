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
<h3>Tambah data</h3>
<hr/>

<section class="row">
<div class="col-md-6 offset-md-3 align-self-center">
<form method="post" action="proses_bunga.php?action=add">
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"/></td>
	</tr>
	<tr>
		<td>Pinjaman</td>
		<td>:</td>
		<td><input type="number" name="jumlah"/></td>
	</tr>
	<tr>
		<td>Bunga</td>
		<td>:</td>
		<td><input type="number" name="jumlah_bunga"/></td>
	</tr>
	<tr>
		<td>Jangka Waktu</td>
		<td>:</td>
		<td><input type="number" name="jangka_waktu"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>
		<input type="submit" class="btn btn-info text-white" name="tombol" value="Simpan"/>
		<a href="index.php" type="button" class="btn btn-info text-white">Kembali</a>
	   </td>
		
	</tr>
</table>
</form>
</div>
</section>
</body>
</html>