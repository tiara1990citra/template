<?php

    include '../koreksi.php';

    $sql = 'DELETE FROM buku WHERE id_buku=' .$_GET['id'];

    $koneksi->query($sql);
    header('locatiaon:tabelpenjualan.php');

?>