<h3>Form Data Mahasiswa</h3>
<hr>
<form method="post" action="">
	<table>
		<tr>
			<td>Nim</td>
			<td><input type="text" name="txtNim"></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td><input type="text" name="txtNama"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
			<select name="txtKelamin">
				<option value="">- Pilih -</option>
				<option value="L">L</option>
				<option value="P">P</option>
			</select>
		</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="txtAlamat"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>

<?php
include ("Koneksi.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
	$simpan = mysqli_query($konek, "INSERT INTO mahasiswa (Nim,Nama_mhs,jk,alamat)
		VALUES('$_POST[txtNim]','$_POST[txtNama]','$_POST[txtKelamin]','$_POST[txtAlamat]')");

	if($simpan){
		header('location:data_mhs.php');
	}else{
		echo "Gagal Menyimpan Data...";
	}
}
?>