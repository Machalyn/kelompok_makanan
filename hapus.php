<?php
include 'koneksi.php'; //manggil koneksi database

//$id_pembeli = $_GET['no'];

mysqli_query($koneksi, "DELETE FROM pembeli where id_pembeli='$_GET[no]' ");


header("location: pembeli.php");
