<?php 
// koneksi database
include 'koneksi.php';
 

$makanan = $_POST['makanan'];
$minuman = $_POST['minuman'];
$harga = $_POST['harga'];
 if (!empty($makanan) || !empty($minuman) || !empty($harga)) {
// menginput data ke database
mysqli_query($koneksi,"insert into menu values('','$nama','$kode_supir','$alamat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>