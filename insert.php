<?php 
include 'koneksi.php'; //manggil koneksi database

//deklarasi variabel

$id_pembeli = $_POST['id_pembeli'];
$nama = $_POST['nama'];
$no_telpon = $_POST['no_telpon'];
$jk = $_POST['jk'];

//proses masuk kedalam database
mysqli_query($koneksi, "INSERT INTO pembeli VALUES ('$id_pembeli','$nama','$no_telpon','$jk')");

header("location: pembeli.php");

?>