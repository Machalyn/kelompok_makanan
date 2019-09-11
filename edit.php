<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">


    <style>
        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
    </style>
</head>

<body>

    <?php
    include "koneksi.php";

    $id_pembeli = $_GET['p'];

    $query_mysql = mysqli_query($koneksi, "SELECT * FROM pembeli WHERE id_pembeli='$id_pembeli'") or die(mysql_error());

    while ($data = mysqli_fetch_array($query_mysql)) {
        ?>

        <body id="container">


            <form id="form" action="update.php" method="POST" style="margin-left:20px;">
                <fieldset>

                    <input type="hidden" name="id_pembeli" value="<?php echo $data['id_pembeli'] ?>"><br>

                    <label>Nama</label><br>
                    <input type="text" value="<?php echo $data['nama'] ?>" name="nama" autofocus><br>

                    <label>No Telepon</label><br>
                    <input type="text" value="<?php echo $data['no_telpon'] ?>" name="no_telpon"><br>

                    <label>Jenis Kelamin</label>

                    <?php
                        if ($data['jk'] == "L") {
                            ?>
                        <input type="radio" name="jk" value="L" checked> Male
                        <input type="radio" name="jk" value="P"> Female<br>

                    <?php
                        } else {

                            ?>

                        <input type="radio" name="jk" value="L"> Male
                        <input type="radio" name="jk" value="P" checked> Female<br>

                    <?php
                        }

                        ?>



                    <input type="submit" class="btn btn-outline-primary btn-sm" value="update">


                </fieldset>
            </form>

        <?php } ?>


        </div>

        </body>

</html>