<?php
include "Koneksi.php";
$Hapus = mysqli_query($konek, "DELETE FROM mahasiswa WHERE Nim='$_GET[Nim]'");

if($Hapus){
	header('location:data_mhs.php');
}else{
	echo "Gagal Menghapus Data..";
}
?>