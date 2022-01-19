<?php 	
include('koneksi.php');
$db = new database();
$data_bunga = $db->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Utama</title>

    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Menghitung bunga bank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
</nav>

<table border="1">

<section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center">MENGHITUNG BUNGA</h1>
	  <td><tr> <a href="tambah_data.php" class="btn btn-primary mb-2">Tambah</a></tr></td>
      <table class="table table-bordered table-striped" >
	  
        <thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Pinjaman</th>
			<th>Bunga(%)</th>
			<th>Jangka Waktu(Bulan)</th>
			<th>Angsuran bunga per bulan</th>
			<th>Total bunga</th>
			<th>Total Bayaran</th>
			<th>Action</th>
			
		</tr>
		<?php 
		$no = 1;
		foreach($data_bunga as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo "Rp."; ?><?php echo $row['jumlah']; ?></td>
				<td><?php echo $row['jumlah_bunga']; ?></td>
				<td><?php echo $row['jangka_waktu']; ?></td>
			    <td><?php echo "Rp."; ?><?php echo (($row['jumlah'] * $row['jumlah_bunga'] /100) / $row['jangka_waktu'] );?> </td>
				<td><?php echo "Rp."; ?><?php echo (($row['jumlah'] * $row['jumlah_bunga'] /100) );?> </td>
				<td><?php echo "Rp."; ?><?php echo (($row['jumlah'] + ( $row['jumlah'] * $row['jumlah_bunga'] /100)) );?> </td>
				<td> 
                   
                    <a href='edit.php?id=<?php echo $row["id"];?>' type='button' class='btn btn-success'>Update</a>
					<a href="proses_bunga.php?action=delete&id=<?php echo $row['id'];  ?>"type='button' class='btn btn-danger' onlick='return confirm('Yakin ingin menghapus data?')'>Delete</a>
				</td>
				
			</tr>
			
			<?php 
		}
		?>
	</table>
</body>

<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
</html>