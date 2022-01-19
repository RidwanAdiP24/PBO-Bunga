<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "bunga_data";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_error()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function index()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_bunga");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_data($nama,$jumlah,$jumlah_bunga,$jangka_waktu)
	{
		mysqli_query($this->koneksi,"insert into tb_bunga values ('','$nama','$jumlah','$jumlah_bunga','$jangka_waktu')");
	}

	function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_bunga where id='$id'");
		return $query->fetch_array();
	}

	function update_data($nama,$jumlah,$jumlah_bunga,$jangka_waktu,$id)
	{
		$query = mysqli_query($this->koneksi,"update tb_bunga set nama='$nama',jumlah='$jumlah',jumlah_bunga='$jumlah_bunga',jangka_waktu='$jangka_waktu' where id='$id'");
	}

	function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from tb_bunga where id='$id'");
	}
}
?>