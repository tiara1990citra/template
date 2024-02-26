<?php

include "koreksi.php";

$sql = "select * from buku";
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
                <th scope="col">id_buku</th>
                <th scope="col">judul</th>
                <th scope="col">no isbn</th>
                <th scope="col">penulis</th>
                <th scope="col">penerbit</th>
                <th scope="col">tahun</th>
                <th scope="col">stok</th>
                <th scope="col">harga_pokok</th>
                <th scope="col">harga_jual</th>
                <th scope="col">ppn</th>
                <th scope="col">diskon</th>

            </tr>
        </thead>
        <tbody>
            <?php $a = 1;
            foreach ($hasil as $s) { ?>
                <tr>
                    <th scope="row">
                        <?= $a; ?>
                    </th>
                    <td>
                        <?= $s['id_buku']; ?>
                    </td>
                    <td>
                        <?= $s['judul']; ?>
                    </td>
                    <td>
                        <?= $s['noisbn']; ?>
                    </td>
                    <td>
                        <?= $s['penulis']; ?>
                    </td>
                    <td>
                        <?= $s['penerbit']; ?>
                    </td>
                    <td>
                        <?= $s['tahun']; ?>
                    </td>
                    <td>
                        <?= $s['stok']; ?>
                    </td>
                    <td>
                        <?= $s['harga_pokok']; ?>
                    </td>
                    <td>
                        <?= $s['harga_jual']; ?>
                    </td>
                    <td>
                        <?= $s['ppn']; ?>
                    </td>
                    <td>
                        <?= $s['diskon']; ?>
                    </td>
                </tr>
                <?php $a++;
            } ?>
        </tbody>
        </thead>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>

</html>