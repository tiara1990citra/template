<?php

include "koreksi.php";

$jajan = "INSERT INTO toko_buku(nama_distributor,alamat,telepon) values(
 '" . $_POST['nama_distributor'] . "',   
 '" . $_POST['alamat'] . "',   
 '" . $_POST['telepon'] . "'   
)";

$koneksi->query($jajan);
 
?> 