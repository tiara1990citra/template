<?php
include "../koreksi.php";
$sql = "SELECT * from pasok where id_pasok =" . $_GET['id'];
$hasil = $koneksi->query($sql);

$p = ($hasil->fetch_assoc());


if (isset($_POST['tanggal'])) {

    $sql = "update pasok set 
      jumlah = '" . $_POST['jumlah'] . "',
      tanggal = '" . $_POST['tanggal'] . "'
  ";

    $koneksi->query($sql);

    header('location:tabelpasok.php');

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
            <label for="jumlah" class="form-label">jumlah</label>
            <input type="text" class="form-control" id="jumlah " name="jumlah" value="<?= $p['jumlah']; ?>">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">tanggal</label>
            <input type="date" class="form-control" id="tanggal " name="tanggal" value="<?= $p['tanggal']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>