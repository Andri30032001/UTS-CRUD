<h3>Data Mahasiswa</h3>
<hr>
<a href="input_mhs.php">TAMBAH DATA</a>
<table border="1" cellspacing="0" width="100%">
	<tr>
		<th>No</th>
		<th>Nim</th>
		<th>Nama Mahasiswa</th>
		<th>L/P</th>
		<th>Alamat</th>
		<th>Aksi</th>
	</tr>

	<?php
	include "Koneksi.php";
	$no=1;
	$sqlMhs = mysqli_query($konek, "SELECT * FROM mahasiswa ORDER BY Nim ASC");

	while($d = mysqli_fetch_array($sqlMhs)){
	 echo "<tr>
	      <td>$no</td>
	      <td>$d[Nim]</td>
	      <td>$d[Nama_mhs]</td>
	      <td>$d[jk]</td>
	      <td>$d[alamat]</td>
	      <td align='center'>
	          <a href='edit_mhs.php?Nim=$d[Nim]'>Edit</a> | <a href='hapus_mhs.php?Nim=$d[Nim]'>Hapus</a>
	          </td>
	     </tr>";
	    $no++; 
    }
    ?>

    </table>  