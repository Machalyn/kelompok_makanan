<?php
include 'koneksi.php'; //manggil koneksi database

//deklarasi variabel

$id_pembeli = $_POST['id_pembeli'];
$nama = $_POST['nama'];
$no_telpon = $_POST['no_telpon'];
$jk = $_POST['jk'];
//proses masuk kedalam database

mysqli_query($koneksi, "UPDATE pembeli SET nama='$nama', no_telpon='$no_telpon', jk='$jk' WHERE id_pembeli='$id_pembeli'");

header("location: pembeli.php");
