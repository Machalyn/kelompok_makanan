<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>pembeli </title>
  <link href="asset/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="asset/script.js"></script>



  <style>
    #container {
      margin: 10px;
      border: 1px solid #D0D0D0;
      box-shadow: 0 0 8px #D0D0D0;
    }

    #form {
      margin: 2%;
    }

    #header {
      background-color: #000000;
      color: white;
      text-align: center;
      font-size: 32px;
      height: 50px;
      border: 1px solid;

    }

    .otn {
      margin: 9px;
    }

    code {
      font-family: Consolas, Monaco, Courier New, Courier, monospace;
      font-size: 12px;
      background-color: #6666ff;
      border: 1px solid #D0D0D0;
      color: #fff;
      display: block;
      margin: 14px 0 14px 0;
      padding: 12px 10px 12px 10px;
    }
  </style>

</head>

<body id="container">

  <code style="text-align: right;">
    <a href="">Home</a>|
    <a href="">Kasir</a>|

  </code>

  <div id="header">
    Data Pembeli
  </div>



  <div class="otn">

    <button type="button" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#update">Update</button>

  </div>

  <div class="modal fa" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Insert</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="insert.php" method="post">
          <div class="modal-body">

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">ID Pembeli</label>
              <input type="text" class="form-control" id="recipient-name" name="id_pembeli">
            </div>

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nama</label>
              <input type="text" class="form-control" id="recipient-name" name="nama">
            </div>


            <div class="form-group">
              <label for="message-text" class="col-form-label">No telpon</label>
              <input type="text" class="form-control" id="message-text" name="no_telpon"></textarea>
            </div>

            <div class="form-group">
              <label for="message-text" class="col-form-label">Jenis Kelamin</label><br>
              <input type="radio" name="jk" value="L"> Male
              <input type="radio" name="jk" value="P"> Female<br>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-outline-primary" value="save changes">
          </div>
        </form>
      </div>
    </div>
  </div>

  </div>

  <table id="table_id" width="100%" border="1px solid"><br>

    <thead style="text-align: center;">
      <tr>
        <th>ID Pembeli</th>
        <th>Nama</th>
        <th>No telpon</th>
        <th>Jenis Kelamin</th>
        <th>Action</th>


      </tr>
    </thead>

    <tbody style="text-align: center;">

      <?php
      include "koneksi.php";

      $query_mysql = mysqli_query($koneksi, "SELECT * FROM pembeli") or die(mysql_error());

      while ($data = mysqli_fetch_assoc($query_mysql)) {
        ?>
        <tr align="center">

          <td><?php echo $data['id_pembeli']; ?></td>
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['no_telpon']; ?></td>
          <td><?php echo $data['jk']; ?></td>

          <td>
            <a href="edit.php?p=<?php echo $data['id_pembeli']; ?>">
              <input type="button" class="btn btn-outline-success btn-sm" value="Edit"></a>


            <a href="hapus.php?no=<?php echo $data['id_pembeli']; ?>">
              <input type="button" class="btn btn-outline-danger btn-sm" value="Hapus"></a></td>


        </tr>
      <?php } ?>
    </tbody>
  </table>
  </div>
  <!-- 
  <div class="modal fa" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form id="form-pembeli">
          <div class="modal-body">

            <input type="hidden" id="id_pembeli" class="form-control" name="id_pembeli">

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="form-group">
              <label for="message-text" class="col-form-label">No telpon</label><br>
              <input type="text" class="form-control" id="no_telpon" name="no_telpon">
            </div>

            <div class="form-group">
              <label for="message-text" class="col-form-label">Jenis Kelamin</label><br>

              <input type="radio" name="jk" value="L" id="jk_m"> Male
              <input type="radio" name="jk" value="P" id="jk_f"> Female<br>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            <button onclick="update_pembeli()" type="button" class="btn btn-outline-primary">Save changes</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  </div> -->

</body>

</html>