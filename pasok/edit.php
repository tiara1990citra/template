<?php
include "../koreksi.php";
$sql = "select * from pasok where id_pasok = " .$_GET['id'];
$hasil = $koneksi->query($sql);

$p = ($hasil->fetch_assoc());


if (isset($_POST['id_pasok'])) 

{

  $sql = "update pasok set 
      id_pasok = '" . $_POST['id_pasok'] . "',
      id_distributor = '" . $_POST['id_distributor'] . "',
      id_buku = '" . $_POST['id_buku'] . "',
      jumlah = '" . $_POST['jumlah'] . "',
      tanggal = '" . $_POST['tanggal'] . "'
  ";

  $koneksi->query($sql);

  header('location:distributor/tabeldistributor.php');

}
;?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<form action="pasok.php" method="post">
        <div class="mb-3">
            <label for="id_pasok" class="form-label">id_pasok</label>
            <input type="text" class="form-control" id="id_pasok" name="id_pasok">
        </div>
        <div class="mb-3">
            <label for="id_distribusi" class="form-label">id_distribusi</label>
            <input type="text" class="form-control" id="id_distribusi" name="id_distribusi">
        </div>
        <div class="mb-3">
            <label for="id_buku" class="form-label">id_buku</label>
            <input type="text" class="form-control" id="id_buku " name="id_buku">
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">jumlah</label>
            <input type="text" class="form-control" id="jumlah " name="jumlah">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">tanggal</label>
            <input type="date" class="form-control" id="tanggal " name="tanggal">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>