<?php
include "koneksi.php";
// mengambil id dari hidden
$id = $_POST['id'];

// manampung isi
$NamaBuah = $_POST['nama_buah'];
$JenisBuah = $_POST['jenis_buah'];
$stokBuah = $_POST['stok_buah'];
$hargaBuah = $_POST['harga_buah'];

// query edit
$edit = "UPDATE tb_buah SET nama_buah='$NamaBuah',jenis_buah='$JenisBuah',stok_buah='$stokBuah',harga_buah='$hargaBuah' WHERE kode_buah='$id'";

// pengecekan error
if (mysqli_query($koneksi, $edit)) {
	echo "data berhasil diedit";
	header("location:home.php");
}else{
	echo "lapor! ada error di".mysqli_error($koneksi);
}