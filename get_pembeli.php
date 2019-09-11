<?php 

include "koneksi.php";

$id = $_POST['id_pembeli'];

$query_mysql = mysqli_query($koneksi, "SELECT * FROM pembeli WHERE id_pembeli='$id'");

echo json_encode(mysqli_fetch_assoc($query_mysql));







?>