<?php
include "../koreksi.php";
$sql = "select * from buku where id_buku = " . $_GET['id'];
$hasil = $koneksi->query($sql);

$p = ($hasil->fetch_assoc());


if (isset($_POST['judul'])) {

    $sql = "update buku set 
      judul = '" . $_POST['judul'] . "',
      noisbn = '" . $_POST['noisbn'] . "',
      penulis = '" . $_POST['penulis'] . "',
      penerbit = '" . $_POST['penerbit'] . "',
      tahun = '" . $_POST['tahun'] . "',
      stok = '" . $_POST['stok'] . "',
      harga_pokok = '" . $_POST['harga_pokok'] . "',
      harga_jual = '" . $_POST['harga_jual'] . "',
      ppn = '" . $_POST['ppn'] . "',
      diskon = '" . $_POST['diskon'] . "'
  ";

    $koneksi->query($sql);

    header('location:tabelbuku.php');

}
; ?>


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

    <form action="" method="post">
        <div class="mb-3">
            <label for="judul" class="form-label">judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?= $p['judul']; ?>">
        </div>
        <div class="mb-3">
            <label for="noisbn" class="form-label">noisbn</label>
            <input type="text" class="form-control" id="noisbn " name="noisbn" value="<?= $p['noisbn']; ?>">
        </div>
        <div class="mb-3">
            <label for="penulis" class="form-label">penulis</label>
            <input type="text" class="form-control" id="penulis " name="penulis" value="<?= $p['penulis']; ?>">
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">penerbit</label>
            <input type="text" class="form-control" id="penerbit " name="penerbit" value="<?= $p['penerbit']; ?>">
        </div>
        <div class="mb-3">
            <label for="tahun" class="form-label">tahun</label>
            <input type="text" class="form-control" id="tahun " name="tahun" value="<?= $p['tahun']; ?>">
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">stok</label>
            <input type="text" class="form-control" id="stok " name="stok" value="<?= $p['stok']; ?>">
        </div>
        <div class="mb-3">
            <label for="harga_pokok" class="form-label">harga_pokok</label>
            <input type="text" class="form-control" id="harga_pokok" name="harga_pokok" value="<?= $p['harga_pokok']; ?>">
        </div>
        <div class="mb-3">
            <label for="harga_jual" class="form-label">harga_jual</label>
            <input type="text" class="form-control" id="harga_jual" name="harga_jual" value="<?= $p['harga_jual']; ?>">
        </div>
        <div class="mb-3">
            <label for="ppn" class="form-label">ppn</label>
            <input type="text" class="form-control" id="ppn" name="ppn" value="<?= $p['ppn']; ?>">
        </div>
        <div class="mb-3">
            <label for="diskon" class="form-label">diskon</label>
            <input type="text" class="form-control" id="diskon" name="diskon" value="<?= $p['diskon']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>