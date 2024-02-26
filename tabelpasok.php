<?php

include "koreksi.php";

$sql = "select * from pasok";

$hasil = $koneksi->query($sql);

?>

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

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">id pasok</th>
                <th scope="col">id kasir</th>
                <th scope="col">id buku</th>
                <th scope="col">jumlah</th>
                <th scope="col">tanggal</th>
            </tr>
        </thead>
        <tbody>
        <?php $a =1; ?>
        <?php foreach ($hasil as $terserah) { ?>
            <tr>
                <th scope="row"><?= $a; ?></th>
                <td><?= $terserah['id_pasok']; ?></td>
                <td><?= $terserah['id_kasir']; ?></td>
                <td><?= $terserah['id_buku']; ?></td>
                <td><?= $terserah['jumlah']; ?></td>
                <td><?= $terserah['tanggal']; ?></td>
            </tr>
            <?php $a++; } ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>