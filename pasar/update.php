<?php
include "koneksi.php";

$namaBuah   = $_POST['nama_buah'];
$jenisBuah  = $_POST['jenis_buah'];
$stokBuah   = $_POST['stok_buah'];
$hargaBuah  = $_POST['harga_buah'];

$update = "update tb_buah SET "