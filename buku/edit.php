<?php
include "../koreksi.php";
$sql = "select * from buku where id_buku = " .$_GET['id'];
$hasil = $koneksi->query($sql);

$p = ($hasil->fetch_assoc());


if (isset($_POST['id_buku'])) 

{

  $sql = "update toko_buku set 
      id_buku = '" . $_POST['id_buku'] . "',
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

  <form action="distributor.php" method="post">
  <div class="mb-3">
            <label for="id_buku" class="form-label">id_buku</label>
            <input type="text" class="form-control" id="id_buku" name="id_buku">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" class="form-control" id="alamat " name="alamat">
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">telepon</label>
            <input type="text" class="form-control" id="telepon " name="telepon">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">status</label>
            <input type="text" class="form-control" id="status " name="status">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">username</label>
            <input type="text" class="form-control" id="username " name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control" id="password " name="password">
        </div>
        <div class="mb-3">
            <label for="akses" class="form-label">akses</label>
            <input type="text" class="form-control" id="akses" name="akses">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>