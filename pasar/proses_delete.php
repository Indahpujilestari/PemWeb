<?php

include "koneksi.php";
// mengambil id dari home.php
$id = $_GET['id'];
// query hapus berdasarkan id
$sql = "DELETE FROM tb_buah WHERE kode_buah = $id";
$hapus = mysqli_query($koneksi, $sql);
// direct ke home php
header("Location: home.php");  