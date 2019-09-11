<?php

//buat koneksi
$koneksi = mysqli_connect("localhost", "root", "", "stok_makanan");

//test koneksi
if (mysqli_connect_errno()){
    echo "gagal bos :" .//penghubung kalimat
    mysqli_connect_error();
}

?>