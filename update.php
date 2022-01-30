<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$makanan = $_POST['makanan'];
$minuman = $_POST['minuman'];
$harga = $_POST['harga'];
 
// update data ke database
mysqli_query($koneksi,"update menu set makanan='$makanan', minuman='$minuman', harga='$harga' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>