<?php 

include 'koreksi.php';
$sql = 'select * from toko_buku';
$hasil = $koneksi->query($sql);

 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">id_distributor</th>
      <th scope="col">nama_distributor</th>
      <th scope="col">alamat</th>
      <th scope="col">telepon</th>
      <th scope="col" class="text-center">action</th>
    </tr>
  </thead>
  <tbody>
    <?php $a =1; ?>
    <?php foreach ($hasil as $terserah) { ?>
    <tr>
      <th scope="row"><?= $a; ?></th>
      <td><?= $terserah['nama_distributor']; ?></td>
      <td><?= $terserah['alamat']; ?></td>
      <td><?= $terserah['telepon']; ?></td>
      <td>
      <a href="/edit.php?nis=<?=$terserah['id_distributor']?>" class="btn btn-success text-center" style="width: 100px;">Edit</a> 
      <a href="/delete.php?nis=<?=$terserah['id_distributor']?>" class="btn btn-danger text-center" style="width: 100px;">Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>