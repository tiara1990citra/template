<?php

    include '../koreksi.php';

    $sql = 'DELETE FROM toko_buku WHERE id_distributor=' .$_GET['id'];

    $koneksi->query($sql);
    header('locatiaon:tabelpenjualan.php');

?>