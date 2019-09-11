<?php

include 'koneksi.php'; //manggil koneksi database

//deklarasi variabel

$id_pembeli = $_POST['id_pembeli'];
$nama = $_POST['nama'];
$no_telpon = $_POST['no_telpon'];
$jk = $_POST['jk'];

 //proses masuk kedalam database
 $query= "UPDATE pembeli SET id_pembeli='$id_pembeli', nama='$nama', no_telpon='$no_telpon', jk='$jk' WHERE id_pembeli='$id_pembeli'";

if(mysqli_query($koneksi, $query)){

$status = array('status'=> "berhasil", );
echo json_encode($status);


}else{
    $status = array('status'=> "gagal", );
    echo json_encode($status);

}





?>